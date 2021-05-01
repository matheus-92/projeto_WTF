<?php

  require_once('validador_acesso.php');
?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>PITANGUEIRA MANUTEÇÃO DE HARDWARE LTDA</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand" href="#"> 
        PITANGUEIRA MANUTEÇÃO DE HARDWARE LTDA
      </a>
      <ul class="navabar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">Sair</a>
        </li>      
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Cadastro de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Nome do cliente</label>
                      <input name="nome_cliente" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Tipo de atendimento</label>
                      <select name="tipo_nome_atendimento" class="form-control">
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Manutenção</option>
                        <option>Avaliação</option>
                        <option>Rede</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Data do serviço</label>
                      <input name="data_execucao" class="form-control">
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a href = "home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>