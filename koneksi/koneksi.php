<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tes_oshs";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $sql = "CREATE TABLE user (
//     id VARCHAR(255) UNIQUE PRIMARY KEY,
//     nama VARCHAR(255) NOT NULL,
//     email VARCHAR(20) NOT NULL,
//     password VARCHAR(50) NOT NULL
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "Tabel User berhasil dibuat";
// } else {
//     echo "Error: " . $conn->error;
// }

?>