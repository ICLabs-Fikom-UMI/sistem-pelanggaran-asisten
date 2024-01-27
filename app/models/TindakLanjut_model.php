<?php

class TindakLanjut_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO tindak_lanjut VALUES ('', :tindak_lanjut)";
 
        $this->db->query($query);
        $this->db->bind('tindak_lanjut', $data['tindak_lanjut']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        
        $query = "UPDATE tindak_lanjut SET tindak_lanjut = :tindak_lanjut WHERE ID_TindakLanjut = :ID_TindakLanjut";
        
        $this->db->query($query);
        $this->db->bind('tindak_lanjut', $data['tindak_lanjut']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
        $this->db->query("SELECT * FROM tindak_lanjut ORDER BY ID_TindakLanjut ASC");
        return $this->db->resultSet();
    }
    public function ubah($id){
        $this->db->query("SELECT * FROM tindak_lanjut WHERE ID_TindakLanjut = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){

        $query = "DELETE FROM tindak_lanjut WHERE ID_TindakLanjut = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }
    public function detailtindakLanjut($id){
        $this->db->query("SELECT * FROM tindak_lanjut WHERE ID_TindakLanjut = :id");
        $this->db->bind("id", $id);
        
        return $this->db->single(); 
    }        
}