<?php 
require_once "modul/models/UserModels.php";
class AuthController {
    public function index(){
        require_once 'modul/views/Signup.php';
    }
    public function Signup()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $hashpassword = password_hash($_POST['password'], PASSWORD_DEFAULT); 
            $userModel = new UserModels();
            $userModel->addUsers($_POST['name'],$_POST['email'], $hashpassword);
            // Log::alert("Berhasil Membuat Data");
        }
    }
    public function Edit($id){
        
    }
}
?>