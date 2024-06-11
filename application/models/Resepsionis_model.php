<?php
class Resepsionis_model extends CI_Model
{
    public function getReservations()
    {
        $query = $this->db->get('reservasi');
        return $query->result_array();
    }

    public function getHistoryReservations()
    {
        $query = $this->db->get('history_reservasi');
        return $query->result_array();
    }

    public function searchReservations($search, $date)
    {
        $this->db->like('nama', $search);
        $this->db->where('tanggal_checkin >=', $date);
        $query = $this->db->get('reservasi');
        return $query->result_array();
    }

    public function getReservationById($id)
    {
        $query = $this->db->get_where('reservasi', array('id' => $id));
        return $query->row_array();
    }

    public function moveToHistory($reservation)
    {
        $this->db->insert('history_reservasi', $reservation);
    }

    public function deleteReservation($id)
    {
        $this->db->delete('reservasi', array('id' => $id));
    }
}
?>
