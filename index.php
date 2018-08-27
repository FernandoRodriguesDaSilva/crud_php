<!-- Exibindo as variaveis de sessão -->
<?php session_start();?>
<?php include_once("includes/header.inc.php"); ?>
<?php include_once("includes/menu.inc.php"); ?>
<!-- Formulario cadastro -->
<div class="row container">
  <p>&nbsp</p>
  <form action="conexao/create.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imagem/a4.jpg" alt="[imagem]" width="100"></legend>
      <h5 class="blue-dark center">Cadastro de Clientes</h5>

      <?php
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        session_unset();
      }
      ?>

      <!-- Campo nome -->
      <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" placeholder="digite seu nome" name="nome" maxlength="30" required autofocus>

      </div>
      <!-- Campo email -->
      <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input placeholder="digite seu email"  type="text" name="email" maxlength="50" required>
      </div>
      <!-- Campo telefone -->
      <div class="input-field col s12">
        <i class="material-icons prefix">phone</i>
        <input type="text" name="telefone" placeholder="digite seu telefone"  maxlength="16" required>
      </div>

      <div class="col s12"><p>Selecione as datas de entrada e saída</p></div>

      <div class="input-field col col-sm-12">
       <input type="date" name="entrada" class="validate" id="entrada" required>
     </div>
     <div class="input-field col s12 m6">
      <input type="date" name="saida" class="validate" id="saida" required>
    </div>

    <!-- Botoes -->
    <div class="input-field col col-sm-12">
      <input type="submit" value="cadastrar" class="btn blue">
      <input type="reset" value="Limpar" class="btn red">
    </div>
    
  </fieldset>
</form>
</div>
<?php include_once("includes/footer.inc.php");?>
