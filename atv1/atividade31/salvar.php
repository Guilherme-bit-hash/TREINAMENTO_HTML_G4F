<?php

include "banco.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO banco (nome, idade, email, telefone, cidade)
        VALUES ('$nome', '$idade', '$email', '$telefone', '$cidade')";

if ($conexao->query($sql)) {

    header("Location: list.php");
    exit();

} else {

    echo "Erro ao cadastrar: " . $conexao->error;

}

$conexao->close();

?>