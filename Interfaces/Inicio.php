<?php include('controllers/server.php'); ?>
<style>
 
.parag{
    justify-content: 45vw;
    display: flex;
    max-width: 500px;
    margin: 0 auto;
    text-align: center;
    line-height: 25px;
    margin-top: 20px;
    
}

#demo{
    margin-top: 20px;
    display:flex;
    justify-content: center;
    align-items: center;
}

.grid{
    display: grid; /* formatando em grelha*/
    flex-wrap: wrap;
    grid-template-columns: 2fr 2fr 2fr; /*fraguimentando por igual em 3 partes*/
    max-width: 1080px;
    margin: 0 auto;
    grid-gap: 10px;
    margin-top: 30px;
    padding: 5px;
    
}

.um{
    background-color: rgb(243, 243, 243);
    justify-content: center;
   
}

.dois{
    background-color: rgb(252, 252, 252);
    justify-content: center;
    
}

.agenda{
    justify-content: 45vw;
    max-width: 790px;
    margin: 0 auto;
    text-align: center;
    line-height: 25px;
    margin-top: 20px;
}

.nav-item, .pill, .nav-link{
    color: rgb(140, 140, 140);
}

.mi{
    margin-bottom: 20px;
}

</style>

<body>
    <img style="width: 100%; margin-top: 20px;" src="../img/Inicio.jpg" alt="">
    <h2 style="text-align: center; margin-top: 10px;">IGREJA ASSEMBLEIA DE DEUS</h2>
    <h4 style="text-align: center; color: rgb(96, 96, 96); margin-top: 50px;"><i>“Eu sou o caminho, e a verdade e a vida; ninguém vem ao Pai,
        <br>senão por Mim” <br> (João 14.6) </i></h4>
    
    <section> <!--Apresentacao-->
        <div class="parag">
            <P>
                Esta frase foi dita pelo Senhor Jesus para que o homem soubesse 
                que Ele veio para ser o nosso Guia até Deus. Mas para passar a 
                Vida Eterna ao lado de Deus, é necessário seguir os passos do Senhor 
                Jesus praticando os Seus ensinamentos.
            </P>
        </div>    
    </section>

    <div class="jmissao">
      <h4 style="text-align: center; color: rgb(42, 42, 42); margin-top: 50px;">Missao do senhor JESUS</h4>
  </div> 

  <section class="grid"> 
      <div class="dois">
         
          <p style="text-align: center; margin-top: 20%;">Ser o nosso Salvador</p>

      </div>
      <div class="um">
          
          <p>Essa era a missão do Senhor Jesus!
              Somente alguém sem pecados, sem imperfeições poderia se sacrificar em lugar dos pecadores e dar-lhes salvação.
              Por isso, Jesus é o Salvador daqueles que crêem Nele.
              “é que hoje vos nasceu, na cidade de Davi, o Salvador, que é Cristo, o Senhor.” <br><i style="text-align: center;">(Lucas 2.11)</i>
              </p>   
      </div>
      <div>
          
          <p></p>
          
      </div>       
      <div>
          
          <p></p>
          
      </div>
      <div class="um">
          
          <p>Quando Pedro identifica o Senhor Jesus como “o Filho do Deus vivo”, está apontando para a divindade e domínio de Cristo sobre todas as coisas.
              A palavra “senhor” na língua grega quer dizer “dono”.
              Vários dos apóstolos referiam-se a Jesus como “o Senhor”, ou seja, o Dono de todas as coisas, o que incluía suas vidas e fé.
              <br><i>(Romanos 1. 1)</i> </p>
          
      </div>
      <div class="dois" style="text-align: right; ">
          
          <p style="text-align: center; margin-top: 25%;">Ser o nosso Senhor</p>
          
      </div>
    
  </section>

    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
      
        <div class="carousel-inner"   style="color: rgb(253, 143, 100);">
          <div class="carousel-item active">
            <img src="../img/igreja1.jpg" alt="Los Angeles" class="d-block w-100">
            <div class="carousel-caption">
                <h2>Nossa Missão:</h2>
                <p>Fazer chegar a palavra do Senhor.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="../img/igreja2.jpg" alt="Chicago" class="d-block w-100">
            <div class="carousel-caption">
                <h3>Nossa Missão:</h3>
                <p>Servir a palavra e aos ensinamentos celestiais.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="../img/igreja3.jpg" alt="New York" class="d-block w-100">
            <div class="carousel-caption">
                <h3>Nossa Missão:</h3>
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

    </div>

    
    <!-- AGENDA -->
    <section class="agenda"> 
        <div class="jmissao">
            <h4 style="text-align: center; color: rgb(42, 42, 42); margin-top: 50px;">Agenda Semanal</h4>
        </div> 
        <div class="container mt-3">
            <br>
            <div>
                <ul class="nav nav-pills bg-light" role="tablist" >
                    <li class="nav-item">
                      <a class="nav-link active " data-bs-toggle="pill" href="#home">Domingo</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#menu1">Segunda-feira</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#menu2">Terça-feira</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#menu3">Quarta-feira</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#menu4">Quinta-feira</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#menu5">Sexta-feira</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#menu6">Sábado</a>
                    </li>
                  </ul>
            </div>

            <div class="tab-content">
              <div id="home" class="container tab-pane active"><br>
                <h3>Santo Culto</h3>
                <p>Reunião especial para quem deseja estabelecer a sua vida no Reino de Deus <br> <br>

                    Participe às 7h30 ou 9h30 <br> <br>
                    
                    Tratamento para a Cura dos Vícios às 15h <br> <br>
                                        
                    <h6 class="mi">Mais informações:</h6> email: info@iad.com ou através do telefone: 21 368 008</p>   
            </div>
              <div id="menu1" class="container tab-pane fade"><br>
                <h3>Congresso para o Sucesso</h3>
                <p>Palestra motivacional para o sucesso financeiro<br> <br>

                    Participe às 7h30, 10h, 15h e 20h <br> <br>
                    
                    <h6 class="mi">Mais informações:</h6> email: info@iad.com ou através do telefone: 21 368 008</p>   
            </div>
              <div id="menu2" class="container tab-pane fade"><br>
                <h3>Dia da Cura</h3>
                <p>Oração para a restauração da saúde física e emocional <br> <br>

                    Participe às 7h30, 10h, 15h e 20h <br> <br>
                    
                    <h6 class="mi">Mais informações:</h6> email: info@iad.com ou através do telefone: 21 368 008</p>       
            </div>
            <div id="menu3" class="container tab-pane fade"><br>
                <h3>Escola da Fé</h3>
                <p>Reunião para o fortalecimento espiritual <br> <br>

                    Participe às 7h, 10h, 12h, 15h e 20h <br> <br>
                    
                    <h6 class="mi">Mais informações:</h6> email: info@iad.com ou através do telefone: 21 368 008</p>       
            </div>
            <div id="menu4" class="container tab-pane fade"><br>
                <h3>Terapia do Amor</h3>
                <p>Palestra para solteiros, noivos e casados que procuram a felicidade amorosa <br> <br>

                    Participe às 7h30, 10h, 15h e 20h <br> <br>
                    
                    <h6 class="mi">Mais informações:</h6> email: info@iad.com ou através do telefone: 21 368 008</p>       
            </div>
            <div id="menu5" class="container tab-pane fade"><br>
                <h3>Corrente de Libertação Espiritual</h3>
                <p>Orações fortes para libertação espiritual, quebra de maldições e todos os rituais do mal <br> <br>

                    Participe às 7h30, 10h, 12h, 15h, 18h e 20h <br> <br>
                    
                    <h6 class="mi">Mais informações:</h6> email: info@iad.com ou através do telefone: 21 368 008</p>       
            </div>
            <div id="menu6" class="container tab-pane fade"><br>
                <h3>Jejum Coletivo</h3>
                <p>Oração especial para pessoas com causas na justiça e problemas sem solução <br> <br>

                    Participe às 07h30 ou 10h <br> <br>
                    
                    <h6 class="mi">Mais informações:</h6> email: info@iad.com ou através do telefone: 21 368 008</p>    
            </div>
            </div>
          </div>
    </section>

    <!--Contactos de Ajuda -->
    <section style="margin-top: 100px;">
        <div class="card bg-light"  style="margin-top: 30px;">
            <div class="card-body"  style="text-align: center;">
              <h4 class="card-title" style="margin-top: 30px;">Precisa de alguma ajuda?</h4>
              <p class="card-text">Contacte a igreja através dos seguintes contactos:</p>
              <a href="#" class="card-link">+21 345 2321 </a> - Linha de Apoio
              <a href="#" class="card-link">+21 345 2322</a> - Linha de Emergências
              <a href="#" class="card-link">+258 87 338 3373</a> - Pastor Lucas Alfredo
            </div>
          </div>
    </section>
</body>
 



