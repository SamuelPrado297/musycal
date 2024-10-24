<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natiruts - Leve com Você</title>
    <link rel="stylesheet" href="css/ingresso.css">
    <script src="js/mobile.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body style="background-color: #F4F4F4;">
    <header>
        <nav class="navbar navbar-dark navbar-expand-sm fixed-top" id="nav">
            <div class="container">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <img src="image/musycal.png" alt="Musycal" title="Página Principal" width="100px">
                </a>
                <!-- Barra de Pesquisa-->
                <div class="search-box">
                    <input type="text" class="search-txt" name="pesquisa" placeholder="Artistas, gêneros, shows">
                    <a href="#" class="search-btn">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
                <!--Fim da Barra de Pesquisa-->
                <div class="navbar-nav ms-auto">
                    <a href= "perfis.php">
                        <i class='far fa-user-circle fa-3x' style='color:#ffffff' id="perfil" title="Conta"></i> 
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <div class="banner">
        <img src="image/bannernatiruts.png" alt="Natiruts" class="img-fluid">
    </div>
    <div class="conteudo-container container mt-5">
        <div class="section">
            <h2 class="small-title">TOMAROCK PRODUÇÕES APRESENTA</h2>
            <h1>Natiruts - Leve com Você</h1>
            <p>O Natiruts está de volta com um show espetacular para 2024! A banda de reggae brasileira promete encantar seus fãs com uma apresentação memorável que acontecerá no Allianz Parque, em São Paulo. Em uma noite única, o Natiruts trará uma mistura de seus maiores sucessos e novas canções, celebrando a música, a paz e a positividade, prepare-se para uma noite de vibrações positivas e energia contagiante com o Natiruts. Com uma carreira repleta de hits que marcaram gerações, a banda promete um show inesquecível para todos os fãs do reggae e da boa música, com um setlist incluirá clássicos como "Presente de um Beija-Flor", "Quero Ser Feliz Também" e "Liberdade pra Dentro da Cabeça", além de novas canções que irão surpreender e encantar o público.</p>
            <p>Organizado pela produtora Tomarock Produções garante uma experiência de show de primeira linha, com som e iluminação de ponta, criando a atmosfera perfeita para uma noite mágica.O Allianz Parque será transformado para oferecer o máximo de conforto e acessibilidade, com uma variedade de opções de assentos para atender a todas as preferências. Os ingressos para o Natiruts já estão disponíveis para compra exclusiva no site Eventim. Garanta o seu lugar para essa noite imperdível de reggae e celebração. Acesse o site, escolha seu ingresso e prepare-se para viver momentos inesquecíveis com o Natiruts, não perca essa oportunidade única de ver o Natiruts ao vivo e celebrar a música e a positividade em grande estilo!</p>
        </div>
        <hr class="linha">
        <div class="section ingressos-section">
            <h2>Ingressos</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tipo de Ingresso</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Solidário</td>
                        <td>R$ 90,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Solidário</td>
                        <td>R$ 90,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Entrada</td>
                        <td>R$ 90,00</td>
                    </tr>
                    <tr>
                        <td>Inteira</td>
                        <td>R$ 180,00</td>
                    </tr>
                </tbody>
            </table><br>
            <button class="btn btn-primary" id="comprarIngresso">Comprar Ingresso</button>
        </div>
        <hr class="linha">
        <div class="section ultima-section">
            <div class="event-details">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.5447455503854!2d-43.29488772377865!3d-22.893269937389878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997d070e398159%3A0x9e05df3c77e2e376!2sEst%C3%A1dio%20Ol%C3%ADmpico%20Nilton%20Santos!5e0!3m2!1spt-BR!2sbr!4v1718490636577!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <p><strong>Data:</strong> 22/07/2024</p>
                <p><strong>Horário:</strong> 20:30</p>
                <p><strong>Abertura dos portões:</strong> 19:00</p>
                <p><strong>Localização:</strong> Estádio Olímpico Nilton Santos - R. José dos Reis, 425 - Engenho de Dentro, Rio de Janeiro - RJ, 20770-001 </p>
                <p><strong>BILHETERIA OFICIAL:</strong> R. José dos Reis, 425 - Engenho de Dentro, Rio de Janeiro - RJ, 20770-001</p>
                <p><strong>AVISO:</strong> A Musycal não se responsabiliza por compras efetuadas em canais não oficiais. <strong><br>Atente-se aos horários e locais indicados acima.</strong></p>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Compra concluída.</p>
        </div>
    </div>
    <footer class="py-4 mt-5">
        <div class="container text-light text-center">
            <p class="text-white-50">&copy;Todos os Direitos Reservados aos Artistas</p>
            <a href="sobre.html" class="nav-link active">Sobre</a>
        </div>
    </footer>
</body>
</html>
