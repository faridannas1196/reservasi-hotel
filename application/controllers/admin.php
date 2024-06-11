<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fasilitas_model');
        $this->load->model('Kamar_model');
        $this->load->model('Kontak_model');

    }

    public function dashboard()
    {
        $data['fasilitas'] = $this->Fasilitas_model->getFasilitas();
        $data['kamar'] = $this->Kamar_model->getKamar();

        $data['kontak'] = $this->Kontak_model->getKontak();

        $this->load->view('admin/header');
        $this->load->view('admin/dashboard', $data);
    }
    public function tambah_kamar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'harga' => $this->input->post('harga'),
                'tipe_kamar' => $this->input->post('tipe_kamar'),
                'no_kamar' => $this->input->post('no_kamar'),
                'fasilitas' => $this->input->post('fasilitas'),
                'gambar' => $this->input->post('gambar')
            );

            $this->Kamar_model->tambahKamar($data);
            redirect('admin/dashboard');
        } else {
            $this->load->view('admin/tambah_kamar');
        }
    }

    public function update_kamar($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'harga' => $this->input->post('harga'),
                'tipe_kamar' => $this->input->post('tipe_kamar'),
                'no_kamar' => $this->input->post('no_kamar'),
                'fasilitas' => $this->input->post('fasilitas'),
                'gambar' => $this->input->post('gambar')
            );

            $this->Kamar_model->updateKamar($id, $data);
            redirect('admin/dashboard');
        } else {
            $data['kamar'] = $this->Kamar_model->getKamarById($id);
            $this->load->view('admin/update_kamar', $data);
        }
    }

    public function hapus_kamar($id)
    {
        $this->Kamar_model->hapusKamar($id);
        redirect('admin/dashboard');
    }
    public function tambah_fasilitas()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'nama' => $this->input->post('nama'),
                'gambar' => $this->input->post('gambar'),
                'deskripsi' => $this->input->post('deskripsi')
            );

            $this->Fasilitas_model->tambahFasilitas($data);
            redirect('admin/dashboard');
        } else {
            $this->load->view('admin/tambah_fasilitas');
        }
    }

    public function update_fasilitas($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'nama' => $this->input->post('nama'),
                'gambar' => $this->input->post('gambar'),
                'deskripsi' => $this->input->post('deskripsi')
            );

            $this->Fasilitas_model->updateFasilitas($id, $data);
            redirect('admin/dashboard');
        } else {
            $data['fasilitas'] = $this->Fasilitas_model->getFasilitasById($id);
            $this->load->view('admin/update_fasilitas', $data);
        }
    }

    public function hapus_fasilitas($id)
    {
        $this->Fasilitas_model->hapusFasilitas($id);
        redirect('admin/dashboard');
    }
}
?>
