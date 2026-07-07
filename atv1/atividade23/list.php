<?php

include "banco.php";


$sql = "SELECT * FROM banco";


$resultado = $conexao->query($sql);


while ($cliente = $resultado->fetch_assoc()){

    echo "Nome: ".$cliente['nome']."<br>";

}
''



?>