<?php

include "banco.php";

$host = $_POST['host'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$banco = $_POST['banco'];
$porta = $_POST['porta'];

$sql = "INSERT INTO banco (host, usuario, senha, banco, porta)
        VALUES ('$host', '$usuario', '$senha', '$banco', '$porta')";