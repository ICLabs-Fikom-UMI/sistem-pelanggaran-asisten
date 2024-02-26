<?php

class Asisten_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO asisten (stambuk, nama, jenis_kelamin, no_telp, ID_Kelas, ID_Angkatan, ID_Jurusan, ID_Status, ID_User) 
          VALUES (:stambuk, :nama, :jenis_kelamin, :no_telp, :ID_Kelas, :ID_Angkatan, :ID_Jurusan, :ID_Status, :ID_User)";
        
        $this->db->query($query);
        $this->db->bind('stambuk', $data['stambuk']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('ID_Kelas', $data['ID_Kelas']);
        $this->db->bind('ID_Angkatan', $data['ID_Angkatan']);
        $this->db->bind('ID_Jurusan', $data['ID_Jurusan']);
        $this->db->bind('ID_Status', $data['ID_Status']);
        $this->db->bind('ID_User', $data['ID_User']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function getAvailableUserIDs() {
        $this->db->query("SELECT ID_User FROM user");
        return $this->db->resultSet();
    }
    public function getKelasById($id) {
        $this->db->query("SELECT * FROM kelas WHERE ID_Kelas = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getAngkatanById($id) {
        $this->db->query("SELECT * FROM angkatan WHERE ID_Angkatan = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getJurusanById($id) {
        $this->db->query("SELECT * FROM jurusan WHERE ID_Jurusan = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getStatusById($id) {
        $this->db->query("SELECT * FROM status WHERE ID_Status = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getUserById($id) {
        $this->db->query("SELECT * FROM user WHERE ID_User = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getAsistenById($id) {
        $this->db->query("SELECT * FROM asisten WHERE ID_Asisten = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function prosesUbah($data){        
        $this->db->query("UPDATE asisten 
                        SET 
                            stambuk = :stambuk, nama = :nama, ID_Kelas = :ID_Kelas, ID_Angkatan = :ID_Angkatan, 
                            ID_Jurusan = :ID_Jurusan, ID_Status = :ID_Status, jenis_kelamin = :jenis_kelamin, 
                            no_telp = :no_telp, ID_User = :ID_User 
                        WHERE 
                            ID_Asisten = :ID_Asisten");
        
        $this->db->bind('stambuk', $data['stambuk']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('ID_Kelas', $data['ID_Kelas']);
        $this->db->bind('ID_Angkatan', $data['ID_Angkatan']);
        $this->db->bind('ID_Jurusan', $data['ID_Jurusan']);
        $this->db->bind('ID_Status', $data['ID_Status']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('ID_User', $data['ID_User']);
        $this->db->bind('ID_Asisten', $data['ID_Asisten']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
        $query = "SELECT asisten.ID_Asisten, asisten.stambuk, asisten.nama, kelas.kelas, angkatan.angkatan, status.status 
                    FROM 
                        asisten
                    JOIN 
                        kelas 
                    ON 
                        asisten.ID_Kelas = kelas.ID_Kelas
                    JOIN 
                        angkatan 
                    ON 
                        asisten.ID_Angkatan = angkatan.ID_Angkatan
                    JOIN 
                        status 
                    ON 
                        asisten.ID_Status = status.ID_Status;";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function tampilProfile(){
        $this->db->query("SELECT * FROM asisten ORDER BY ID_Asisten ASC");
        return $this->db->resultSet();
    }
    public function getAsistenIdByStambuk($stambuk) {
        $this->db->query("SELECT ID_Asisten FROM asisten WHERE stambuk = :stambuk");
        $this->db->bind('stambuk', $stambuk);
        return $this->db->single();
    }
    public function getAsistenIdByNama($nama) {
        $this->db->query("SELECT ID_Asisten FROM asisten WHERE nama = :nama");
        $this->db->bind('nama', $nama);
        return $this->db->single();
    }
    public function ubah($id) {
        $this->db->query("SELECT * FROM asisten WHERE ID_Asisten = :id");
        $this->db->bind("id", $id);
        return $this->db->single(); 
    }
    public function prosesHapus($id) {
        $this->db->query("DELETE FROM asisten WHERE ID_Asisten = :id");
        $this->db->bind("id", $id);
        $this->db->execute();
        return $this->db->rowCount(); 
    }
    public function detailAsisten($id){
        $this->db->query("CALL TampilDetailAsisten(:id)");
        $this->db->bind(":id", $id);        
        return $this->db->single(); 
    }   
    public function tampilKelas(){
        $this->db->query("SELECT ID_Kelas, kelas FROM kelas");
        return $this->db->resultSet();
    }
    public function tampilAngkatan(){
        $this->db->query("SELECT ID_Angkatan, angkatan FROM angkatan");
        return $this->db->resultSet();
    }
    public function tampilJurusan(){
        $this->db->query("SELECT ID_Jurusan, jurusan FROM jurusan");
        return $this->db->resultSet();
    }
    public function tampilStatus(){
        $this->db->query("SELECT ID_Status, status FROM status");
        return $this->db->resultSet();
    }
    public function tampilUser(){
        $this->db->query("SELECT ID_User, username FROM user");
        return $this->db->resultSet();
    }
    public function jumlahDataAsisten() {
        $this->db->query("SELECT COUNT(*) as jumlah FROM asisten");
        $result = $this->db->single();
        return $result['jumlah'];
    }
    public function cariDataAsisten($keyword)
    {
        $this->db->query("SELECT * FROM asisten WHERE stambuk LIKE :keyword OR nama LIKE :keyword");
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function getIDAsistenByUserID($id)
    {
        $this->db->query("SELECT ID_Asisten FROM asisten WHERE ID_User = :id");
        $this->db->bind('id', $id);

        $result = $this->db->single();

        if ($result) {
            return $result['ID_Asisten'];
        } else {
            return null;
        }
    }
    public function getIDAsistenByAsistenID($id)
    {
        $this->db->query("SELECT ID_Asisten FROM asisten WHERE ID_Asisten = :id");
        $this->db->bind('id', $id);

        $result = $this->db->single();

        if ($result) {
            return $result['ID_Asisten'];
        } else {
            return null;
        }
    }   
}