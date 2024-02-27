<?php 
// echo $conn;
// $koneksi = $conn;
require_once ('koneksi/koneksi.php');
class UserModels {
    public function getUsers() {
        require_once ('koneksi/koneksi.php');
        $query = "SELECT * FROM user";
        mysqli_query($conn, $query);
        // return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addUsers($name, $email, $passwordHash) 
    {
        require_once 'koneksi/koneksi.php';
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $query = "INSERT INTO User (nama, email, password) VALUES ('$name', '$email', '$passwordHash')";
            $queryexec = mysqli_query($conn, $query);
            if($queryexec === true){
                echo "Berhasil";
            }else{
                echo "Gagal";
            }
        }
    }
}


?>