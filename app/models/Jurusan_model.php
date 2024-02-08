<?php

class Jurusan_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO jurusan (jurusan) VALUES (:jurusan)";
 
        $this->db->query($query);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        
        $query = "UPDATE jurusan SET jurusan = :jurusan WHERE ID_Jurusan = :ID_Jurusan";
        
        $this->db->query($query);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('ID_Jurusan', $data['ID_Jurusan']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
        $this->db->query("SELECT * FROM jurusan ORDER BY ID_Jurusan ASC");
        return $this->db->resultSet();
    }
    public function ubah($id){
        $this->db->query("SELECT * FROM jurusan WHERE ID_Jurusan = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){

        $query = "DELETE FROM jurusan WHERE ID_Jurusan = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }  
}