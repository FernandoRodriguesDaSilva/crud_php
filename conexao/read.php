<?php
include_once("conexao.php");

$nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$entrada = filter_input(INPUT_POST, 'entrada', FILTER_SANITIZE_NUMBER_INT);
$saida = filter_input(INPUT_POST, 'saida', FILTER_SANITIZE_NUMBER_INT);

$querySelect = $link->query("SELECT * FROM tb_clientes");
while ($registros = $querySelect->fetch_assoc()){
$nome = $registros['nome'];
$email = $registros['email'];
$telefone = $registros['telefone'];
$entrada = $registros['entrada'];
$entrada = $registros['entrada'];
$id = $registros['id'];

echo "<tr>"; // onde vai capturar os dados no banco
echo "<td>$nome</td><td>$email</td><td>$telefone</td>";
echo "<td><a href='editar.php?id=$id'>";
echo "<i class='material-icons'>edit</i></a></td>";	
echo "<td><a href='conexao/delete.php?id=$id'>";
echo "<i class='material-icons'>delete</i></a></td>";
echo "<tr>";
 }


 