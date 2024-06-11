<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FasilitasController extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Fasilitas_model');
   }

   public function index()
   {
      $data['fasilitas'] = $this->Fasilitas_model->get_all_fasilitas();
      $this->load->view('beranda/fasilitas', $data);
   }
}
