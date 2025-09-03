<?php
require "db.php";

$sql = "SELECT c.id AS cupom_id, c.codigo, s.nome, s.secretaria
        FROM cupons c
        INNER JOIN servidores s ON c.servidor_id = s.id
        ORDER BY c.id ASC";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cupons Distribuídos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Cupons Distribuídos</h2>
    <table>
        <thead>
            <tr>
                <th>ID do Cupom</th>
                <th>Código do Cupom</th>
                <th>Nome do Servidor</th>
                <th>Secretaria</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['cupom_id']}</td>
                            <td>{$row['codigo']}</td>
                            <td>{$row['nome']}</td>
                            <td>{$row['secretaria']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum cupom distribuído ainda.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="index.php" class="btn-azul">Voltar</a>
</div>
</body>
</html>
