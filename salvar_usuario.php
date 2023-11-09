<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($id == '') {
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
} else {
    $sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
}

$conn->query($sql);
$conn->close();
?>