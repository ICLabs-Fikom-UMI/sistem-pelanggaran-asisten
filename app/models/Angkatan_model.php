<?php

class Angkatan_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO angkatan (angkatan) VALUES (:angkatan)";
 
        $this->db->query($query);
        $this->db->bind('angkatan', $data['angkatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        
        $query = "UPDATE angkatan SET angkatan = :angkatan WHERE ID_Angkatan = :ID_Angkatan";
        
        $this->db->query($query);
        $this->db->bind('angkatan', $data['angkatan']);
        $this->db->bind('ID_Angkatan', $data['ID_Angkatan']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
        $this->db->query("SELECT * FROM angkatan ORDER BY ID_Angkatan ASC");
        return $this->db->resultSet();
    }
    public function ubah($id){
        $this->db->query("SELECT * FROM angkatan WHERE ID_Angkatan = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){

        $query = "DELETE FROM angkatan WHERE ID_Angkatan = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }  
}