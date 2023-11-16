<?php
include 'conexao.php';

$id = $_POST['id'];

$conn->query("DELETE FROM usuarios WHERE id=$id");

$conn->close();
?>
