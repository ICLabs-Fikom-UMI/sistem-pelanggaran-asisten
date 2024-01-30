<?php

class Login_model {
    private $table = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getRole($username) {
        $query = 'SELECT role FROM ' . $this->table . ' WHERE username = :username';
        
        $this->db->query($query);
        $this->db->bind('username', $username);
        
        return $this->db->single();
    }
    public function getNamaUser($username) {
        $query = 'SELECT nama FROM ' . $this->table . ' WHERE username = :username';
    
        $this->db->query($query);
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
        $query = 'SELECT ID_User, password FROM user WHERE username = :username and password = :password';

        $this->db->query($query);
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