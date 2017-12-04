<?php 
  include('php/Jogador.php');
  $conn = new Jogador;

  // $tableInfo = Connection::Listar();
  $tableInfo = $conn->Listar();

  if(isset($_GET['situacao'])){
    if($_GET['situacao'] == 1){
    echo "<center><h2 style='width: 100%; background-color: green; color: white;'>Jogador cadastrado com Sucesso!</h2></center>";
    }
  }




  

 ?>


<!DOCTYPE html>
<html lang="en">
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FutControl</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">FutControl</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Sistemas de Informação - UNIFRA</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Álan Dutra</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="cadastrarTime.php">Cadastrar Time</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="cadastrarJogador.php">Cadastrar Jogador</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="listarTimes.php">Listar Times</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="listarJogadores.php">Listar Jogadores</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="log.php">Listar Logs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="bg-faded p-4 my-4">
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
          <tbody><tr>
              <th>Código</th>
              <th>Nome</th>
              <th>Apelido</th>
              <th>Matricula</th>
              <th>Time</th>
              <th>Ação</th>
            </tr>
            <?php foreach ($tableInfo as $key => $value): ?>
                <tr>
                  <td><?php echo $value['id_jogador'] ?></td>
                  <td><?php echo $value['nome'] ?></td>
                  <td><?php echo $value['apelido'] ?></td>
                  <td><?php echo $value['matricula'] ?></td>
                  <td><?php echo $value['timenome'] ?></td>
                  <td><button type="submit" onclick="excluir()">Excluir</button></td>
                </tr>
            <?php endforeach; ?>
          </tbody></table>
        </div>
      </div>
    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; FutControl 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

<script>
  $( document ).ready(excluir() {
    <?php 
      Jogador::Excluir($value['id_jogador']);
     ?>
     echo "<center><h2 style='width: 100%; background-color: green; color: white;'>Jogador de ID".$value['id_jogador']." Excluído com Sucesso!</h2></center>"

  }
</script>
  
</html>
