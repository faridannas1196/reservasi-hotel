<?php
class login_model extends CI_Model {
    public function get_user($username, $password) {
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password), 1);

        return $query->row_array();
    }
}
