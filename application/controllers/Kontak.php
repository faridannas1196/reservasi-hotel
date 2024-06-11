<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kontak_model');
    }
    public function index() {
        $this->load->view('templates/footer');
    }
    public function process_form() {
        $data = array(
            'nama'   => $this->input->post('nama'),
            'email'  => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'subjek' => $this->input->post('subjek'),
            'pesan'  => $this->input->post('pesan')
        );

        // Panggil model untuk menyimpan data ke database
        $insert_id = $this->Kontak_model->insert_data($data);

        if ($insert_id) {
            echo "Data berhasil disimpan dengan ID: " . $insert_id;
        } else {
            echo "Gagal menyimpan data";
        }
    }
}
