<?php
include 'conexao.php';

$id = $_POST['id'];

$conn->query("DELETE FROM moto WHERE id=$id");

$conn->close();
?>
