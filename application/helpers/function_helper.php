<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    function userToggling($toggle){
        if($toggle == 1){
            return "User/listeOffre";
        }else if($toggle == 2){
            return "User/listeCvPost";
        }else if($toggle == 3){
            return "User/cv";
        }

        return "User/listeOffice";

        
    }
?>