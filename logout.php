<?php
// Inicia a sessão
session_start();

// Remove todas as variáveis de sessão
$_SESSION = array();

// Se desejar destruir a sessão completamente, descomente a linha abaixo
// session_destroy();

// Redireciona para a página de login
header("Location: login.php");
exit();
?>
