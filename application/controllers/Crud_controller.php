<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
        $this->load->model('crud_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
       // $this->load->view('admin_param');
       $this->load->view('login_user');
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
        if ($this->session->userdata('user_id')){
            $user_id = $this->session->userdata('user_id');
            $user = $this->crud_model->getById("user",$user_id,"id_user");
            $objectif = $this->crud_model->get_all_data("objectif");
            $regime = $this->crud_model->get_all_data("regime");
            $data['user'] = $user;
            $data['objectif'] = $objectif;
            $data['regime'] = $regime;

            $this->load->view("admin_param",$data);
        }
    }
    

    public function lien_regime_user()
    {
        $regime = $this->get_proposition_regime();
        $repas = $this->get_repas();
        $sport = $this->get_sport();
        

        $data['regime'] = $regime;
        $data['repas'] = $repas;
        $data['sport'] = $sport;
        
        $this->load->view("regime_parfait",$data);
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
                'age'=> intval($this->input->post('age')),
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

        if ($this->session->userdata('user_id')){
            $id_user =  $this->session->userdata('user_id');
            $user = $this->crud_model->getById("user",$id_user,"id_user");
            $user_regime = $this->db->select("*");
            $this->db->from("regime");
            $this->db->where("id_objectif",$user[0]->idObjectif);
            $this->db->where("genre",$user[0]->genre);
            $this->db->where("age_min <=", $user[0]->age);
            $this->db->where("age_max >=", $user[0]->age);
            $this->db->where("taille_min <=", $user[0]->taille);
            $this->db->where("taille_max >=", $user[0]->taille);
            $this->db->where("poids_min <=", $user[0]->poids);
            $this->db->where("poids_max >=", $user[0]->poids);
            $query = $this->db->get();
            return $query->result();

        }

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

    public function enter_code_money()
    {
        $code_money = $this->input->post('code_money');
        $verif_money = $this->crud_model->getById("code_credit",$code_money,"numero");
        if (!empty($verif_money) && $verif_money[0]->estValide == 0) {
            if ($this->session->userdata('user_id')){
                $user_id = $this->session->userdata('user_id');
                $data = array(
                    'estValide' => 1,
                    'id_user' => $user_id,
                    'date_usage' => date('Y-m-d H:i:s')
                );

                $user = $this->crud_model->getById("user",$user_id,"id_user");

                $new_money = $verif_money[0]->valeur_credit+$user[0]->argent;

                $data_user = array(
                    'argent' => $new_money
                );

                $this->crud_model->update('code_credit', $verif_money[0]->id_code, 'id_code', $data);

                $this->crud_model->update('user', $user[0]->id_user, 'id_user', $data_user);

                $data_user_alefa['user'] = $user[0];

                $this->load->view('page_user',$data_user_alefa);
                
            }
        }else {
            $data_error['error'] = "Code invalide ou déjà utilisé.";
            $this->load->view('validation_error', $data_error);
        }
        
    }

        
}
?>        
