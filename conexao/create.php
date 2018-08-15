<?php 
// inicializando a variavel de sessão
session_start();
include 'conexao.php';
// Fazendo um filtro nas variaveis
$nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

// testar se email já existe
$querySelect = $link->query("select email from tb_clientes");
$array_emails = [];

while($emails = $querySelect->fetch_assoc()){
$emails_existentes = $emails['email'];
array_push($array_emails,$emails_existentes);
}
// se email estiverem cadastrados
if(in_array($email,$array_emails)){
	$_SESSION['msg'] = "<p class='center red-text'>".'Já existe um cliente cadastrado com esse email'."</p>";
	header("Location:../index.php");
}else { // se email estiver certo então adiciona no banco de dados
	$queryInsert = $link->query("INSERT INTO tb_clientes VALUES(DEFAULT,'$nome','$email','$telefone')");
	// se alguma linha for afetada
	$affected_rows = mysqli_affected_rows($link);
	// se uma linha for afetada na tabela
	if($affected_rows > 0){
		$_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."<br>";
		header("Location:../index.php");
	}

}