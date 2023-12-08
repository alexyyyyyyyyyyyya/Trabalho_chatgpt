<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados de conexão com o banco de dados
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "crud";

    // Obtém os valores do formulário
    $username = $_POST["nome"];
    $password = $_POST["senha"];

    // Conecta ao banco de dados
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Consulta o banco de dados para verificar as credenciais
    $sql = "SELECT * FROM usuarios WHERE nome = '$username'";
    $result = $conn->query($sql);

    // Verifica se a consulta retornou resultados
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verifica se a senha fornecida coincide com a senha no banco de dados
        if (password_verify($password, $row['senha'])) {
            // Inicia a sessão
            session_start();

            // Armazena informações do usuário na sessão (pode ser mais do que apenas o nome)
            $_SESSION["nome"] = $row['nome'];
            $_SESSION["id_usuario"] = $row['id_usuario'];

            // Redireciona para a página restrita
            header("Location: pagina_restrita.php");
            exit();
        } else {
            echo "Usuário ou senha inválidos.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
