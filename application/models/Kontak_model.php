<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontak_model extends CI_Model {

    public function insert_data($data) {
        $this->db->insert('kontak', $data);
        return $this->db->insert_id();
    }

    public function getKontak() {
        return $this->db->get('kontak')->result_array();
    }
}
