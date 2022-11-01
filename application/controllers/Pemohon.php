<?php

/**
 *
 */
class Pemohon extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('pemohon_list');
    }

    public function create()
    {
        $this->session->set_userdata('input_pemohon', 'belum_input');
        $this->session->set_userdata('input_pasangan', 'belum_input');
        $this->session->set_userdata('input_penjamin_1', 'belum_input');
        $this->session->set_userdata('input_penjamin_2', 'belum_input');
        $this->session->set_userdata('status_pemohon', '');
        $this->session->set_userdata('status_penjamin_1', '');
        $this->session->set_userdata('status_penjamin_2', '');
        $data = array(
            'kode' => '',
            'nama' => ''
        );
        $this->load->view('pemohon_form', $data);
    }

    public function create_action()
    {
        if ($this->session->userdata('input_pemohon') == 'belum_input') {
            $data = array(
                'kode' => $_POST['kode'],
                'nama' => $_POST['nama'],
                'status' => $_POST['status']
            );
            $this->session->set_userdata('data_pemohon', $data);
            $this->session->set_userdata('input_pemohon', 'sudah_input');

            $status = isset($_POST['status']) ? $_POST['status'] : '';
            $this->session->set_userdata('status_pemohon', $status);

            $penjamin_1 = isset($_POST['penjamin_1']) ? $_POST['penjamin_1'] : '';
            $this->session->set_userdata('status_penjamin_1', $penjamin_1);

            $penjamin_2 = isset($_POST['penjamin_2']) ? $_POST['penjamin_2'] : '';
            $this->session->set_userdata('status_penjamin_2', $penjamin_2);
        }

        if ($this->session->userdata('status_pemohon') == 'menikah') {
            if ($this->session->userdata('input_pasangan') == 'belum_input') {
                redirect(site_url('pasangan/create'));
            }
        }

        if ($this->session->userdata('status_penjamin_1') == 'ada') {
            if ($this->session->userdata('input_penjamin_1') == 'belum_input') {
                redirect(site_url('penjamin_1/create'));
            }
        }

        if ($this->session->userdata('status_penjamin_2') == 'ada') {
            if ($this->session->userdata('input_penjamin_2') == 'belum_input') {
                redirect(site_url('penjamin_2/create'));
            }
        }

        if ($this->session->userdata('input_pemohon') == 'sudah_input') {
            echo '<pre>';
            echo '<br>';
            echo 'Pemohon';
            echo '<br>';
            print_r($this->session->userdata('data_pemohon'));
            echo '<br>';
            echo '</pre>';

            if ($this->session->userdata('input_pasangan') == 'sudah_input') {
                echo '<pre>';
                echo '<br>';
                echo 'Pasangan';
                echo '<br>';
                print_r($this->session->userdata('data_pasangan'));
                echo '<br>';
                echo '</pre>';
            }

            if ($this->session->userdata('input_penjamin_1') == 'sudah_input') {
                echo '<pre>';
                echo '<br>';
                echo 'Penjamin #1';
                echo '<br>';
                print_r($this->session->userdata('data_penjamin_1'));
                echo '<br>';
                echo '</pre>';
            }

            if ($this->session->userdata('input_penjamin_2') == 'sudah_input') {
                echo '<pre>';
                echo '<br>';
                echo 'Penjamin #2';
                echo '<br>';
                print_r($this->session->userdata('data_penjamin_2'));
                echo '<br>';
                echo '</pre>';
            }

            echo '<br>';
            ?>
            <a href="<?= site_url('pemohon') ?>">Kembali</a>
            <?php
        }
    }
}
