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
        
        $query = "UPDATE pelanggaran SET pelanggaran = :pelanggaran, tanggal = :tanggal, ID_Asisten = :ID_Asisten, ID_JenisKelakuan = :ID_JenisKelakuan, ID_TindakLanjut = :ID_TindakLanjut WHERE ID_Pelanggaran = :ID_Pelanggaran";
        
        $this->db->query($query);
        $this->db->bind('pelanggaran', $data['pelanggaran']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('ID_Asisten', $data['ID_Asisten']);
        $this->db->bind('ID_JenisKelakuan', $data['ID_JenisKelakuan']);
        $this->db->bind('ID_TindakLanjut', $data['ID_TindakLanjut']);
        $this->db->bind('ID_Pelanggaran', $data['ID_Pelanggaran']);
    
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
    // SYNTAX 1 UNTUK ADMIN DAN KORLAB    
    public function tampilDataPelanggaranAdminKorlab() {
        $this->db->query("SELECT 
                            pelanggaran.ID_Pelanggaran, 
                            pelanggaran.pelanggaran, 
                            asisten.stambuk AS stambuk, 
                            asisten.nama AS nama, 
                            jenis_kelakuan.jenis_kelakuan AS jenis_kelakuan, 
                            tindak_lanjut.tindak_lanjut AS tindak_lanjut,
                            pelanggaran.tanggal
                        FROM pelanggaran
                        JOIN asisten ON pelanggaran.ID_Asisten = asisten.ID_Asisten
                        LEFT JOIN jenis_kelakuan ON pelanggaran.ID_JenisKelakuan = jenis_kelakuan.ID_JenisKelakuan
                        LEFT JOIN tindak_lanjut ON pelanggaran.ID_TindakLanjut = tindak_lanjut.ID_TindakLanjut
                        ORDER BY pelanggaran.tanggal ASC;
                        ");
    
        return $this->db->resultSet();
    }
    // SYNTAX 2 UNTUK ASISTEN
    public function tampilDataPelanggaranAsisten()
    {
        $idAsisten = $_SESSION['ID_Asisten'];
        $query = "SELECT 
                    pelanggaran.ID_Pelanggaran, 
                    pelanggaran.pelanggaran, 
                    -- asisten.nama, 
                    -- asisten.stambuk, 
                    jenis_kelakuan.jenis_kelakuan, 
                    pelanggaran.tanggal, 
                    tindak_lanjut.tindak_lanjut
                FROM 
                    pelanggaran
                -- JOIN 
                --     asisten ON pelanggaran.ID_Asisten = asisten.ID_Asisten
                JOIN 
                    jenis_kelakuan ON pelanggaran.ID_JenisKelakuan = jenis_kelakuan.ID_JenisKelakuan
                JOIN 
                    tindak_lanjut ON pelanggaran.ID_TindakLanjut = tindak_lanjut.ID_TindakLanjut
                WHERE 
                    pelanggaran.ID_Asisten = :idAsisten
                ";

        $this->db->query($query);
        $this->db->bind('idAsisten', $idAsisten);

        return $this->db->resultSet();
    }

    // UNTUK BAGIAN DASBOARD
    public function jumlahDataPelanggaran() {
        $this->db->query("SELECT COUNT(*) as jumlah FROM pelanggaran");
        $result = $this->db->single();
        return $result['jumlah'];
    }
    // UNTUK DETAIL ID
    public function getJenisKelakuanDetailById($id) {
        $query = "SELECT * FROM jenis_kelakuan WHERE ID_JenisKelakuan = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getTindakLanjutDetailById($id) {
        $query = "SELECT * FROM tindak_lanjut WHERE ID_TindakLanjut = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tampilByAsisten($idAsisten){
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
                    jenis_kelakuan ON pelanggaran.ID_JenisKelakuan = jenis_kelakuan.ID_JenisKelakuan
                WHERE
                    asisten.ID_Asisten = :idAsisten";

        $this->db->query($query);
        $this->db->bind('idAsisten', $idAsisten);

        return $this->db->resultSet();
    }    
}