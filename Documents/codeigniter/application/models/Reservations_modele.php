<?php

class Reservations_modele extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_reservation($numclient = 0) {
        if ($numclient === 0) {
            $query = $this->db->get('reservation');
            return $query->result_array();
        }

        $query = $this->db->get_where('reservation', array('idUtil' => $numclient));
        return $query->result_array();
    }

    public function get_all_reservation() {

        $query = $this->db->get('reservation');
        return $query->result_array();
    }

    public function set_form() {
        $this->load->helper('url');

        $slug = url_titre($this->input->post('titre'), 'dash', TRUE);

        $data = array(
            'titre' => $this->input->post('titre'),
            'slug' => $slug,
            'texte' => $this->input->post('texte')
        );

        return $this->db->insert('form', $data);
    }

    public function set_myform() {

        $data = array(
            'Date_Arrivee' => $this->input->post('Date_Arrivee'),
            'Date_Depart' => $this->input->post('Date_Depart'),
            'Nb_Personnes' => $this->input->post('Nb_Personnes'),
            'Menage' => $this->input->post('Menage'),
            'idClient' => $this->input->post('idUtil')
        );

        return $this->db->insert('reservation', $data);
    }
}