<?php include('controllers/server.php'); ?>
<style>
   .all {
      box-sizing: border-box;
    }

    
    /* Create two columns/boxes that floats next to each other */
    .navb {
      float: left;
      width: 17%;
      height: 300px;
      background: rgb(224, 223, 223);
      padding: 20px;
    }
    
    /* Style the list inside the menu */
    .navb .ulb {
      list-style-type: none;
      padding: 0;
    }
    
    article {
      float: left;
      padding: 20px;
      width: 83%;
      background-color: #f9f9f9;
      height: 300px;
    }
    
    /* Clear floats after the columns */
    .sect {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Style the footer */
    /* .footerb {
      background-color: #777;
      padding: 10px;
      text-align: center;
      color: white;
    } */
    
    /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
    @media (max-width: 600px) {
      .navb, article {
        width: 100%;
        height: auto;
      }
    }
    </style>

<section class="all">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
      
        <div class="carousel-inner"   style="color: rgb(253, 143, 100);">
          <div class="carousel-item active">
            <img src="../img/igrejab.jpg" alt="Los Angeles" class="d-block w-100">
            <div class="carousel-caption">
                <h1>Nossa Missão:</h1>
                <p>Fazer chegar a palavra do Senhor.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="../img/igrejaa.jpg" alt="Chicago" class="d-block w-100">
            <div class="carousel-caption">
                <h1>Nossa Missão:</h1>
                <p>Servir a palavra e aos ensinamentos celestiais.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="../img/igrejac.jpg" alt="New York" class="d-block w-100">
            <div class="carousel-caption">
                  <h1>Nossa Missão:</h1>
                <p>Garantir o crescimento de uma geração próxima do propósito divino.</p>
              </div>
          </div>
        </div>
      
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>

    <div class = tabelas>
        
    <section class="sect">
        <nav class="navb navbar-default navbar-static-side" role="navigation">
          <ul class="ulb">
            <li class="nav-item"><button type="button" class="btn">Agenda Semanal</button></li>
            <li class="nav-item"><button type="button" class="btn">Programa Anual</button></li>
            <li class="nav-item"><button type="button" class="btn">Contactos de Apoio</button></li>
          </ul>
        </nav>
        
        <article>
          <h1 style="text-align: center;">Informações</h1>
          <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.  founding by the Romans, who named it Londinium.</p>
          <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its</p>
        </article>

        <!-- <footer class="footerb">

        </footer> -->
      </section>
</section>
  