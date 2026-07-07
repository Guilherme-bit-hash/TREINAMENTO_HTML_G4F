<?php
$host = 'localhost';
$usuario = 'root';
$senha = 'senac';
$banco = 'formconexao';
$porta = '3307';

$conexao = new mysqli(
$host,
$usuario,
$senha,
$banco,
$porta
);

if ($conexao -> connect_error) {
    die("<br>FALHA NA CONEXÃO".$conexao -> connect_error);
}

 echo  "conectado com sucesso";

?>