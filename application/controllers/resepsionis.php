<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepsionis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Resepsionis_model');
    }

    public function dashboard()
    {
        $data['reservations'] = $this->Resepsionis_model->getReservations();
      

        $this->load->view('resepsionis/header');
        $this->load->view('resepsionis/dashboard', $data);
       
    }

    public function search()
    {
        $search = $this->input->post('search');
        $date = $this->input->post('date');

        $data['reservations'] = $this->Resepsionis_model->searchReservations($search, $date);

        $this->load->view('resepsionis/header');
        $this->load->view('resepsionis/dashboard', $data);
    }

    public function selesai($id)
    {
       
        $reservation = $this->Resepsionis_model->getReservationById($id);

       
        $this->Resepsionis_model->moveToHistory($reservation);

        
        $this->Resepsionis_model->deleteReservation($id);

       
        redirect('resepsionis/dashboard');
    }

    public function tidak_sah($id)
    {
        $this->Resepsionis_model->deleteReservation($id);

        redirect('resepsionis/dashboard');
    }
    public function history()
    {
        $data['history_reservations'] = $this->Resepsionis_model->getHistoryReservations();
        $this->load->view('resepsionis/header');
        $this->load->view('resepsionis/footer', $data);
    }
}
