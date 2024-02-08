<?php

class Kelas_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO kelas (kelas) VALUES (:kelas)";
 
        $this->db->query($query);
        $this->db->bind('kelas', $data['kelas']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        
        $query = "UPDATE kelas SET kelas = :kelas WHERE ID_Kelas = :ID_Kelas";
        
        $this->db->query($query);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('ID_Kelas', $data['ID_Kelas']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
        $this->db->query("SELECT * FROM kelas ORDER BY ID_Kelas ASC");
        return $this->db->resultSet();
    }
    public function ubah($id){
        $this->db->query("SELECT * FROM kelas WHERE ID_Kelas = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){

        $query = "DELETE FROM kelas WHERE ID_Kelas = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }  
}