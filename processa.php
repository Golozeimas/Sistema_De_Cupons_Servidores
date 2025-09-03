<?php
require "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = preg_replace('/\D/', '', $_POST["cpf"]);

    
    $sql = "SELECT * FROM servidores WHERE cpf = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        
        $msg = "Este CPF não pertence a um servidor. Não está apto ao cupom.";
    } else {
        $servidor = $result->fetch_assoc();

       
        $sqlCupom = "SELECT * FROM cupons WHERE servidor_id = ?";
        $stmtCupom = $conn->prepare($sqlCupom);
        $stmtCupom->bind_param("i", $servidor["id"]);
        $stmtCupom->execute();
        $resultCupom = $stmtCupom->get_result();

        if ($resultCupom->num_rows > 0) {
            
            $cupom = $resultCupom->fetch_assoc();
            $msg = "Servidor: {$servidor['nome']}\nSecretaria: {$servidor['secretaria']}\nVocê já possui o cupom: {$cupom['codigo']}";
        } else {
            
            $sqlLivre = "SELECT * FROM cupons WHERE servidor_id IS NULL ORDER BY RAND() LIMIT 1";
            $resLivre = $conn->query($sqlLivre);

            if ($resLivre->num_rows > 0) {
                $cupom = $resLivre->fetch_assoc();

                
                $sqlUpdate = "UPDATE cupons SET servidor_id = ? WHERE id = ?";
                $stmtUpdate = $conn->prepare($sqlUpdate);
                $stmtUpdate->bind_param("ii", $servidor["id"], $cupom["id"]);
                $stmtUpdate->execute();

                $msg = "Servidor: {$servidor['nome']}\nSecretaria: {$servidor['secretaria']}\nVocê recebeu o cupom: {$cupom['codigo']}";
            } else {
              
                $msg = "Servidor: {$servidor['nome']}\nSecretaria: {$servidor['secretaria']}\nNão há mais cupons disponíveis.";
            }
        }
    }

    header("Location: index.php?msg=" . urlencode($msg));
    exit;
}
?>
