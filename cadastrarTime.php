<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Banco de Dados III</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Banco de Dados III</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Sistemas de Informação - UNIFRA</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Álan Dutra</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
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
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="bg-faded p-4 my-4">
        <h1 class="text-center">Cadastro de Times</h1>
        <form action="php/ControllerTime.php/" method="post">
          <input type="hidden" name="action" value="add"/>
          <div class="form-group col-md-2 col-xs-12 col-sm-12">
              <label for="id">Código</label>
              <input readonly="true" type="text" class="form-control" id="id" name="id" placeholder="Código">
          </div>
          <div class="form-group col-md-12 col-xs-12 col-sm-12">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome do Time">
          </div>
          <div class="form-group col-md-12 col-xs-12 col-sm-12">
              <label for="sigla">Sigla</label>
              <input type="text" class="form-control" id="sigla" name="sigla" placeholder="Digite a sigla do Time">
          </div>
          <div class="form-group col-md-12 col-xs-12 col-sm-12">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o Endereço do Time">
          </div>
          <div class="form-group col-md-12 col-xs-12 col-sm-12">
              <label for="estado">Estado</label>
              <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o Estado do Time">
          </div>
          <div class="form-group col-md-12 col-xs-12 col-sm-12">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a Cidade do Time">
          </div>
          <div class="text-right espacoTopo">
              <button type="submit" name="enviaForm" class="btn btn-primary">Confirmar</button>
              <button class="btn btn-danger">Cancelar</button>
          </div>
      </form>






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

</html>
