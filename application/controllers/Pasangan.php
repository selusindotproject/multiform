<?php

/**
 *
 */
class Pasangan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }

    public function create()
    {
        $data = array(
            'kode' => '',
            'nama' => ''
        );
        $this->load->view('pasangan_form', $data);
    }

    public function create_action()
    {
        $data = array(
            'kode' => $_POST['kode'],
            'nama' => $_POST['nama'],
        );
        $this->session->set_userdata('data_pasangan', $data);
        $this->session->set_userdata('input_pasangan', 'sudah_input');
        redirect(site_url('pemohon/create_action'));
    }
}
