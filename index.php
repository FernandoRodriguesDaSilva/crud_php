<!-- Exibindo as variaveis de sessão -->
<?php session_start() ?>
<!DOCTYPE>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="materialize/css/materialize.min.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Titulo da pagina</title>
</head>
<body>
  <nav class="blue-grey">
    <div class="nav-wrapper container">
      <div class="brand-logo light">
        Sistema de Cadastro usando Crud
        <ul class="right" style="margin-left: 5em;">
          <li><a href=""><i class="material-icons left">account_circle</i>Cadastro</a></li>
          <li><a href=""><i class="material-icons left">search</i>Consultas</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Formulario cadastro -->
  <div class="row container">
    <p>&nbsp</p>
    <form action="conexao/create.php" method="post" class="col s12">
      <fieldset class="formulario">
        <legend><img src="imagem/a4.jpg" alt="[imagem]" width="100"></legend>
        <h5 class="light center">Cadastro de Clientes</h5>


        <?php
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          session_unset();
        }
        ?>


        <!-- Campo nome -->
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input type="text" name="nome" maxlength="30" required autofocus>
          <label for="nome">Nome do Cliente</label>
        </div>
        <!-- Campo email -->
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input type="text" name="email" maxlength="50" required>
          <label for="email">Email do Cliente</label>
        </div>
        <!-- Campo telefone -->
        <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input type="text" name="telefone" maxlength="16" required>
          <label for="telefone">telefone do Cliente</label>
        </div>
        <!-- Botoes -->
        <div class="input-field col col-sm-12">
          <input type="submit" value="cadastrar" class="btn blue">
          <input type="reset" value="Limpar" class="btn red">
        </div>
      </fieldset>
    </form>
  </div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="materialize/js/jquery.min.js"></script>
  <script type="text/javascript" src="materiaaliza/js/materialize.min.js"></script>
  <!-- Inicializando materialize  -->
  <script type="text/javascript">
    $(document).ready(function(){

    });
  </script>
</body>
</html>
