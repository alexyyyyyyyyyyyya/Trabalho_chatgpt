<?php
include 'conexao.php';

$id = $_POST['id'];
$marca = $_POST['marca'];
$cor = $_POST['cor'];
$valor = $_POST['valor'];
$ano = $_POST['ano'];

if ($id == '') {
    $sql = "INSERT INTO moto (marca, cor, valor, ano) VALUES ('$marca', '$cor', '$valor', '$ano')";
} else {
    $sql = "UPDATE moto SET marca='$marca', cor='$cor', valor='$valor', ano='$ano' WHERE id=$id";
}

$conn->query($sql);
$conn->close();
?>