<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    public function register_user($data) {
        $this->db->insert('users', $data);
    }
}
