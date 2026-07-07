<?php
//inclui o arquivo necessario para  a conexão
include "conexao.php";

$numero1 = 20;
$numero2 = 23;
$numero3 = 43;


$resultado = $numero1 + $numero2 + $numero3;




// linguagem chamada slq

$sql ="INSERT INTO calculo (numero1, numero2, numero3, resultado)
VALUES($numero1, $numero2, $numero3, $resultado)";

if ($conexao->query($sql)) {
  echo "<br>Dados conectados com sucesso";
  }else{
   echo "<br>não conseguiu se conectar";   
  }

?>


