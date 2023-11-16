<?php
include 'conexao.php';

$id = $_POST['id'];

$conn->query("DELETE FROM carro WHERE id=$id");

$conn->close();
?>
