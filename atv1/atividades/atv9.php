 <?php
$aprovados = 0;
$reprovados = 0;
$alunos = [
  
  (object)["nome" => "Guilherme", "nota" => 99],
  (object)["nome" => "Pedro", "nota" =>55], 
  (object)["nome" => "Marquin", "nota" => 30],
  (object)["nome" => "Jefin", "nota" => 85]
    
];
       foreach ($alunos as $alunos) {
         if ($alunos -> nota >=80) {

            $aprovados ++; 
        
         } else {
         $reprovados ++;
         }
 

       }
       echo "O total de aprovados é: $aprovados <br>";
       echo "O total de reprovados é: $reprovados";

    

?>