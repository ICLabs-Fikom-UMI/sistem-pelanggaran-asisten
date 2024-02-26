<?php

class User_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $this->db->query("INSERT INTO user (nama, username, password, role, photo_path) 
                        VALUES (:nama, :username, :password, :role, :photo_path);");
        
        $photo_path = $this->uploadPhoto();

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);
        $this->db->bind('photo_path', $photo_path);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }    
    public function prosesUbah($data){
        if ($_FILES['photo_path']['error'] === UPLOAD_ERR_NO_FILE) {
            $photo_path = $this->getPhotoPathByID($data['ID_User']);
        } else {
            $photo_path = $this->uploadPhoto();
        }
        
        $this->db->query("UPDATE user 
                        SET 
                            nama = :nama, 
                            username = :username, 
                            password = :password, 
                            role = :role, 
                            photo_path = :photo_path 
                        WHERE 
                            ID_User = :ID_User;");

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);
        $this->db->bind('ID_User', $data['ID_User']);
        $this->db->bind('photo_path', $photo_path);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
    private function getPhotoPathByID($userID) {
        $this->db->query("SELECT photo_path FROM user WHERE ID_User = :ID_User");
        $this->db->bind(':ID_User', $userID);
        $result = $this->db->single();
        return $result['photo_path'];
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
        $this->db->query("DELETE FROM user WHERE ID_User = :id");
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    } 
    public function tampilDataUser($idUser) {
        $this->db->query("CALL TampilDataProfile(:idUser)");
        $this->db->bind(':idUser', $idUser);
        
        $result = $this->db->resultSet();
    
        return $result;
    }
    
    public function getIDAsistenByUserID($id) {
        $this->db->query("SELECT ID_User FROM asisten WHERE ID_User = :id");
        $this->db->bind('id', $id);

        $result = $this->db->single();

        if ($result) {
            return $result['ID_User'];
        } else {
            return null;
        }
    }
}