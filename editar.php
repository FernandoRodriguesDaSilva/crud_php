<?php 
session_start();
include_once ("includes/header.inc.php");
include_once("includes/menu.inc.php");
?>
<div class="row container">
	<div class="col s12">
		<h5 class="light">Edição de Registros</h5><hr>
		
	</div>
</div>
<!-- Fazendo a consulta para pegar os dados do banco -->
<?php 
include_once 'conexao/conexao.php';
$id 	        = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect    = $link->query("SELECT * FROM tb_clientes WHERE id='$id'");
// pegar todas as variaveis para editar
while ($registros = $querySelect->fetch_assoc()){
	$id = $registros['id'];
	$nome = $registros['nome'];
	$email = $registros['email'];
	$telefone = $registros['telefone'];
}
?>
<!-- Formulario cadastro -->
<div class="row container">
	<p>&nbsp</p>
	<!-- Dados serão processados em update php -->
	<!-- value é o valor que vai tá escrito no formulario quando abrir ele -->
	<form action="conexao/update.php" method="post" class="col s12">
		<fieldset class="formulario" style="padding: 15px">
			<legend><img src="imagem/a4.jpg" alt="[imagem]" width="100"></legend>
			<h5 class="blue-dark center">Editar Cadastro</h5>
			<!-- Campo nome -->
			<div class="input-field col s12">
				<i class="material-icons prefix">account_circle</i>
				<input type="text" value="<?php echo $nome ?>" placeholder="digite seu nome" name="nome" maxlength="30" required autofocus>

			</div>
			<!-- Campo email -->
			<div class="input-field col s12">
				<i class="material-icons prefix">email</i>
				<input placeholder="digite seu email" value="<?php echo $email ?>"  type="text" name="email" maxlength="50" required>
			</div>
			<!-- Campo telefone -->
			<div class="input-field col s12">
				<i class="material-icons prefix">phone</i>
				<input type="text" name="telefone" value="<?php echo $telefone ?>" placeholder="digite seu telefone"  maxlength="16" required>

				<div class="input-field col col-sm-12">
					<input type="date" name="entrada" value="<?php echo $entrada ?>"  required>
				</div>

				<div class="input-field col s12 m6">
					<input type="date" name="saida" value="<?php echo $saida ?>" required>
				</div>
			</div>
			<!-- Botoes -->
			<div class="input-field col col-sm-12">
				<input type="submit" value="alterar" class="btn blue">
				<a class="btn red" href="consulta.php">cancelar</a>
			</div>






		</fieldset>
	</form>
</div>

<?php include_once ("includes/footer.inc.php"); ?>