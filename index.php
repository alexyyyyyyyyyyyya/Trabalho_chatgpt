<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuários</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h1>CRUD de Usuários</h1>

<form id="usuarioForm">
    <input type="hidden" id="id" name="id">
    Nome: <input type="text" id="nome" name="nome" required><br>
    Senha: <input type="password" id="senha" name="senha" required><br>
    <input type="submit" value="Salvar">
</form>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody id="usuariosTable"></tbody>
</table>

<script src="script.js"></script>

</body>
</html>