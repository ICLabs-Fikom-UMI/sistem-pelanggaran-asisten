<?php

class Pelanggaran_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        // $query = "INSERT INTO pelanggaran VALUES ('', :pelanggaran, :tanggal, :ID_Asisten, :ID_jenisKelakuan)";
        $query = "INSERT INTO pelanggaran (pelanggaran, tanggal, ID_Asisten, ID_JenisKelakuan, ID_TindakLanjut) 
                VALUES (:pelanggaran, :tanggal, :ID_Asisten, :ID_JenisKelakuan, :ID_TindakLanjut)";

        $this->db->query($query);
        $this->db->bind('pelanggaran', $data['pelanggaran']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('ID_Asisten', $data['ID_Asisten']);
        $this->db->bind('ID_JenisKelakuan', $data['ID_JenisKelakuan']);
        $this->db->bind('ID_TindakLanjut', $data['ID_TindakLanjut']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        
        $query = "UPDATE pelanggaran SET pelanggaran = :pelanggaran, tanggal = :tanggal WHERE ID_Pelanggaran = :ID_Pelanggaran";
        
        $this->db->query($query);
        $this->db->bind('pelanggaran', $data['pelanggaran']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('ID_Asisten', $data['ID_Asisten']);
        $this->db->bind('ID_JenisKelakuan', $data['ID_JenisKelakuan']);
        $this->db->bind('ID_TindakLanjut', $data['ID_TindakLanjut']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
            $query = "SELECT
            pelanggaran.ID_Pelanggaran,
            asisten.stambuk,
            asisten.nama,
            pelanggaran.pelanggaran,
            pelanggaran.tanggal,
            tindak_lanjut.tindak_lanjut,
            jenis_kelakuan.jenis_kelakuan
        FROM
            pelanggaran
        JOIN
            asisten ON pelanggaran.ID_Asisten = asisten.ID_Asisten
        JOIN
            tindak_lanjut ON pelanggaran.ID_TindakLanjut = tindak_lanjut.ID_TindakLanjut
        JOIN
            jenis_kelakuan ON pelanggaran.ID_JenisKelakuan = jenis_kelakuan.ID_JenisKelakuan;"
        ;
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function tampilAsisten(){
        $this->db->query("SELECT stambuk, nama FROM asisten ORDER BY ID_Asisten ASC");
        return $this->db->resultSet();
    }
    public function tampilJK(){
        $this->db->query("SELECT ID_JenisKelakuan, jenis_kelakuan FROM jenis_kelakuan");
        return $this->db->resultSet();
    }
    public function tampilTindakLanjut(){
        $this->db->query("SELECT ID_TindakLanjut, tindak_lanjut FROM tindak_lanjut");
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