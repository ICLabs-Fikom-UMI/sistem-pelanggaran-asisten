<?php

class Pelanggaran_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO pelanggaran VALUES ('', :detail_pelanggaran, :tanggal, :ID_Asisten, :ID_jenisKelakuan)";
 
        $this->db->query($query);
        $this->db->bind('detail_pelanggaran', $data['detail_pelanggaran']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('ID_Asisten', $data['ID_Asisten']);
        $this->db->bind('ID_jenisKelakuan', $data['ID_jenisKelakuan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        
        $query = "UPDATE pelanggaran SET detail_pelanggaran = :detail_pelanggaran, tanggal = :tanggal WHERE ID_Pelanggaran = :ID_Pelanggaran";
        
        $this->db->query($query);
        $this->db->bind('detail_pelanggaran', $data['detail_pelanggaran']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('ID_Pelanggaran', $data['ID_Pelanggaran']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
        $this->db->query("SELECT * FROM pelanggaran ORDER BY ID_Pelanggaran ASC");
        return $this->db->resultSet();
    }
    public function tampilAsisten(){
        $this->db->query("SELECT stambuk, nama FROM asisten ORDER BY ID_Asisten ASC");
        return $this->db->resultSet();
    }
    
    public function ubah($id){
        $this->db->query("SELECT * FROM pelanggaran WHERE ID_Pelanggaran = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){

        $query = "DELETE FROM pelanggaran WHERE ID_Pelanggaran = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }
    public function detailPelanggaran($id){
        $this->db->query("SELECT * FROM pelanggaran WHERE ID_Pelanggaran = :id");
        $this->db->bind("id", $id);
        
        return $this->db->single(); 
    }     
    // public function tampilDataPelanggaran() {
    //     $this->db->query("SELECT pelanggaran.*, asisten.stambuk, asisten.nama FROM pelanggaran
    //                      INNER JOIN asisten ON pelanggaran.ID_Asisten = asisten.ID_Asisten
    //                      ORDER BY pelanggaran.ID_Pelanggaran ASC");
    //     return $this->db->resultSet();
    // }
    public function tampilDataPelanggaran() {
        $this->db->query("SELECT pelanggaran.*, asisten.stambuk AS stambuk, asisten.nama  AS nama
                         FROM pelanggaran
                         INNER JOIN asisten ON pelanggaran.ID_Asisten = asisten.ID_Asisten
                         ORDER BY pelanggaran.ID_Pelanggaran ASC");
    
        return $this->db->resultSet();
    }
    
    
       
}