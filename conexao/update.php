<?php session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$entrada = filter_input(INPUT_POST, 'entrada', FILTER_SANITIZE_NUMBER_INT);
$saida = filter_input(INPUT_POST, 'saida', FILTER_SANITIZE_NUMBER_INT);

$queryUpdate = $link->query("UPDATE tb_clientes SET nome='$nome', email='$email', telefone='$telefone',entrada='$entrada',saida='$saida' WHERE id='$id'");
// Se alguma linha na tabela foi afetada com essa alteração no banco
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0){
	$_SESSION['msg'] = "<p class='center green-text'>".'Registro alterado com sucesso'."</p>";
	header("Location:../consulta.php");
}
