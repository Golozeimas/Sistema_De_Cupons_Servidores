<?php
require "db.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $cpf = $_POST["cpf"];
        $nome = $_POST["nome"];
        $secretaria = $_POST["secretaria"];
        function formatarCPF($cpf) {
    $cpf = preg_replace('/\D/', '', $_POST["cpf"]);
    return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf); 
}

            $sqlCheck = "SELECT * FROM servidores WHERE cpf = ?";
            $stmt = $conn->prepare($sqlCheck);
            $stmt->bind_param("s", $cpf);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $msg = "Já existe um servidor cadastrado com este CPF!";
            } else {
                $sql = "INSERT INTO servidores (cpf, nome, secretaria) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $cpf, $nome, $secretaria);
                if ($stmt->execute()) {
                $msg = "Servidor cadastrado com sucesso!";
                } else {
                $msg = "Erro ao cadastrar servidor.";
            }
    }

    header("Location: index.php?msg=" . urlencode($msg));
    exit;
}
?>