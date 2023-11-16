<?php
include 'conexao.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
}

$conn->close();
?>