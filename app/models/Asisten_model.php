<?php

class Asisten_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    // public function tambah($data){
    //     $query = "INSERT INTO asisten VALUES ('', :stambuk, :nama, :jenis_kelamin, :no_telp, :ID_Kelas, :ID_Angkatan, :ID_Jurusan, :ID_Status, :ID_User)";
       
    //     $this->db->query($query);
    //     $this->db->bind('stambuk', $data['stambuk']);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    //     $this->db->bind('no_telp', $data['no_telp']);
    //     $this->db->bind('ID_Kelas', $data['ID_Kelas']);
    //     $this->db->bind('ID_Angkatan', $data['ID_Angkatan']);
    //     $this->db->bind('ID_Jurusan', $data['ID_Jurusan']);
    //     $this->db->bind('ID_Status', $data['ID_Status']);
    //     $this->db->bind('ID_User', $data['ID_User']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }
    public function tambah($data){
        // $query = "INSERT INTO asisten VALUES ('', :stambuk, :nama, :jenis_kelamin, :no_telp, :ID_Kelas, :ID_Angkatan, :ID_Jurusan, :ID_Status, :ID_User)";
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
        $query = "SELECT ID_User FROM user";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getKelasById($id) {
        $query = "SELECT * FROM kelas WHERE ID_Kelas = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getAngkatanById($id) {
        $query = "SELECT * FROM angkatan WHERE ID_Angkatan = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getJurusanById($id) {
        $query = "SELECT * FROM jurusan WHERE ID_Jurusan = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getStatusById($id) {
        $query = "SELECT * FROM status WHERE ID_Status = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getUserById($id) {
        $query = "SELECT * FROM user WHERE ID_User = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    

    public function prosesUbah($data){
        
        $query = "UPDATE asisten SET stambuk = :stambuk, nama = :nama, kelas = :kelas, angkatan = :angkatan, jurusan = :jurusan, status = :status, jenis_kelamin = :jenis_kelamin, tempat_lahir = :tempat_lahir, tanggal_lahir = :tanggal_lahir, agama = :agama, alamat = :alamat, email = :email, no_telp = :no_telp WHERE ID_Asisten = :ID_Asisten";
        
        $this->db->query($query);
        $this->db->bind('stambuk', $data['stambuk']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('angkatan', $data['angkatan']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('ID_Asisten', $data['ID_Asisten']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
        $query = "SELECT asisten.ID_Asisten, asisten.stambuk, asisten.nama, kelas.kelas, angkatan.angkatan, status.status 
                    FROM asisten
                    JOIN kelas ON asisten.ID_Kelas = kelas.ID_Kelas
                    JOIN angkatan ON asisten.ID_Angkatan = angkatan.ID_Angkatan
                    JOIN status ON asisten.ID_Status = status.ID_Status;";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getAsistenIdByStambuk($stambuk) {
        $this->db->query("SELECT ID_Asisten FROM asisten WHERE stambuk = :stambuk");
        $this->db->bind('stambuk', $stambuk);
        return $this->db->single();
    }
    
    public function ubah($id){
        $this->db->query("SELECT * FROM asisten WHERE ID_Asisten = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){

        $query = "DELETE FROM asisten WHERE ID_Asisten = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }
    public function detailAsisten($id){
        $this->db->query("SELECT * FROM asisten WHERE ID_Asisten = :id");
        $this->db->bind("id", $id);
        
        return $this->db->single(); 
    }   
    
    // PERCOBAAN
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
        $this->db->query("SELECT ID_User, nama FROM user");
        return $this->db->resultSet();
    }
}