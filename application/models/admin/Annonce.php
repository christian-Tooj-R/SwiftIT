<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonce extends CI_Model{

    public function ajoutAnnonce($idService,$poste,$diplome,$sexe,$age,$situation,$adresse,$experience,$horaire){
        $query = "insert into annonce values (default,%d,%s,%s,%s,%s,%s,%s,%s,%d)";
        
        $query = sprintf($query,$idService,$this->db->escape($poste),
        $this->db->escape($diplome),$this->db->escape($sexe),$this->db->escape($age),$this->db->escape($situation),$this->db->escape($adresse),
        $this->db->escape($experience),$horaire);

        $this->db->query($query);
    }

    public function cvPostule($idAnnonce,$idUtilisateur){
        $query = "insert into cv_Postule values (default,%d,%d)";
        
        $query = sprintf($query,$idAnnonce,$idUtilisateur);

        $this->db->query($query);
    }
    
    public function getAnnonce(){
        $query = "select * from annonce";
        $table = $this->db->query($query);
        return $table;
    }

    public function getService(){
        $query = "select * from services";
        $table = $this->db->query($query);
        return $table;
    }

    public function getAnnonceByUser($idUser){
        $query = "select * from cvPostuleUser where idUtilisateur = ".$idUser;
        $table = $this->db->query($query);
        return $table;
    }

    public function getAnnonceById($idAnnonce){
        $query = "select * from annonce where idAnnonce = ".$idAnnonce;
        $table = $this->db->query($query);
        return $table;
    }

    public function selectionnee($idUtilisateur,$idAnnonce,$idService){
        $query = "insert into userSelectionne values (default,%d,%d,%d)";
        
        $query = sprintf($query,$idUtilisateur,$idAnnonce,$idService);

        $this->db->query($query);
    }

    /////fonction mbola tsy natsoina

    public function getAnnonceByHoraire($idAnnonce){
        $query = "select * from annonce";
        $table = $this->db->query($query);
        return $table;
    }

    public function nbrePersonnel($idAnnonce){
        $data = $this->getAnnonceByHoraire($idAnnonce)->result_array();

        return $data[0]['horaire'] / 40;
    }


}

?>