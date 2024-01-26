<?php

class TindakLanjut_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO tindak_lanjut VALUES ('', :stambuk, :nama, :kelas, :angkatan, :jurusan, :status, :jenis_kelamin, :tempat_lahir, :tanggal_lahir, :agama, :alamat, :email, :no_telp, :ID_Login)";
 
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
        $this->db->bind('ID_Login', $data['ID_Login']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        
        $query = "UPDATE tindak_lanjut SET stambuk = :stambuk, nama = :nama, kelas = :kelas, angkatan = :angkatan, jurusan = :jurusan, status = :status, jenis_kelamin = :jenis_kelamin, tempat_lahir = :tempat_lahir, tanggal_lahir = :tanggal_lahir, agama = :agama, alamat = :alamat, email = :email, no_telp = :no_telp WHERE ID_Asisten = :ID_Asisten";
        
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
        $this->db->query("SELECT * FROM tindak_lanjut ORDER BY ID_Asisten ASC");
        return $this->db->resultSet();
    }
    public function ubah($id){
        $this->db->query("SELECT * FROM tindak_lanjut WHERE ID_Asisten = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){

        $query = "DELETE FROM tindak_lanjut WHERE ID_Asisten = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }
    public function detailtindakLanjut($id){
        $this->db->query("SELECT * FROM tindak_lanjut WHERE ID_Asisten = :id");
        $this->db->bind("id", $id);
        
        return $this->db->single(); 
    }        
}