<?php
$mensagem = "";
if (isset($_GET["msg"])) {
    $mensagem = $_GET["msg"];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Cupons</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Buscador de CPF para servidor</h2>
        <form method="POST" action="processa.php" class="form-busca">
           <input type="text" name="cpf" maxlength="14" placeholder="CPF (000.000.000-00)" required>
            <button type="submit" class="btn-azul">Verificar e Sortear</button>
            <a href="criar_servidor.php" class="btn-verde">+ Servidor</a>
            <a href="listar_cupons.php" class="btn-laranja">Cupons Distribuídos</a>
        </form>
        <div class="mensagem"><?= $mensagem ?></div>
    </div>
</body>
</html>