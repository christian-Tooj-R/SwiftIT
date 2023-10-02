<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccueilController extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->load->helper('function_helper');
        $this->load->Model('admin/Annonce');
	}

    public function accueil(){
        $page = userToggling(1);

        $data['namePage'] = $page;

        $data['annonce'] = $this->Annonce->getAnnonce()->result_array();

        $this->load->view("accueil",$data);

    }

    public function inscription(){
        $this->load->view("User/inscription");
    }

    public function beMember(){
        $this->load->Model('User/User');

        $nom = $this->input->post('nom');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');

        $this->User->ajoutUtilisateur($nom,$email,$mdp);
        
        redirect("welcome/addCv");
    }

    public function toggle($id = ''){
        $this->load->Model('admin/Annonce');

        $page = userToggling($id);

        if($id == 1){
            $data['annonce'] = $this->Annonce->getAnnonce()->result_array();
        }else if($id = 2){
            $id = $this->session->userdata('idUser');
            $data['annonce'] = $this->Annonce->getAnnonceByUser($id)->result_array();
        }

        $data['namePage'] = $page;

        $this->load->view("accueil",$data);
    }

}
?>