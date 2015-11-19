<?php

class Reservations extends CI_Controller {
     public function __construct()
      {
      parent::__construct();
      $this->load->model('Reservations_modele');

      }
/*
      public function index()
      {
      $data['reservations'] = $this->news_model->get_reservations();
      }

      public function view($idClient = NULL)
      {
      $data['reservations_item'] = $this->news_model->get_news($idClient);
      }
     

    public function afficher_all() {
        $data['titre'] = "Les réservations";

        $this->load->model('Reservations_modele');
        $data['reserv'] = $this->Reservations_modele->getReserv_all();

        $this->load->view('templates/header', $data);
        $this->load->view('reservations/afficher', $data);
        $this->load->view('templates/footer', $data);
    }
*/
    
      public function afficher($numclient = 0) {
      if ($numclient == 0) {
      show_404();
      }

      $data['titre'] = "Mes réservations";
      $data['num'] = $numclient;
      $data['reservation'] =  $this->reservations_modele->get_reservation($numclient);


      $this->load->view('templates/header', $data);
      $this->load->view('reservations/afficher', $data);
      $this->load->view('templates/footer', $data);
      }
     
/*
    public function connexion_reservation() {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form/myform');
        } else {
            $this->load->view('form/formsuccess');
        }
    }
*/
    public function form() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['titre'] = 'Réservation séjour !';

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('form/form');
            $this->load->view('templates/footer');
        } else {
            $this->load->view('form/formsuccess');
        }
    }

    public function myform() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['titre'] = 'Réservation séjour !';

        $this->form_validation->set_rules('idUtil', 'idUtil', 'required');
        $this->form_validation->set_rules('Date_Arrivee', 'Date_Arrivee', 'required');
        $this->form_validation->set_rules('Date_Depart', 'Date_Depart', 'required');
        $this->form_validation->set_rules('Nb_Personnes', 'Nb_Personnes', 'required');
        $this->form_validation->set_rules('Menage', 'Menage', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('form/myform');
            $this->load->view('templates/footer');
        } else {
            $this->Reservations_modele->set_formul();
            $this->load->view('form/formsuccess');
        }
        
    }

}
