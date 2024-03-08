<?php


class LogIn extends Controller {
    public function index()
    {
        $data['title'] = 'Login';

        if(isset($_SESSION['ID_User'])){
            header('Location: ' . BASEURL);
            exit;
        }
        
        $this->view('login/index', $data);
    }
    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];    
        
        $role = $this->model("Login_model")->getRole($username);
        $nama_user = $this->model("Login_model")->getNamaUser($username); 
    
        echo var_dump($_POST);
        echo "<br></br>";
        
        $id_user = $this->model('Login_model')->validateLogin($username, $password);
    
        if ($id_user) {
            echo "Anda Berhasil Login";
    
            $is_password_default = $this->model('Login_model')->isDefaultPassword($password);
            if (!$is_password_default) {
                session_start();
                $_SESSION['ID_User'] = $id_user;
                $_SESSION['role'] = $role['role'];
                $_SESSION['nama'] = $nama_user; 
    
                if ($_SESSION['role'] === 'asisten') {
                    header('Location: ' . BASEURL . '/pelanggaran');
                } else {
                    header('Location: ' . BASEURL . '/login');
                }
                exit();
            }
            else {
                session_start();
                $_SESSION['ID_User'] = $id_user;
                $_SESSION['role'] = $role['role'];
                $_SESSION['nama'] = $nama_user; 
                header('Location: ' . BASEURL . '/home');
                exit;
            }
        }
        else {
            header('Location: ' . BASEURL . '/login');
        }
    }
       
    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        
        header('Location: ' . BASEURL . '/login');
        exit;
    }
    private function givePermissionToKorlab() {
        if ($_SESSION['role'] == 'korlab') {
            $_SESSION['role_can_access_asisten'] = true;
        }
    }
}
