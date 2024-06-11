<?php
class Fasilitas_model extends CI_Model {
    public function getFasilitas() {
        $query = $this->db->get('fasilitas');
        return $query->result_array();
    }

    public function tambahFasilitas($data) {
        $this->db->insert('fasilitas', $data);
    }

    public function updateFasilitas($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('fasilitas', $data);
    }

    public function hapusFasilitas($id) {
        $this->db->where('id', $id);
        $this->db->delete('fasilitas');
    }

    public function getFasilitasById($id) {
        $query = $this->db->get_where('fasilitas', array('id' => $id));
        return $query->row_array();
    }
}
?>
