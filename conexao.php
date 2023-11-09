<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>