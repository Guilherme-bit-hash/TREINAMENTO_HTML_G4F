<?php

$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "conexaophp";
$porta = "3307";

$conexao = new mysqli(
$host,
$usuario,
$senha,
$banco,
$porta
);

if ($conexao->connect_error) {
   die("falha na conexão animal".$conexao->connect_error);
  
}
 echo "conectado com sucesso"
?>