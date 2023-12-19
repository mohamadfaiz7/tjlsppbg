<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Perusahaan";
        $data['perusahaan'] = $this->admin->get('perusahaan');
        $this->template->load('templates/dashboard', 'perusahaan/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|numeric');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim');
    }

    public function add()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Perusahaan";
            $data['usulan'] = $this->admin->get('usulan');
            $this->template->load('templates/dashboard', 'perusahaan/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('perusahaan', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('perusahaan');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('perusahaan/add');
            }
        }
    }


    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Perusahaan";
            $data['ususlan'] = $this->admin->get('ususlan');
            $data['perusahaan'] = $this->admin->get('perusahaan', ['id' => $id]);
            $this->template->load('templates/dashboard', 'perusahaan/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('perusahaan', 'id', $id, $input);

            if ($update) {
                set_pesan('data berhasil diedit.');
                redirect('perusahaan');
            } else {
                set_pesan('data gagal diedit.');
                redirect('perusahaan/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('perusahaan', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('perusahaan');
    }
}
