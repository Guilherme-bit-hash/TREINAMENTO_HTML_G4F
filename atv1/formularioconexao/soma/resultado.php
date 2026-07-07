<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>

<?php
include "formconexao.php";

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];

$resultado = $num1 + $num2;

$sql = "INSERT INTO calculos (numero1, numero2, resultado)
        VALUES ('$num1', '$num2', '$resultado')";

if ($conexao->query($sql) === TRUE) {
    echo "Resultado: $resultado <br>";
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
?>

</body>
</html>