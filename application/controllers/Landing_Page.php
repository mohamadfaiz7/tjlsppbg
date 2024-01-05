<?php
class Landing_Page extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

	public function index() 
	{

		$this->load->view('landing_page');
		
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
            $this->template->load('templates/publik', 'landing_page/add_publik', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('usulan', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('landing_page');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('landing_page/add_publik');
            }
        }
    }
}
