<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->helper('url');
    }

    public function index()
    {

        $this->load->view('accueil');
    }
    
}
?>        
