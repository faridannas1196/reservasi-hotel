<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('reservasi_model');
    }

    public function index() {
        $this->load->view('reservasi/index');
    }

    public function submit_reservasi() {

        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'no_telepon' => $this->input->post('no_telepon'),
            'tipe_kamar' => $this->input->post('tipe_kamar'),
            'nomor_kamar' => $this->input->post('nomor_kamar'),
            'tanggal_checkin' => $this->input->post('tanggal_checkin'),
            'tanggal_checkout' => $this->input->post('tanggal_checkout')
        );

        $duplicate_room = $this->reservasi_model->check_duplicate_room($data['nomor_kamar'], $data['tanggal_checkin'], $data['tanggal_checkout']);

        if (!$duplicate_room) {
            $this->reservasi_model->insert_reservasi($data);
        
            $data['nama'] = $data['nama'];
            $data['email'] = $data['email'];
            $data['no_telepon'] = $data['no_telepon'];
            $data['tipe_kamar'] = $data['tipe_kamar'];
            $data['nomor_kamar'] = $data['nomor_kamar'];
            $data['tanggal_checkin'] = $data['tanggal_checkin'];
            $data['tanggal_checkout'] = $data['tanggal_checkout'];
        
            $this->load->view('reservasi_success', $data);
        } else {
            echo "Kamar sudah dipesan pada tanggal tersebut. Silakan pilih kamar lain.";
        }
    }
}
