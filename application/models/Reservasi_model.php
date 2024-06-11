<?php
class Reservasi_model extends CI_Model {
    public function insert_reservasi($data) {
        $this->db->insert('reservasi', $data);
    }

    public function check_duplicate_room($nomor_kamar, $tanggal_checkin, $tanggal_checkout) {
        $this->db->where('nomor_kamar', $nomor_kamar);
        $this->db->where("((tanggal_checkin <= '$tanggal_checkin' AND tanggal_checkout >= '$tanggal_checkin') OR (tanggal_checkin <= '$tanggal_checkout' AND tanggal_checkout >= '$tanggal_checkout'))", NULL, FALSE);
        $query = $this->db->get('reservasi');
        return $query->num_rows() > 0;
    }
}
