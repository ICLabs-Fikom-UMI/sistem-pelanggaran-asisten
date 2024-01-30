<?php

class JK extends Controller {
    public function index()
    {
        $this->isAdminOrKorlab();
        $data['title'] = 'Data Jenis Kelakuan';
        $data['jenisKelakuan'] = $this->model('JK_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('jk/index', $data);
        $this->view('templates/footer');
    }
    public function modalTambah()
    {
        $this->isAdminOrKorlab();
        // $data['title'] = 'Tambah Data Jenis Kelakuan';

        // $this->view('templates/header', $data);
        // $this->view('templates/topbar');
        // $this->view('templates/sidebar', $data);
        $this->view('jk/tambah_data');
        // $this->view('templates/footer');
    }
    public function ubahModal()
    {
        $this->isAdminOrKorlab();
        $id = $_POST['id'];
        $data['ubahdataJK'] = $this->model('JK_model')->ubah($id);

        $this->view('jk/ubah_jk', $data);
    }
    public function detailjenisKelakuan($id){
        $this->isAdminOrKorlab();
        $data['title'] = 'Detail Data Jenis Kelakuan';
        $data['detail_jenisKelakuan'] = $this->model('JK_model')->detailjenisKelkuan($id);
    
        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('jk/detail_jenisKelakuan', $data);
        $this->view('templates/footer');
    }
    
    public function tambah(){
        $this->isAdminOrKorlab();
        if($this->model('JK_model')->tambah($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL. '/jk');
            exit;
        }
    }
    public function prosesUbah(){
        $this->isAdminOrKorlab();
        if($this->model('JK_model')->prosesUbah($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: '.BASEURL. '/jk');
            exit;
        }
    }
    public function hapus($id){
        $this->isAdminOrKorlab();
        if($this->model('JK_model')->prosesHapus($id)){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: '.BASEURL. '/jk');
            exit;
        }
    }    
}
