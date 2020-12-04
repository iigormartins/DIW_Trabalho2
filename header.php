<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portal Premiere - Seu Portal de Filmes e Series</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/global.css">
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous" ></script>
    <script src="https://kit.fontawesome.com/77869eb065.js" crossorigin="anonymous"></script>
    <script type="module" src="./js/index.js"></script>
  </head>
  
  <body>
        <header>
            <nav class="navbar navbar-expand-lg custom-nav">
                <button class="navbar-toggler navbar-custom-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                    <span><i class="fas fa-bars"></i></span>
                </button>

                <a class="navbar-brand navbar-custom-logo" href="index.php">
                    <img src="./images/logo.png" class="d-inline-block align-top" alt="">
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto navbar-custom-ul">
                        <li class="nav-item">
                            <a class="nav-link" href="#releases">Lançamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#featured">Em Destaque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ratings">Avaliações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#interviews">Entrevistas & Makingof</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">Novidades</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="search.html">Pesquisar Filmes</a>
                        </li> -->
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <div class="input-group navbar-custom-search">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon-custom-search" id="basic-addon1"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Pesquisar Filme" aria-label="Search" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon-custom-close" id="basic-addon1"><i class="far fa-times-circle"></i></span>
                            </div>
                        </div>
                    </form>

                </div>
            </nav>
        </header>