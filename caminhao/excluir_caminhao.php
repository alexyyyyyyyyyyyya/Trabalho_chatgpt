<?php
include 'conexao.php';

$id = $_POST['id'];

$conn->query("DELETE FROM caminhao WHERE id=$id");

$conn->close();
?>
