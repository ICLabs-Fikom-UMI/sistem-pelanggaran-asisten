<?php

class Pelanggaran_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $this->db->query("INSERT INTO pelanggaran (pelanggaran, tanggal, ID_Asisten, ID_TindakLanjut) 
                        VALUES (:pelanggaran, :tanggal, :ID_Asisten, :ID_TindakLanjut)");
        $this->db->bind('pelanggaran', $data['pelanggaran']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('ID_Asisten', $data['ID_Asisten']);
        $this->db->bind('ID_TindakLanjut', $data['ID_TindakLanjut']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        $this->db->query("UPDATE pelanggaran 
                            SET 
                                pelanggaran = :pelanggaran, tanggal = :tanggal, 
                                ID_Asisten = :ID_Asisten, ID_TindakLanjut = :ID_TindakLanjut 
                            WHERE 
                                ID_Pelanggaran = :ID_Pelanggaran");

        $this->db->bind('pelanggaran', $data['pelanggaran']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('ID_Asisten', $data['ID_Asisten']);
        $this->db->bind('ID_TindakLanjut', $data['ID_TindakLanjut']);
        $this->db->bind('ID_Pelanggaran', $data['ID_Pelanggaran']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
        $this->db->query("SELECT pelanggaran.ID_Pelanggaran,
                            asisten.stambuk,
                            asisten.nama,
                            pelanggaran.pelanggaran,
                            pelanggaran.tanggal,
                            tindak_lanjut.tindak_lanjut
                        FROM
                            pelanggaran
                        JOIN
                            asisten ON pelanggaran.ID_Asisten = asisten.ID_Asisten
                        JOIN
                            tindak_lanjut ON pelanggaran.ID_TindakLanjut = tindak_lanjut.ID_TindakLanjut;");
        return $this->db->resultSet();
    }
    public function tampilAsisten(){
        $this->db->query("SELECT stambuk, nama FROM asisten ORDER BY ID_Asisten ASC");

        return $this->db->resultSet();
    }
    public function tampilIDAsisten(){
        $this->db->query("SELECT ID_Asisten, nama FROM asisten");

        return $this->db->resultSet();
    }
    public function tampilTindakLanjut(){
        $this->db->query("SELECT ID_TindakLanjut, tindak_lanjut FROM tindak_lanjut");

        return $this->db->resultSet();
    }
    public function tampilKelas(){
        $this->db->query("SELECT ID_Kelas, kelas FROM kelas");

        return $this->db->resultSet();
    }
    public function ubah($id){
        $this->db->query("SELECT * FROM pelanggaran WHERE ID_Pelanggaran = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){
        $this->db->query("DELETE FROM pelanggaran WHERE ID_Pelanggaran = :id");
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }
    public function hapusPelanggaranPer6Bulan() {
        $this->db->query("DELETE FROM pelanggaran 
                        WHERE 
                        tanggal < DATE_SUB(NOW(), INTERVAL 6 MONTH)");
        $this->db->execute();
        
        return $this->db->rowCount();
    }
    // 0 0 1 * * /usr/bin/php /path/to/your/script.php
    public function detailPelanggaran($id){
        $this->db->query("SELECT * FROM pelanggaran WHERE ID_Pelanggaran = :id");
        $this->db->bind("id", $id);
        
        return $this->db->single(); 
    } 
    // SYNTAX 1 UNTUK ADMIN DAN KORLAB    
    public function tampilDataPelanggaranAdminKorlab() {
        $this->db->query("SELECT 
                            pelanggaran.ID_Pelanggaran, 
                            pelanggaran.pelanggaran, 
                            asisten.stambuk AS stambuk, 
                            asisten.nama AS nama, 
                            tindak_lanjut.tindak_lanjut AS tindak_lanjut,
                            pelanggaran.tanggal
                        FROM pelanggaran
                        JOIN asisten ON pelanggaran.ID_Asisten = asisten.ID_Asisten
                        LEFT JOIN tindak_lanjut ON pelanggaran.ID_TindakLanjut = tindak_lanjut.ID_TindakLanjut
                        ORDER BY pelanggaran.tanggal ASC;
                        ");
    
        return $this->db->resultSet();
    }
    // SYNTAX 2 UNTUK ASISTEN
    public function tampilDataPelanggaranAsisten(){
        $idAsisten = $_SESSION['ID_Asisten'] ?? null;
        // $idAsisten = $_SESSION['ID_Asisten'];
        $this->db->query("SELECT 
                            pelanggaran.ID_Pelanggaran, 
                            pelanggaran.pelanggaran, 
                            pelanggaran.tanggal, 
                            tindak_lanjut.tindak_lanjut
                        FROM 
                            pelanggaran
                        JOIN 
                            tindak_lanjut ON pelanggaran.ID_TindakLanjut = tindak_lanjut.ID_TindakLanjut
                        WHERE 
                            pelanggaran.ID_Asisten = :idAsisten");
        $this->db->bind('idAsisten', $idAsisten);

        return $this->db->resultSet();
    }
    // UNTUK BAGIAN DASBOARD
    public function getTindakLanjutDetailById($id) {
        $this->db->query("SELECT * FROM tindak_lanjut WHERE ID_TindakLanjut = :id");
        $this->db->bind('id', $id);

        return $this->db->single();
    }
    public function jumlahDataPelanggaranPer6Bulan() {
        $this->db->query("SELECT
                            CONCAT(YEAR(tanggal), '-', QUARTER(tanggal)) AS periode,
                            COUNT(*) AS jumlah
                        FROM
                            pelanggaran
                        GROUP BY
                            YEAR(tanggal), QUARTER(tanggal)");

        return $this->db->resultSet();
    }
        
}