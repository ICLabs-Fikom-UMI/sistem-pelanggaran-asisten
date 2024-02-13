<?php

class Controller{
    public function __construct(){
        $this->db = new Database();
        session_start();
    }
    public function view($view, $data = []){
        if(!isset($_SESSION['ID_User'])){
            require_once 'app/views/login/index.php';
        }else{
            require_once 'app/views/' . $view . '.php';
        }
    }
    public function model($model){
        require_once 'app/models/' . $model . '.php';
        return new $model;
    }
    public function isLogin() {
        if (!$_SESSION['ID_User']) {
            header('Location:' . BASEURL);
            exit;
        }
    }
    public function isAdmin() {
        if ($_SESSION['role'] != 'admin') {  
            if ($_SESSION['role'] == 'korlab') {
                header('Location:' . BASEURL);
            } elseif ($_SESSION['role'] == 'asisten') {
                header('Location:' . BASEURL . '/pelanggaran');
            } else {
            }
            exit;
        }
    }
    
    // public function isAdmin() {
    //     if (!($_SESSION['role'] == 'admin')) {  
    //         header('Location:' . BASEURL);
    //         exit;
    //     }
    // }
    // public function isAsisten() {
    //     if (!($_SESSION['role'] == 'asisten')) {  
    //         header('Location:' . BASEURL . '/pelanggaran');
    //         exit;
    //     }
    // }
    public function isNot() {
        if (!($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab')) {  
            header('Location:' . BASEURL . '/pelanggaran');
            exit;
        }
    }
    public function isAsistenOrKorlab() {
        $allowedRoles = ['asisten', 'korlab'];    
        if (!in_array($_SESSION['role'], $allowedRoles)) {  
            header('Location:' . BASEURL);
            exit;
        }
    }
    public function isAdminOrKorlab() {
        $allowedRoles = ['admin', 'korlab'];
    
        if (!in_array($_SESSION['role'], $allowedRoles)) {  
            header('Location:' . BASEURL . '/pelanggaran');
            exit;
        }
    }
}