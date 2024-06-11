<?php
class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }

    public function index() {
        $this->load->view('register/index');
    }

    public function process_registration() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register/index');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'), 
                'role'     => $this->input->post('role'),
                'nama'     => $this->input->post('nama')
            );
            

            $this->user_model->insert_user($data);
            redirect('login');
        }
    }
}
