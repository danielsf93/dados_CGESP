<!-- /home/linux/Documentos/treinos/sql/index.php -->
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Dados CGESP</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=inicio">Dados CGESP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="?page=temperatura">Temperatura</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=chuva">Chuva</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Teste</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col mt-5">

<?php

    
        switch(@$_REQUEST["page"]){
          case "inicio":
            include("inicio.php");
        break;case "temperatura":
                include("temperatura.php");
            break;
            case "chuva":
                include("chuva.php");  
            break;
            
        }


?>

</div>
</div>
</div>



    <script src="js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>
