<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
   
    public function __construct()
    {
       parent::__construct();
       $this->load->model('Fasilitas_model');
       $this->load->model('Kamar_model');
       $this->load->model('Info_model');
    }

    public function dashboard()
    {
        $this->load->model('Fasilitas_model');
        $this->load->model('Kamar_model');

        $kamar['kamar'] = $this->Kamar_model->getKamar();
       
        $this->load->view('user/header');
        $this->load->view('user/dashboard',$kamar);
       
        $this->load->view('templates/footer');

        
    }

    public function info()
    {
        $this->load->model('Info_model');
      
        $data['info'] = $this->Info_model->getInfo();
        $this->load->view('user/info',$data);
    }
    public function fasilitas()
    {
        $this->load->model('Fasilitas_model');
        $data['fasilitas'] = $this->Fasilitas_model->getFasilitas();
        $this->load->view('user/header');
        $this->load->view('beranda/fasilitas',$data);
    }
}
