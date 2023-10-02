<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function index(){
        $this->load->Model('admin/Annonce');
        $data['annonce'] = $this->Annonce->getAnnonce()->result_array();

        $this->load->view("admin/adminListe",$data);
    }

    public function listeService($idAnnonce = ''){
        $this->load->Model('admin/Annonce');
        $data['service'] = $this->Annonce->getService()->result_array();
        $data['annonce'] = $idAnnonce;

        $this->load->view("admin/listeService",$data);
    }

    public function selectionne($idService = '',$idAnnonce = ''){
        $this->load->Model("User/User");

        $data['selection'] = $this->User->selectionnedUser($idService,$idAnnonce)->result_array();

        $this->load->view("admin/selectionne",$data);
    }

    public function postuleUser($idAnnonce = ''){
        $this->load->Model('admin/Annonce');
        $this->load->Model('User/User');
        
        $id = $this->session->userdata('idUser');

        $this->Annonce->cvPostule($idAnnonce,$id);

        $user = $this->User->getCvByUser($id)->result_array();

        $annonce = $this->Annonce->getAnnonceById($idAnnonce)->result_array();

        $age = $this->User->caclAge($user[0]['datedenaissance']);

        $mot = $annonce[0]['age'];

        $age = explode(",",$mot);

        $note = 0;
        $noteDiplome = 0;
        $noteSexe = 0;
        $noteAnnee = 0;

        $ageUser = $this->User->caclAge($user[0]['datedenaissance']);

        if($annonce[0]['diplome'] == $user[0]['diplome']){
            $noteDiplome = 20;
        }
        if($annonce[0]['sexe'] == $user[0]['sexe']){
            $noteSexe = 20;
        }
        if($annonce[0]['anneeexperience'] < $user[0]['anneeexperience']){
            $noteAnnee = 20;
        }
        if($ageUser >= $age[0] && $ageUser<= $age[1] ){
            $noteAge = 20;
        }

        $note = $noteDiplome+$noteSexe+$noteAnnee+$noteAge;
        
        $noteSelection = $note/4;
        //echo $noteSelection;
        if($noteSelection>=10 && $noteSelection<=20){
            //echo $noteSelection;
            //echo $annonce[0]['idannonce'].' selectionneeeeeeee '.$user[0]['idutilisateur'].'   '.$annonce[0]['idservice'];
            $this->Annonce->selectionnee($user[0]['idutilisateur'],$annonce[0]['idannonce'],$annonce[0]['idservice']);
        }
    }
}