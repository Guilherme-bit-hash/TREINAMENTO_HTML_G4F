<?php
include "banco.php";


$id = $_GET['id'];

$sql = "DELETE FROM banco WHERE id=$id";

if ($conexao->query($sql)) {
    header("location:list.php");

    exit();
}

?>
