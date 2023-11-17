<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
</head>
<body>
    <h2>Por favor, faça login</h2>
    <form action="processa_login.php" method="post">
        <label for="nome">Usuário:</label>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="senha"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
