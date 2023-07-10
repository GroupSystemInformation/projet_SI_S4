<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $objectif = $this->crud_model->get_all_data("objectif");
        $regime = $this->crud_model->get_all_data("regime");
        $repas = $this->crud_model->get_all_data("combinaison_repas");
        $sport = $this->crud_model->get_all_data("sport_associe");

        $data['objectif'] = $objectif;
        $data['regime'] = $regime;
        $data['repas'] = $repas;
        $data['sport'] = $sport;

        $this->load->view('acompte_admin',$data);

    }

    public function update_regime()
    {
        $id_regime = $this->input->post('id_regime');
        $id_objectif = $this->input->post('id_objectif');
        $duree_jour = $this->input->post('duree_jour');
        $age_min = $this->input->post('age_min');
        $age_max = $this->input->post('age_max');
        $taille_min = $this->input->post('taille_min');
        $taille_max = $this->input->post('taille_max');
        $poids_min = $this->input->post("poids_min");
        $poids_max = $this->input->post('poids_max');
        $genre = $this->input->poste("genre");

        $data = array(
            'id_objectif' => $this->input->post('nom'),
            'duree_jour' => $this->input->post('prenom'),
            'age_min' => $this->input->post('mail'),
            'age_max' => $this->input->post('genre'),
            'taille_min' => floatval($this->input->post('taille')),
            'taille_max' => floatval($this->input->post('taille')),
            'poids_min' =>  intval($this->input->post('objectif')),
            'poids_max' => $this->input->post('mdp'),
            'genre' => $this->input->post('gerre')
        );

        $this->crud_model->update("regime", $id_regime, "id_regime", $data);
    }

    public function delete_regime()
    {
        $id_regime = $this->input->post('id_regime');

        $this->db->trans_begin();

        try {
            // Suppression des données dans la table regime
            $this->crud_model->delete_general("regime",$id_regime,"id_regime");

            // Suppression des données dans la table combinaison_repas
            $this->crud_model->delete_general("combinaison_repas",$id_regime,"id_regime");

            // Suppression des données dans la table  sport_associe
            $this->crud_model->delete_general("sport_associe",$id_regime,"id_regime");

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                $response['status'] = 'error';
                $response['message'] = 'Erreur lors de la suppression des données.';
            } else {
                $this->db->trans_commit(); // Validation de la transaction
                $response['status'] = 'success';
                $response['message'] = 'Données supprimées avec succès.';
            }
        } catch (Exception $e) {
            $this->db->trans_rollback(); // Annulation de la transaction
            $response['status'] = 'error';
            $response['message'] = 'Erreur lors de la suppression des données : ' . $e->getMessage();
        }
       
    }

        
}
?>        
