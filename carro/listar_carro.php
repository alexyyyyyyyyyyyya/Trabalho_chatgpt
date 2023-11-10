<?php
include 'conexao.php';

$result = $conn->query("SELECT * FROM carro");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['marca']}</td>
                <td>{$row['cor']}</td>
                <td>{$row['valor']}</td>
                <td>{$row['ano']}</td>
                
                <td>
                    <button class='editar' data-id='{$row['id']}'>Editar</button>
                    <button class='excluir' data-id='{$row['id']}'>Excluir</button>
                </td>
            </tr>";
    }
}
$conn->close();
?>