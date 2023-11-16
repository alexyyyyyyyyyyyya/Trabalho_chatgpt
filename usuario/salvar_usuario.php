<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

if ($id == '') {
    $sql = "INSERT INTO usuarios (nome, senha) VALUES ('$nome','$senha')";
} else {
    $sql = "UPDATE usuarios SET nome='$nome', senha='$senha' WHERE id=$id";
}

$conn->query($sql);
$conn->close();
?>