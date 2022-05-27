<?php include('controllers/server.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
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
            border-radius: 30px;
            box-shadow: 12px 12px 40px rgb(228, 228, 228);
            
        }

        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

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

    </style>


  </head>
  <body>
        <section class="Form my-4 mx-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <img src="img/login.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-7 px-5 pt-5" style="max-width: 50%;">
                        <h1 class="font-weight-bold py-4">SGI-IAD</h1>

                        <h4>Inicie a sua sessão</h4>
                        <form method="post">
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="username" name="username" placeholder="Nome do usuário" class="Form-control my-2 p-1"  style="width: 100%; ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="password" name="password" placeholder="*******" class="Form-control my-2 p-1" style="width: 100%";>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                   <button type="button" class="btn1 mb-5 mt-2 p-2" name="login">Login</button>
                                </div>
                            </div>
                            <a href="#" style="line-height: 20px;">Esqueceu a senha?</a>
                            <p style="line-height: 20px"> Não possue uma conta? <a href="pages/CreateAcount.php">Crie uma aqui</a></p>
                        </form>
                    </div>
                </div>
            </div>

        </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>