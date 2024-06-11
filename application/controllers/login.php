<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {
  public function index()
  {
      $this->load->library('form_validation'); // Memuat library form_validation
      $this->load->view('login/index');
  }
  

    public function process_login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/index');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('Login_model');
            $user = $this->Login_model->get_user($username, $password);

            if ($user) {
                $role = $user['role'];

                switch ($role) {
                    case 'user':
                        redirect('user/dashboard');
                        break;
                    case 'resepsionis':
                        redirect('resepsionis/dashboard');
                        break;
                    case 'admin':
                        redirect('admin/dashboard');
                        break;
                    default:
                        redirect('login');
                        break;
                }
            } else {
                $data['error'] = 'Mungkin Email Atau Password anda kurang tepat';
                $this->load->view('login/index', $data);
            }
        }
    }
}
