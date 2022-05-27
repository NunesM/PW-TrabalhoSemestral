<?php include('controllers/server.php'); ?>
<script src="../main.js"></script>
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
    .t{
        margin-left: 5%;
    }

</style>


<div class=" form col-lg-8 px-5 pt-5" style="max-width: 47%; width: 40vw; margin-left : 16vw;">
    <div id="relatorio"></div>
    <h4>Adicione os dados do Crente</h4>
    <form method="post" class="mt-2">
        <div class="nomes mt-3">
            <div class="form-row">
                <div class="col-lg-10">
                    <input type="Firstname" placeholder="Nome" name="nome" class="Form-control my-2 p-1">
                </div>
            </div>
            <div class="t form-row">
                <div class="col-lg-8 ">
                    <input type="Lastname" placeholder="Apelido" name="apelido" class="Form-control my-2 p-1" >
                </div>
            </div>
        </div>
        <div class="demo-form-row">
            <input type="date" placeholder="Dia de nascimento" name="post_at" class="demo-form-field" required />
        </div>
        <div class="form-row">
            <div class="col-lg-8">
                <input type="Username" placeholder="Telefone" name="username" class="Form-control my-2 p-1"  style="width: 100%;">
            </div>
        </div>
        <div class="form-row">
            <div class="col-lg-8">
                <input type="password" placeholder="Email@exemplo.com" name="password1" class="Form-control my-2 p-1" style="width: 100%" >
            </div>
        </div>
        <div class="form-row">
            <div class="col-lg-8">
                <input type="password" placeholder="Bairro" name="password1" class="Form-control my-2 p-1" style="width: 100%" >
            </div>
        </div>
        
        <div style="display: flex; margin-left: 13vw;">
            <div class="form-row">
                <div class="col-lg-2">
                    <button type="submit" name="save_crente" class="btn btn-secondary mb-3 mt-2 p-2">Gravar</button>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-2" style="margin-left: 5px;" >
                    <button type="back" name="cancel" class="btn btn-secondary mb-3 mt-2 p-2" onclick="getPage('crentes.php')">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
</div>


<script src="../main.js"></script>