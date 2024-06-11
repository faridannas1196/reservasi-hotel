<?php
class Kamar_model extends CI_Model {
    public function getKamar() {
        $query = $this->db->get('kamar');
        return $query->result_array();
    }

    public function tambahKamar($data) {
        $this->db->insert('kamar', $data);
    }

    public function updateKamar($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('kamar', $data);
    }

    public function hapusKamar($id) {
        $this->db->where('id', $id);
        $this->db->delete('kamar');
    }

    public function getKamarById($id) {
        $query = $this->db->get_where('kamar', array('id' => $id));
        return $query->row_array();
    }
}
?>
