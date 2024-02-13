<?php

class User_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO user (nama, username, password, role, photo_path) 
                VALUES (:nama, :username, :password, :role, :photo_path);
                ";
        
        $photo_path = $this->uploadPhoto();
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);
        $this->db->bind('photo_path', $photo_path);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }    
    public function prosesUbah($data){
        $query = "UPDATE user 
                SET 
                    nama = :nama, 
                    username = :username, 
                    password = :password, 
                    role = :role, 
                    photo_path = :photo_path 
                WHERE 
                    ID_User = :ID_User;
                ";
        
        $photo_path = $this->uploadPhoto();
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);
        $this->db->bind('ID_User', $data['ID_User']);
        $this->db->bind('photo_path', $photo_path);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    private function uploadPhoto(){
        $file = $_FILES['photo_path'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileError = $file['error'];
    
        if ($fileError === UPLOAD_ERR_OK) {
            $destination = 'assets/img/uploads/' . $fileName;
            move_uploaded_file($fileTmpName, $destination);
            return $destination; 
        } else {
            return null;
        }
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
    public function tampilDataUser($idUser){
        $query = "SELECT
                    user.ID_User,
                    user.nama,
                    user.username,
                    user.password,
                    user.photo_path
                FROM
                    user
                WHERE
                    user.ID_User = :idUser";
    
        $this->db->query($query);
        $this->db->bind('idUser', $idUser);
    
        return $this->db->resultSet();
    }
}