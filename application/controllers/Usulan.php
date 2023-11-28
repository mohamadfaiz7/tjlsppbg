<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usulan extends CI_Controller
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
        $data['title'] = "usulan";
        $data['usulan'] = $this->admin->get_join();
        $this->template->load('templates/dashboard', 'usulan/data', $data);
    }

    public function get_desa($getId)
    {
        $id = encode_php_tags($getId);
        echo json_encode($this->db->get_where('desa', [ 'id_kecamatan' => $id ])->result_array());
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('id_desa', 'Desa', 'required|trim');
        $this->form_validation->set_rules('id_kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('id_program', 'Program', 'required|trim');
        $this->form_validation->set_rules('id_instansi', 'Instansi', 'required|trim');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim');
        $this->form_validation->set_rules('dana_usulan', 'Dana Usulan', 'required|trim');
        $this->form_validation->set_rules('usulan', 'Usulan', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        $this->form_validation->set_rules('created_at', 'Created At', 'required|trim');
    }

    public function add()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Usulan";
            $data['kategori'] = $this->admin->get('kategori');
            $data['desa'] = $this->admin->get('desa');
            $data['kecamatan'] = $this->admin->get('kecamatan');
            $this->template->load('templates/dashboard', 'usulan/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('usulan', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('usulan');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('usulan/add');
            }
        }
    }


    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Usulan";
            $data['kategori'] = $this->admin->get('kategori');
            $data['desa'] = $this->admin->get('desa');
            $data['kecamatan'] = $this->admin->get('kecamatan');
            $data['usulan'] = $this->admin->get('usulan', ['id' => $id]);
            $this->template->load('templates/dashboard', 'usulan/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('usulan', 'id', $id, $input);

            if ($update) {
                set_pesan('data berhasil diedit.');
                redirect('usulan');
            } else {
                set_pesan('data gagal diedit.');
                redirect('usulan/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('usulan', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('usulan');
    }
}
