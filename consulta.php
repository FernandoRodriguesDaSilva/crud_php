<?php session_start();

include_once("includes/header.inc.php");?>

<?php include_once("includes/menu.inc.php");?>

<div class="row container">
	<div class="col s12">
		<h5 class="light">Consultas</h5><hr>
		<table class="striped">
			<thead>
				<td>Nome</td>
				<td>Email</td>
				<td>Telefone</td>
			</thead>
			<tbody>
				<?php include_once ('conexao/read.php'); ?>
			</tbody>
			<tfoot>
				<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					session_unset();
				}
				?>
			</tfoot>
		</table>
		<?php
		if(isset($_SESSION['deletado'])){
			echo $_SESSION['deletado'];
			session_unset();
		}
		?>
	</div>
</div>
<?php include_once("includes/footer.inc.php");?>
