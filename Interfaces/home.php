<?php include('controllers/server.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../main.js"></script>
    
    <title>SGI</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        #views{
          width: 100%;
          background-color: #fff;
        }

        body nav{
          height: 50px;          
        }

    </style>

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand float-start active" href="#" onclick="getPage('inicio.php')">
            <img src="../img/shortLOGO2.png" alt="Logo" style="max-width: 40px; display: flex;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" onclick="getPage('inicio.php')">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="getPage('informacoes.php')">Informações</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="getPage('crentes.php')">Crentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contabilidade</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Relatórios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Usuários</a>
              </li>
            </ul>
            <li class=" d-flex nav-item dropdown me-1 my-3 p-1">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Conta
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../index.php">Logout</a></li>
              </ul> 
            
          </div>
        </div>
      </nav>

      <main id="views">

      </main>

      <footer style="border-top: 2px; text-align: right; margin-right: 20px; font-size: 10px; ">
        <p>Copyright SGI-IAD © 2021-2022</p> 
      </footer>

    <script src="../main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>