<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Servidor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Novo Servidor</h2>
    <form method="POST" action="salvar_servidor.php">
        <input type="text" name="cpf" maxlength="11" placeholder="CPF (só numeros)" required>
        <input type="text" name="nome" placeholder="Nome completo" required>
        <input type="text" name="secretaria" placeholder="Secretaria" required>
        <button type="submit" class="btn-verde">Salvar</button>
        <a href="index.php" class="btn-azul">Voltar</a>
    </form>
</div>
</body>
</html>