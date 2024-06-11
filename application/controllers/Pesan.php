<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

  public function __construct()
{
    parent::__construct();
    $this->load->library('form_validation');
}

    public function inpt()
    {
      $this->load->model('Info_model');
      
      $data['info'] = $this->Info_model->getInfo();
        $this->load->library('form_validation');
        $this->load->view('pesan/inpt', $data);
    }

    public function submit()
    {
        $this->load->model('Info_model');

        // Set aturan validasi
        $this->form_validation->set_rules('nama_tamu', 'Nama Tamu', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, kembali ke formulir
            $this->load->view('pesan/inpt');
        } else {
            // Validasi berhasil, simpan data ke database
            $data = array(
                'nama_tamu' => $this->input->post('nama_tamu'),
                'email' => $this->input->post('email'),
                'pesan' => $this->input->post('pesan')
            );

            $this->Info_model->insert_data($data);

            // Redirect ke halaman lain jika diperlukan
            redirect('pesan/success');
        }
    }

    public function success()
    {
      redirect('pesan/inpt');
    }

    public function delete($id)
{
    $this->load->model('Info_model');
    $this->Info_model->delete_data($id);

    // Redirect ke halaman setelah menghapus
    redirect('pesan/inpt');
}

}
