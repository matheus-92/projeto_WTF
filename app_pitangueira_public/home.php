<?php

  require_once('validador_acesso.php');
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>PITANGUEIRA MANUTEÇÃO DE HARDWARE LTDA</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
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
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header text-center">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-4 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <button type="button" class="btn btn-primary text-">Cadastrar Chamado</button>
                  </a>
                </div>
                <div class="col-4 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <button type="button" class="btn btn-success">Consultar Chamado</button>
                  </a>
                </div>

                <div class="col-4 d-flex justify-content-center">
                  <a href="admin.php">
                    <button type="button" class="btn btn-primary text-">Área do Admin</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>