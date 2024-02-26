<?php

class Login_model {
    private $table = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getRole($username) {
        $this->db->query('SELECT role FROM ' . $this->table . ' WHERE username = :username');
        $this->db->bind('username', $username);        
        return $this->db->single();
    }
    public function getNamaUser($username) {
        $this->db->query('SELECT nama FROM ' . $this->table . ' WHERE username = :username');
        $this->db->bind('username', $username);    
        $result = $this->db->single();
    
        if ($result) {
            return $result['nama'];
        } else {
            return false;
        }
    }
    public function isDefaultPassword($password) {
        $defaultPasswords = ['admin', 'korlab', 'asisten'];
        
        return in_array($password, $defaultPasswords);
    }

    public function validateLogin($username, $password) {
        $this->db->query("SELECT ID_User, password 
                        FROM 
                            user 
                        WHERE 
                            username = :username and password = :password");
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);

        $result = $this->db->single();

        if ($result) {
            return $result['ID_User'];
        }
        else {
            return false;
        }
    }

}