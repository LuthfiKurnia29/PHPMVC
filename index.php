<?php
$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url)[0];

switch ($url) {
    case '/':
        require_once 'modul/controller/AuthController.php';
        $controller = new AuthController();
        $controller->index();
        break;
    case '/createUser':
        require_once 'modul/controller/AuthController.php';
        $controller = new AuthController();
        $controller->Signup();
        break;
    case '/editUser':
        break;
    default:
        http_response_code(404);
        echo 'Halaman tidak ditemukan';
        break;
}
?>