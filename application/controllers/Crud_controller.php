<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('page_user');
    }

    public function lien_inscription()
    {
        $objectif = $this->crud_model->get_all_data("objectif");
        $data['objectif'] = $objectif;
        $this->load->view("inscription_user",$data);
    }


    public function lien_login()
    {
        $this->load->view("login_user");
    }

    public function lien_admin()
    {
        $this->load->view("acompte_admin");
    }


    public function insert_user() {
        $this->form_validation->set_rules('nom', 'Nom', 'required|trim');
        $this->form_validation->set_rules('prenom', 'Prénom', 'required|trim');
        $this->form_validation->set_rules('mail', 'E-mail', 'required|valid_email|trim');
        $this->form_validation->set_rules('genre', 'Genre', 'required|trim');
        $this->form_validation->set_rules('taille', 'Taille', 'required');
        $this->form_validation->set_rules('poids', 'Poids', 'required');
        $this->form_validation->set_rules('objectif', 'Objectif', 'required');
        $this->form_validation->set_rules('mdp', 'Mot de passe', 'required');
        $this->form_validation->set_rules('mdp_confirmation', 'Confirmation du mot de passe', 'required|matches[mdp]');


        if($this->form_validation->run()==true)
        {
            $data = array(
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'mail' => $this->input->post('mail'),
                'genre' => $this->input->post('genre'),
                'taille' => floatval($this->input->post('taille')),
                'poids' => floatval($this->input->post('taille')),
                'idObjectif' =>  intval($this->input->post('objectif')),
                'mdp' => $this->input->post('mdp')
            );
    
            $this->crud_model->insert("user",$data);

            $data['message'] = "Vous pouvez maintenant vous connecter!!";
        }

        else
        {
            $data['message'] = "Il y a une erreur lors de la validation";

        }

        $this->load->view("inscription_user",$data);
        
    }

    //antsoina am login
    public function user_login(){
        $mail = $this->input->post('mail');
        $mdp = $this->input->post('mdp');
        $user = $this->crud_model->get_user_by_mail_and_password($mail, $mdp);

        if ($user){
            $this->session->set_userdata('user_id', $user->id_user);
            $data['user'] = $user;
            $this->load->view('page_user',$data);
        }
    }

    public function user_logout()
    {
        $this->session->unset_userdata('user_id');
        $this->load->view("login_user");
    }


    public function get_proposition_regime()
    {
        $id_user =  $this->session->userdata('user_id');
        $user = $this->crud_model->getById("user",$id_user,"id_user");
        $user_regime = $this->db->select("*");
        $this->db->from("regime r");
        $this->db->where("r.idObjectif",$user->idObjectif);
        $this->db->where("r.age_min <=", $user->age);
        $this->db->where("r.age_max >=",$user->age);
        $this->db->where("r.genre",$user->genre);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_repas()
    {
        $regimes = $this->get_proposition_regime();
        $repas = array();

        foreach ($regimes as $regime) {
            $idRegime = $regime->id_regime;
            $this->db->select("*");
            $this->db->from("combinaison_repas");
            $this->db->where("id_regime", $idRegime);
            $query = $this->db->get();
            $repas[$idRegime] = $query->result();
        }

        return $repas;
    }


    public function get_sport()
    {
        $regimes = $this->get_proposition_regime();
        $sport = array();

        foreach ($regimes as $regime) {
            $idRegime = $regime->id_regime;
            $this->db->select("*");
            $this->db->from("sport_associe");
            $this->db->where("id_regime", $idRegime);
            $query = $this->db->get();
            $sport[$idRegime] = $query->result();
        }

        return $sport;
    }

        
}
?>        
