<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    function verify($email,$mdp,$data){
        for($i = 0;$i<count($data);$i++){
            if($email == $data[$i]['email'] && $mdp == $data[$i]['mdp']){
                if($data[$i]['estadmin'] == 0){
                    return 0;
                }
                
                return 1;
            }
        }

        return 2;
    }
?>