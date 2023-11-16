<?php
session_start();
if(empty($_POST) or empty($_POST['nome']) or empty($_POST['senha'])) {
  header('location: index.php');
  } 
require_once 'conexao.php';
$conexao = conectar();

$usuario = $_POST['nome'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM usuario WHERE nome='$usuario'";
$resultado = mysqli_query($conexao, $sql);
$verificaçao = mysqli_fetch_assoc($resultado);
$idUsuario = $verificaçao['id_usuario'];

if($senha == $verificaçao['senha']) {
  $_SESSION['id'] = $idUsuario;
  $_SESSION['nome'] = $usuario;
  $_SESSION['senha'] = $senha;
  $_SESSION['nivel'] = $verificaçao['nivel']; 

  if($_SESSION['nivel'] == 2) {
    header('location: login.php');
  }else {
    header('location: paginicial.php');
  }
  } else {
    header('location: index.php');
  }