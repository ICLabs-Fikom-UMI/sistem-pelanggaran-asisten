<?php

class Controller{
    public function __construct(){
        session_start(); 
        if (isset($_SESSION['role'])) {
            $this->ID_Asisten = isset($_SESSION['ID_Asisten']) ? $_SESSION['ID_Asisten'] : null;
        } else {
            $this->ID_Asisten = null;
        }

        $this->db = new Database();
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
        if (isset($_SESSION['role']) && $_SESSION['role'] != 'admin') {  
            if ($_SESSION['role'] == 'korlab') {
                header('Location:' . BASEURL);
            } elseif ($_SESSION['role'] == 'asisten') {
                header('Location:' . BASEURL . '/pelanggaran');
            } else {
            }
            exit;
        }
    }   
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
?>
