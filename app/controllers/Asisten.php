<?php
class Asisten extends Controller {
    public function index(){
        $this->isAdmin();
        $data['title'] = 'Data Asisten';
        $data['asisten'] = $this->model('Asisten_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('asisten/index', $data);
        $this->view('templates/footer');
    }
    public function profile(){
        $this->isAsistenOrKorlab();
        $data['asisten'] = $this->model('Asisten_model')->tampilProfile();

        $data['kelasOptions'] = $this->model('Asisten_model')->tampilKelas();
        $data['angkatanOptions'] = $this->model('Asisten_model')->tampilAngkatan();
        $data['jurusanOptions'] = $this->model('Asisten_model')->tampilJurusan();
        $data['statusOptions'] = $this->model('Asisten_model')->tampilStatus();
        $data['userOptions'] = $this->model('Asisten_model')->tampilUser();

        $this->view('asisten/profile', $data);
    }
    public function modalTambah(){
        $this->isAdmin();

        $data['kelasOptions'] = $this->model('Asisten_model')->tampilKelas();
        $data['angkatanOptions'] = $this->model('Asisten_model')->tampilAngkatan();
        $data['jurusanOptions'] = $this->model('Asisten_model')->tampilJurusan();
        $data['statusOptions'] = $this->model('Asisten_model')->tampilStatus();
        $data['userOptions'] = $this->model('Asisten_model')->tampilUser();

        $this->view('asisten/tambah_data', $data);
    }
    public function ubahModal(){
        $this->isAdmin();
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Asisten_model')->ubah($id);
        $data['kelasOptions'] = $this->model('Asisten_model')->tampilKelas();
        $data['angkatanOptions'] = $this->model('Asisten_model')->tampilAngkatan();
        $data['jurusanOptions'] = $this->model('Asisten_model')->tampilJurusan();
        $data['statusOptions'] = $this->model('Asisten_model')->tampilStatus();
        $data['userOptions'] = $this->model('Asisten_model')->tampilUser();

        $data['kelasDetail'] = $this->model('Asisten_model')->getKelasById($data['ubahdata']['ID_Kelas']);
        $data['angkatanDetail'] = $this->model('Asisten_model')->getAngkatanById($data['ubahdata']['ID_Angkatan']);
        $data['jurusanDetail'] = $this->model('Asisten_model')->getJurusanById($data['ubahdata']['ID_Jurusan']);
        $data['statusDetail'] = $this->model('Asisten_model')->getStatusById($data['ubahdata']['ID_Status']);
        $data['userDetail'] = $this->model('Asisten_model')->getUserById($data['ubahdata']['ID_User']);

        $this->view('asisten/ubah_asisten', $data);
    }
    // public function detailAsisten($id){
    //     $this->isAdmin();
    //     $data['detail_asisten'] = $this->model('Asisten_model')->detailAsisten($id);
    //     $data['title'] = 'Detail Data Asisten';
        
    //     $data['kelasOptions'] = $this->model('Asisten_model')->tampilKelas();
    //     $data['angkatanOptions'] = $this->model('Asisten_model')->tampilAngkatan();
    //     $data['jurusanOptions'] = $this->model('Asisten_model')->tampilJurusan();
    //     $data['statusOptions'] = $this->model('Asisten_model')->tampilStatus();
    //     $data['userOptions'] = $this->model('Asisten_model')->tampilUser();
    
    //     $this->view('templates/header', $data);
    //     $this->view('templates/topbar');
    //     $this->view('templates/sidebar', $data);
    //     $this->view('asisten/detail_asisten', $data);
    //     $this->view('templates/footer');
    // }
    public function detailAsisten(){
        $this->isAdmin();
        $current_url = $_SERVER['REQUEST_URI'];
    
        $url_parts = explode('/', $current_url);
        $id = end($url_parts); 

        if (isset($_SESSION['role']) && ($_SESSION['role'] == 'admin')) {
            $data['detail_asisten'] = $this->model('Asisten_model')->detailAsisten($id);
        } else {
            
        }
    
    
        // $data['detail_asisten'] = $this->model('Asisten_model')->detailAsisten($id);
        $data['title'] = 'Detail Data Asisten';
        
        $data['kelasOptions'] = $this->model('Asisten_model')->tampilKelas();
        $data['angkatanOptions'] = $this->model('Asisten_model')->tampilAngkatan();
        $data['jurusanOptions'] = $this->model('Asisten_model')->tampilJurusan();
        $data['statusOptions'] = $this->model('Asisten_model')->tampilStatus();
        $data['userOptions'] = $this->model('Asisten_model')->tampilUser();
    
        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('asisten/detail_asisten', $data);
        $this->view('templates/footer');
    }
    // public function detailAsisten(){
    //     $this->isAdmin();
        
    //     $current_url = $_SERVER['REQUEST_URI'];
    
    //     $url_parts = explode('/', $current_url);
    //     $id = end($url_parts); 
    
    //     $data['detail_asisten'] = $this->model('Asisten_model')->detailAsisten($id);
    //     $data['title'] = 'Detail Data Asisten';
        
    //     $data['kelasOptions'] = $this->model('Asisten_model')->tampilKelas();
    //     $data['angkatanOptions'] = $this->model('Asisten_model')->tampilAngkatan();
    //     $data['jurusanOptions'] = $this->model('Asisten_model')->tampilJurusan();
    //     $data['statusOptions'] = $this->model('Asisten_model')->tampilStatus();
    //     $data['userOptions'] = $this->model('Asisten_model')->tampilUser();
    
    //     $this->view('templates/header', $data);
    //     $this->view('templates/topbar');
    //     $this->view('templates/sidebar', $data);
    //     $this->view('asisten/detail_asisten', $data);
    //     $this->view('templates/footer');
    // }
    
    public function tambah(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->isAdmin();
            $data['availableUserIDs'] = $this->model('Asisten_model')->getAvailableUserIDs();
    
            $data['kelasOptions'] = $this->model('Asisten_model')->tampilKelas();
            $data['angkatanOptions'] = $this->model('Asisten_model')->tampilAngkatan();
            $data['jurusanOptions'] = $this->model('Asisten_model')->tampilJurusan();
            $data['statusOptions'] = $this->model('Asisten_model')->tampilStatus();
            $data['userOptions'] = $this->model('Asisten_model')->tampilUser();
    
            $this->view('asisten/index', $data);
    
            if($this->model('Asisten_model')->tambah($_POST) > 0){
                header('Location: '.BASEURL. '/Asisten');
                exit;
            }
        }
    }
    public function prosesUbah(){
        $this->isAdmin();
        if($this->model('Asisten_model')->prosesUbah($_POST) > 0){
            header('Location: '.BASEURL. '/Asisten');
            exit;
        }
    }
    public function hapus($id){
        $this->isAdmin();
        if($this->model('Asisten_model')->prosesHapus($id)){
            header('Location: '.BASEURL. '/Asisten');
            exit;
        }
    }   
}