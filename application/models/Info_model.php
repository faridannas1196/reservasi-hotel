<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Info_model extends CI_Model {

    public function insert_data($data) {
        $this->db->insert('info', $data);
        return $this->db->insert_id();
    }

    public function getInfo() {
        return $this->db->get('info')->result_array();
    }

    public function delete_data($id)
{
    $this->db->where('id', $id);
    $this->db->delete('info');
}

}
