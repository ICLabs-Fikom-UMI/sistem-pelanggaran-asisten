<?php

class User_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO user (nama, username, password, role) VALUES (:nama, :username, :password, :role)";
 
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        
        $query = "UPDATE user SET nama = :nama, username = :username, password = :password, role = :role WHERE ID_User = :ID_User";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);
        $this->db->bind('ID_User', $data['ID_User']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
        $this->db->query("SELECT * FROM user ORDER BY ID_User ASC");
        return $this->db->resultSet();
    }
    public function ubah($id){
        $this->db->query("SELECT * FROM user WHERE ID_User = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){

        $query = "DELETE FROM user WHERE ID_User = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    } 
    public function tampilDataUser(){
        $idAsisten = $_SESSION['ID_Asisten'];
        $query = "SELECT
                    user.ID_User,
                    user.nama,
                    user.username,
                    user.password
                FROM
                    user
                JOIN
                    asisten ON user.ID_User = asisten.ID_User
                WHERE
                    asisten.ID_Asisten = :idAsisten
                ";

        $this->db->query($query);
        $this->db->bind('idAsisten', $idAsisten);

        return $this->db->resultSet();
    }
}