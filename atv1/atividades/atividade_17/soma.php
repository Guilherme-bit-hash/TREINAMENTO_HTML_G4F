<?php
include"conexaosoma.php";

$numero1 = 45;
$numero2 = 70;

$resultado = $numero1 + $numero2;


$sql = "INSERT INTO soma (numero1, numero2, resultado)
VALUES($numero1,$numero2,$resultado)";


if($conexao->query($sql)) {
echo "<br>conectado com sucesso<br>";
     
    }else{
        echo"<br>parabéns você errou";
    }

?>














