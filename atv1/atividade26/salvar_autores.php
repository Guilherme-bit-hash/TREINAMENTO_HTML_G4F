<?php

include "banco.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];
$cidade = $_POST['cidade'];


$sql = "INSERT INTO banco (nome, idade, curso,cidade)
        VALUES ('$nome','$idade, '$idade', '$cidade')";

if ($conexao->query($sql)) {

    header("Location: listar.php");
    exit();

} else {

    echo "Erro ao cadastrar: " . $conexao->error;

}

$conexao->close();

?>