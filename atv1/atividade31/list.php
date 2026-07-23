
<?php

include "banco.php";

$sql = "SELECT * FROM banco";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {

    while ($cliente = $resultado->fetch_assoc()) {

        echo "Nome: " . $cliente['nome'] . "<br>";
        echo "Idade: " . $cliente['idade'] . "<br>";
        echo "E-mail: " . $cliente['email'] . "<br>";
        echo "Telefone: " . $cliente['telefone'] . "<br>";
        echo "Cidade: " . $cliente['cidade'] . "<br>";

        echo "<a href='list.php?id=" . $cliente['id'] . "'>
                <button>Editar</button>
              </a>";

        echo "<hr>";

          echo "<a href='excluir.php?id=" . $cliente['id'] . "'>
                <button>Excluir</button>
              </a>";

        echo "<hr>";

          echo "<a href='salvar.php?id=" . $cliente['id'] . "'>
                <button>Cadastrar</button>
              </a>";

        echo "<hr>";
    
    }

} else {

    echo "Nenhum registro encontrado.";

}

$conexao->close();

?>