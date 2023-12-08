<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
<?php

// Obtém os dados do formulário
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Armazenar a senha de maneira segura usando hash

// Verifica se o e-mail já existe no banco de dados
$sql_verifica_email = "SELECT id_usuario FROM usuarios WHERE email = '$email'";
$result_verifica_email = $conn->query($sql_verifica_email);

if ($result_verifica_email->num_rows > 0) {
    echo "Erro: Este e-mail já está cadastrado.";
} else {
    // Insere os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        // Redireciona para a tela de login
        header("Location: login.php");
        exit();
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>