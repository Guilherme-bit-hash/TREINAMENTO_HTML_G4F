<?php

$aprovados = 0;   
$candidatos = [
   (object) ["nome" => "Guilherme", "nota" => 50],
   (object) ["nome" => "Gabriel", "nota" => 69],
   (object) ["nome" => "Pedin", "nota" => 0] 

];

   foreach ($candidatos as $candidatos ) {
    if ($candidatos -> nota>=5){


            $aprovados ++;
           }
          

   }     
   echo "o total de aprovados é : ", $aprovados;



?>