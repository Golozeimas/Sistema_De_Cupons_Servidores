<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cupons_servidores";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if($conn->connect_error){
    die("Conexão falhou:" . $conn->connect_error);
    }
?>