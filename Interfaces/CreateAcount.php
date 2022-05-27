<?php include('controllers/server.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="server.php">

    <title>SGI</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            background-color: rgb(226, 229, 229);
        }

        .row{
            background-color: white;
            /* border-radius: 30px; */
            box-shadow: 12px 12px 40px rgb(228, 228, 228);
            
        }

        /* img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        } */

        .btn1{
            border: none;
            outline: none;
            height: 50%;
            width: 100%;
            background-color: rgb(4, 4, 56);
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn1:hover{
            background-color: rgb(233, 230, 230);
            border: 1px solid;
            color: rgb(4, 4, 56);
        }

        .nomes{
            display: flex;
            margin-right: 10px;
        }

    </style>


  </head>
  <body>
        <section class="Form my-5 mx-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-5" Style="position: relative; margin-left: 0px;">
                        <img src="../img/login.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-7 px-5 pt-5" style="max-width: 47%;">
                        <h3 class="font-weight-bold py-2">SGI-IAD</h3>

                        <h5>Crie uma conta</h5>
                        <form method="post" action="../controllers/server.php">
                            <!-- <div>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Tipo de Conta
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <li><a class="dropdown-item" href="#">Crente</a></li>
                                      <li><a class="dropdown-item" href="#">Administrativa</a></li>                          
                                    </ul>
                                  </li>
                            </div> -->
                            <div class="nomes">
                                <div class="form-row">
                                    <div class="col-lg-8">
                                        <input type="Firstname" placeholder="Nome" name="nome" class="Form-control my-2 p-1"  style="width: 130%" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-5">
                                        <input type="Lastname" placeholder="Apelido" name="apelido" class="Form-control my-2 p-1"  style="width: 200%;">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col-lg-8">
                                    <input type="Username" placeholder="Nome do usuário" name="username" class="Form-control my-2 p-1"  style="width: 100%;">
                                    <p style="font-size: 12px; color: red;" class="mb-1">Você pode usar letras, números e pontos finais.</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-8">
                                    <input type="password" placeholder="Senha" name="password1" class="Form-control my-2 p-1" style="width: 100%" >
                                </div>
                            </div>
                            <div class="demo-form-row">
                                <div class="col-lg-8">
                                    <input type="password" placeholder="Confirmar Senha" name="password2" class="Form-control mb-3 my-2 p-1" style="width: 100%";>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-8">
                                    <?php if ($editar_estado==false): ?>
                                    <button type="submit" name="gravar" class="btn1 mb-3 mt-2 p-2 demo-form-submit">Join</button>
                                    <?php endif ?>
                                </div>
                            </div>
                            <p style="line-height: 20px" class="mb-4">possue uma conta? <a href="../index.php">Faça login aqui</a></p>
                        </form>
                    </div>
                </div>
            </div>

        </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>