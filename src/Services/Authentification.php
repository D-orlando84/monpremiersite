<?php
// src/Services/Authentification.php

namespace App\Services;

class Authentification
{
    public function __construct($salt) {
        $this->salt = $salt;
    }

    public function getSalt(){
        return $this->salt;
    }

    public function hash_pwd($mdp)
    {
        $pwd_hash = password_hash($mdp, PASSWORD_BCRYPT, array('salt' => $this->salt));
        $pwd_hashX2 = password_hash($pwd_hash, PASSWORD_BCRYPT, array('salt' => $this->salt));
        if(password_verify($mdp, $pwd_hash )){
            echo "valide";
        } else {
            echo "faux";
        }
        
        return $pwd_hash;
    }
    
}
?>