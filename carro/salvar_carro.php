<?php
include 'conexao.php';

$id = $_POST['id'];
$marca = $_POST['marca'];
$cor = $_POST['cor'];
$valor = $_POST['valor'];
$ano = $_POST['ano'];

if ($id == '') {
    $sql = "INSERT INTO carro (marca, cor, valor, ano) VALUES ('$marca', '$cor', '$valor', '$ano')";
} else {
    $sql = "UPDATE carro SET marca='$marca', cor='$cor', valor='$valor', ano='$ano' WHERE id=$id";
}

$conn->query($sql);
$conn->close();
?>