<?php

class Status_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO status (status) VALUES (:status)";
 
        $this->db->query($query);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        
        $query = "UPDATE status SET status = :status WHERE ID_Status = :ID_Status";
        
        $this->db->query($query);
        $this->db->bind('status', $data['status']);
        $this->db->bind('ID_Status', $data['ID_Status']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
        $this->db->query("SELECT * FROM status ORDER BY ID_Status ASC");
        return $this->db->resultSet();
    }
    public function ubah($id){
        $this->db->query("SELECT * FROM status WHERE ID_Status = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){

        $query = "DELETE FROM status WHERE ID_Status = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }  
}