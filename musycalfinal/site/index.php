<?php 
     
     session_start();
     require_once "config.php";

     function logout()
     {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
     }

     if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: index.php");
        exit;
     }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/inicial.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Musycal</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-sm fixed-top" id="nav">
            <div class="container">
                <a href="site.php" class="navbar-brand d-flex align-items-center"> <img src="./image/musycal.png" alt="Musycal" title="Página Principal" width="100px"></a>
                <!-- Barra de Pesquisa-->
                <div class="search-box">
                    <input type="text" class="search-txt" name="pesquisa" placeholder="Artistas, gêneros, shows">
                    <a href="#" class="search-btn">
                        <i class=" fas fa-search"></i>
                    </a>
                </div>
                <!--Fim da Barra de Pesquisa-->
                <div class="navbar-nav ms-auto">
                    <a href="login.php" style="color: white; text-decoration: none;">Login</a>
                </div>
                <a href= "perfis.php"> <i class='far fa-user-circle fa-3x' style='color:#ffffff' id="perfil" title="Perfil"></i> </a>
            </div>    
        </nav>
    </header>

        <!--Carrossel-->
        <div class="carousel slide carousel-fade" data-bs-ride="carousel " id="ads">
            <div class="carousel-indicators">
                <button class="active" data-bs-target="#ads" data-bs-slide-to="0"></button>
                <button class="" data-bs-target="#ads" data-bs-slide-to="1"></button>
                <button class="" data-bs-target="#ads" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000"><img src="./image/auroraRules.png" alt="Aurora Rules" class="d-flex w-100">
                    <div class="carousel-caption">
                        <h4>Os Melhores</h4>
                        <p>A Melhor trilha sonora do seu dia com os melhores artistas do Brasil e do Mundo</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000"><img src="./image/alok.png" alt="Alok" class="d-flex w-100">
                    <div class="carousel-caption">
                        <h4>Para Todos os Gostos</h4>
                        <p>O Site para todos os artistas. Dos independentes, até os populares</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000"><img src="./image/teto.png" alt="Teto" class="d-flex w-100">
                    <div class="carousel-caption">
                        <h4>Show Hoje, Chefia?</h4>
                        <p>Confira os shows e eventos da semana e aproveite para conhecer novos artistas.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Fim do Carrossel-->
        <div id="titulo">
          <img src="./image/titulo.png">
        </div>

        <div class="container py-4">
            <div class="card-group">
                <div class="card" style="border: none;">
                    <a href="ingressoalok.php"><img src="./image/alokk.png" alt="Alok" class="card-img-top"></a>
                    <div class="card-body">
                        <h6 class="card-title" style="color: #149CA5;">Alok - 64 Anos de Brasília</h6>
                        <p class="card-text">Esplanada dos Ministérios - Brasília - DF</p>
                    </div>
                </div>
                <div class="card" style="border: none;">
                    <a href="ingressoaurorarules.php"><img src="./image/aurorarule.png" alt="Aurora Rules" class="card-img-top"></a>
                    <div class="card-body">
                        <h6 class="card-title" style="color: #149CA5;">Aurora Rules - RJ Tour</h6>
                        <p class="card-text">Lapa - Rio de Janeiro - RJ</p>
                    </div>
                </div>
                <div class="card" style="border: none;">
                    <a href="ingressonatiruts.php"><img src="./image/showNatiruts.png" alt="Natiruts" class="card-img-top"></a>
                    <div class="card-body">
                        <h6 class="card-title" style="color: #149CA5;">Natiruts - Leve com Você</h6>
                        <p class="card-text">Estádio Nilton Santos - Engenhão - RJ</p>
                    </div>
                </div>
                <div class="card" style="border: none;">
                    <a href="ingressoknotfest.php"><img src="./image/slipknott.png" alt="Slipknot" class="card-img-top"></a>
                    <div class="card-body">
                        <h6 class="card-title" style="color: #149CA5;">Knotfest - Slipknot 25º Aniversário</h6>
                        <p class="card-text">Allianz Park - São Paulo - SP</p>                
                    </div>
                </div>
                <div class="card" style="border: none;">
                    <a href="ingressoteto.php"><img src="./image/tetu.png" alt="Teto" class="card-img-top"></a>
                    <div class="card-body">
                        <h6 class="card-title" style="color: #149CA5;">Teto em São Paulo</h6>
                        <p class="card-text"> São Paulo - SP</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner">
            <img src="./image/banner.png" width="90%" alt="Banner Musycal">
        </div>

        <div id="titulo">
            <img src="./image/titulo2.png">
          </div>
        <div class="container py-4">
            <div class="card-group">
                <div class="card" style="border: none;">
                    <a href="ingressoangra.php"><img src="./image/angraa.png" alt="Angra" class="card-img-top"></a>
                    <div class="card-body">
                        <h6 class="card-title" style="color: #149CA5;">Angra - Cycles of Pain Tour</h6>
                        <p class="card-text">Parque de Exibições João Alencar Athayde - Montes Claros - MG</p>
                    </div>
                </div>
                <div class="card" style="border: none;">
                    <a href="ingressobmth.php"><img src="./image/bmthh.png" alt="Bring Me The Horizon" class="card-img-top"></a>
                    <div class="card-body">
                        <h6 class="card-title" style="color: #149CA5;">Bring Me The Horizon</h6>
                        <p class="card-text">Allianz Parque - São Paulo - SP</p>
                    </div>
                </div>
                <div class="card" style="border: none;">
                    <a href="ingressobaile.php"><img src="./image/cabelinecaveirinha.png" alt="Little Hair" class="card-img-top"></a>
                    <div class="card-body">
                        <h6 class="card-title" style="color: #149CA5;">MC Cabelinho & MC Caveirinha</h6>
                        <p class="card-text">Rosewood Hotel - São Paulo</p>
                    </div>
                </div>
                <div class="card" style="border: none;">
                    <a href="ingressopericles.php"><img src="./image/pericles.png" alt="Péricles" class="card-img-top"></a>
                    <div class="card-body">
                        <h6 class="card-title" style="color: #149CA5;">Péricles no Terra SP</h6>
                        <p class="card-text">Terra SP - São Paulo - SP</p>                
                    </div>
                </div>
                <div class="card" style="border: none;">
                    <a href="ingressozeramalho.php"><img src="./image/zeramalho.png" alt="Zé Ramalho" class="card-img-top"></a>
                    <div class="card-body">
                         <h6 class="card-title" style="color: #149CA5;">Zé Ramalho - Show dos Sucessos</h6>
                        <p class="card-text">Gungel Beach Club - Lagoa Santa - MG</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="vakinha">
                <a href="https://www.vakinha.com.br/vaquinha/a-maior-campanha-solidaria-do-rs" target="_blank"> <img width="68%" src="./image/vakinhario.png" alt="Vakinha Sul"></a>
            </div>
        </div>
    <script src="./js/inicial.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <footer class="py-4 mt-5">
        <div class="container text-light text-center">
            <p class="text-white-50">&copy;Todos os Direitos Reservados aos Artistas</small>
            <a href="sobre.html" class="nav-link active">Sobre</a>
        </div>
    </footer>
</body>
</html>