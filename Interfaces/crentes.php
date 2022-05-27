<?php include('controllers/server.php'); ?>
<style>
    .all {
       box-sizing: border-box;

       height: 720px;
     }
     
     .top{
         height: 20px;
     }
     
     /* Create two columns/boxes that floats next to each other */
     .navb {
       float: left;
       width: 13%;
       height: 720px;
       background: rgb(224, 223, 223);
       padding: 20px;
     }
     
     /* Style the list inside the menu */
     .navb .ulb {
       list-style-type: none;
       padding: 0;
     }
     

     .tab {
       float: right;
       padding: 20px;
       width: 100%;
       background-color: #f9f9f9;
     }

     #crentesView{
        float: right;  
        width: 87%;
        background-color: #fff;
    }

    .top{
        width: 100%;
        margin-top: 5px;
    }
     
     /* Clear floats after the columns */
     /* .sect {
       content: "";
       display: table;
       clear: both;
     } */

     @media (max-width: 600px) {
        #crentesView{
            width: 100%;
        }
       .tab {
         width: 100%;
         height: auto;
         /* float: none; */
       }
       .navb {
        display: none;
       }
     }
     </style>
 

 
 <section class="all">
    <div class="top">

    </div>
   
     <section class="sect">
        <div class="navb">
            <nav class="navb navbar-default navbar-static-side" role="navigation">
                <ul class="ulb">
                  <li class="nav-item"><button type="button" class="btn" onclick="getCrentes('addCrente.php')">Cadastrar</button></li>
                  <li class="nav-item"><button type="button" class="btn">Actualizar</button></li>
                  <li class="nav-item"><button type="button" class="btn">Remover</button></li>
                </ul>
              </nav>
        </div>
       
        <section id="crentesView">
            <div class="top">
                <form class="d-flex me-1 my-2 p-1" style="margin-right : 5px;">
                    <input class="form-control me-1 my-4 p-1" type="search" placeholder="Pesquisar" aria-label="Search" style="width: 20%">
                    <button class="btn btn-outline-success my-4 p-1" type="submit"><img src="pages/magnifier.png" alt=""></button>
                </form>
            </div>
    
            <div class="tab mt-5">       
              <?php	
                $pdo_statement = $pdo_conn->prepare("SELECT * FROM posts ORDER BY id DESC");
                $pdo_statement->execute();
                $result = $pdo_statement->fetchAll();
              ?>  
                <table class="table">
                <thead>
                    <tr>
                    <th>  </th>
                    <th style="margin-left: 10px;">Nome</th>
                    <th>Apelido</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Bairro</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  if(!empty($result)) { 
                    foreach($result as $row) {
                  ?>
                    <tr>
                    <td><a style="margin-right: 15px;" href=""><img src="cancel.png" alt=""></a><a href=""><img src="link_edit.png" alt=""></a></td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                    </tr>
                    <tr>
                    <td><a style="margin-right: 15px;" href=""><img src="cancel.png" alt=""></a><a href=""><img src="link_edit.png" alt=""></a></td>
                   <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                    </tr>
                    <tr>
                    <td><a style="margin-right: 15px;" href=""><img src="cancel.png" alt=""></a><a href=""><img src="link_edit.png" alt=""></a></td>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                    </tr>
                    <?php
                      }
                    }
                    ?>
                </tbody>
                </table>
            </div>
           </section> 
            
     </section>
    </section>

 <script src="../main.js"></script>
   