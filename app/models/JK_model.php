<?php

class JK_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO jenis_kelakuan (jenis_kelakuan) VALUES (:jenis_kelakuan)";
        // $query = "INSERT INTO jenis_kelakuan VALUES ('', :jenis_kelakuan)";
 
        $this->db->query($query);
        $this->db->bind('jenis_kelakuan', $data['jenis_kelakuan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        
        $query = "UPDATE jenis_kelakuan SET jenis_kelakuan = :jenis_kelakuan WHERE ID_JenisKelakuan = :ID_JenisKelakuan";
        
        $this->db->query($query);
        $this->db->bind('jenis_kelakuan', $data['jenis_kelakuan']);
        $this->db->bind('ID_JenisKelakuan', $data['ID_JenisKelakuan']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
        $this->db->query("SELECT * FROM jenis_kelakuan ORDER BY ID_jenisKelakuan ASC");
        return $this->db->resultSet();
    }
    public function ubah($id){
        $this->db->query("SELECT * FROM jenis_kelakuan WHERE ID_jenisKelakuan = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){

        $query = "DELETE FROM jenis_kelakuan WHERE ID_jenisKelakuan = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }
    public function detailAsisten($id){
        $this->db->query("SELECT * FROM jenis_kelakuan WHERE ID_jenisKelakuan = :id");
        $this->db->bind("id", $id);
        
        return $this->db->single(); 
    }        
    public function jumlahDataJenisKelakuan() {
        $this->db->query("SELECT COUNT(*) as jumlah FROM jenis_kelakuan");
        $result = $this->db->single();
        return $result['jumlah'];
    }
}