<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simula um usuário e senha (você deve usar um banco de dados na prática)
    $usuario_valido = "Thiagão";
    $senha_valida = "123456";

    // Obtém os valores do formulário
    $username = $_POST["nome"];
    $password = $_POST["senha"];

    // Verifica se o usuário e senha correspondem
    if ($username === $usuario_valido && $password === $senha_valida) {
        // Inicia a sessão
        session_start();

        // Armazena o nome de usuário na sessão
        $_SESSION["nome"] = $username;

        // Redireciona para a página restrita
        header("Location: pagina_restrita.php");
        exit();
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>
