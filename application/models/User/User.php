<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{

    public function getUserByEmail($email,$mdp){
        $query = "select * from utilisateur where email = '".$email."' and mdp = '".$mdp."'";
        $table = $this->db->query($query); 
        return $table;
    }

    public function getUser(){
        $query = "select * from utilisateur";
        $table = $this->db->query($query); 
        return $table;
    }

    public function caclAge($date){
        $annee = date("Y", strtotime($date));
        $anneeActuelle = date("Y");

        return $anneeActuelle - $annee;
    }

    public function ajoutUtilisateur($nom,$email,$mdp){
        $query = "insert into utilisateur values (default,%s,%s,%s,%d)";
        
        $pasAdmin = 1;

        $query = sprintf($query,$this->db->escape($nom),$this->db->escape($email),$this->db->escape($mdp),$pasAdmin);

        $this->db->query($query);
    }

    public function cvUtilisateur($idUtilisateur,$diplome,$sexe,$date,$situation,$adresse,$annee){
        $query = "insert into cv values (default,%d,%s,%s,%s,%s,%s,%s)";
        
        $query = sprintf($query,$idUtilisateur,$this->db->escape($diplome),$this->db->escape($sexe),$this->db->escape($date),$this->db->escape($situation),
        $this->db->escape($adresse),$this->db->escape($annee));

        $this->db->query($query);
    }
    
    public function getCvPostule(){
        $query = "select * from cvPostuleUser";
        $table = $this->db->query($query); 
        return $table;
    }

    public function getCvByUser($idUser){
        $query = "select * from cv where idUtilisateur  = ".$idUser;
        $table = $this->db->query($query); 
        return $table;
    }

    public function selectionnedUser($idService,$idAnnonce){
        $query = "select * from selectionned where idService = ".$idService." and idAnnonce = ".$idAnnonce;
        $table = $this->db->query($query); 
        return $table;
    }






    
}
?>