<?php

class Notifikasi_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $query = "INSERT INTO notifikasi (pesan, tanggal, ID_Asisten) 
                VALUES (:pesan, :tanggal, :ID_Asisten)";

        $this->db->query($query);
        $this->db->bind('pesan', $data['pesan']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('ID_Asisten', $data['ID_Asisten']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function prosesUbah($data){
        
        $query = "UPDATE notifikasi 
                SET 
                    pesan = :pesan, tanggal = :tanggal, ID_Asisten = :ID_Asisten 
                WHERE 
                    ID_Notifikasi = :ID_Notifikasi
                ";
        
        $this->db->query($query);
        $this->db->bind('pesan', $data['pesan']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('ID_Asisten', $data['ID_Asisten']);
        $this->db->bind('ID_Notifikasi', $data['ID_Notifikasi']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    public function tampil(){
            $query = "SELECT
            notifikasi.ID_Notifikasi,
            asisten.nama,
            notifikasi.pesan,
            notifikasi.tanggal
        FROM
            notifikasi
        JOIN
            asisten ON notifikasi.ID_Asisten = asisten.ID_Asisten;"
        ;
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function tampilAsisten(){
        $this->db->query("SELECT nama FROM asisten ORDER BY ID_Asisten ASC");
        return $this->db->resultSet();
    }
    public function tampilIDAsisten(){
        $this->db->query("SELECT ID_Asisten, nama FROM asisten");
        return $this->db->resultSet();
    }
    // public function ubah($id){
    //     $this->db->query("SELECT 
    //     notifikasi.ID_Notifikasi,
    //     asisten.ID_Asisten,
    //     asisten.nama,
    //     notifikasi.pesan,
    //     notifikasi.tanggal
    //     from
    //         notifikasi
    //     join
    //         asisten on notifikasi.ID_Asisten = asisten.ID_Asisten
    //     WHERE 
    //         ID_Notifikasi = :id");

    //     $this->db->bind("id", $id);

    //     return $this->db->single(); 
    // }
    public function ubah($id){
        $this->db->query("SELECT * FROM notifikasi WHERE ID_Notifikasi = :id");
        $this->db->bind("id", $id);

        return $this->db->single(); 
    }
    public function prosesHapus($id){
        $query = "DELETE FROM notifikasi WHERE ID_Notifikasi = :id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount(); 
    }
    public function detailNotifikasi($id){
        $this->db->query("SELECT * FROM notifikasi WHERE ID_Notifikasi = :id");
        $this->db->bind("id", $id);
        
        return $this->db->single(); 
    } 
    // SYNTAX 1 UNTUK ADMIN DAN KORLAB    
    public function tampilDataNotifikasiAdminKorlab() {
        $this->db->query("SELECT 
                            notifikasi.ID_Notifikasi, 
                            notifikasi.pesan, 
                            asisten.nama AS nama, 
                            notifikasi.tanggal
                        FROM notifikasi
                        JOIN asisten ON notifikasi.ID_Asisten = asisten.ID_Asisten
                        ORDER BY notifikasi.tanggal ASC;
                        ");
    
        return $this->db->resultSet();
    }
    // SYNTAX 2 UNTUK ASISTEN
    
    // UNTUK BAGIAN DASBOARD
    public function jumlahDataNotifikasi() {
        $this->db->query("SELECT COUNT(*) as jumlah FROM notifikasi");
        $result = $this->db->single();
        return $result['jumlah'];
    }
    public function getTindakLanjutDetailById($id) {
        $query = "SELECT * FROM tindak_lanjut WHERE ID_TindakLanjut = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tampilByAsisten($idAsisten){
        $query = "SELECT
                    notifikasi.ID_Notifikasi,
                    asisten.nama,
                    notifikasi.pesan,
                    notifikasi.tanggal,
                    tindak_lanjut.tindak_lanjut
                FROM
                    notifikasi
                JOIN
                    asisten ON notifikasi.ID_Asisten = asisten.ID_Asisten
                WHERE
                    asisten.ID_Asisten = :idAsisten";

        $this->db->query($query);
        $this->db->bind('idAsisten', $idAsisten);

        return $this->db->resultSet();
    }  
    public function tampilDataNotifikasiAsisten(){
        $idAsisten = $_SESSION['ID_Asisten'];
        $query = "SELECT
                    notifikasi.ID_Notifikasi,
                    notifikasi.pesan,
                    notifikasi.tanggal
                FROM
                    notifikasi
                JOIN
                    asisten ON notifikasi.ID_Asisten = asisten.ID_Asisten
                WHERE
                    asisten.ID_Asisten = :idAsisten
                ";

        $this->db->query($query);
        $this->db->bind('idAsisten', $idAsisten);

        return $this->db->resultSet();
    }
}