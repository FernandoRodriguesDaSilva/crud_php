<?php 

include_once 'conexao.php';

$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);
$queryDelete = $link->query("DELETE FROM tb_clientes WHERE id='$id'");

$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0){
	header("Location:../consulta.php");
}

