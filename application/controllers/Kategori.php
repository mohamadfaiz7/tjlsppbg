<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
        $data['title'] = "Kategori";
        $data['kategori'] = $this->admin->get('kategori');
        $this->template->load('templates/dashboard', 'kategori/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim');
        $this->form_validation->set_rules('created_at', 'Created At', 'required|trim');
    }

    public function add()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Kategori";
            $this->template->load('templates/dashboard', 'kategori/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('kategori', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('kategori');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('kategori/add');
            }
        }
    }


    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Kategori";
            $data['kategori'] = $this->admin->get('kategori', ['id' => $id]);
            $this->template->load('templates/dashboard', 'kategori/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('kategori', 'id', $id, $input);

            if ($update) {
                set_pesan('data berhasil diedit.');
                redirect('kategori');
            } else {
                set_pesan('data gagal diedit.');
                redirect('kategori/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('kategori', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('kategori');
    }
}
