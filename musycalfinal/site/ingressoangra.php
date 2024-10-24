<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angra Cycles Of Pains Tour</title>
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
        <img src="image/bannerangra.png" alt="Angra" class="img-fluid">
    </div>
    <div class="conteudo-container container mt-5">
        <div class="section">
            <h2 class="small-title">TOMAROCK PRODUÇÕES APRESENTA</h2>
            <h1>Angra - Cycles Of Pain Tour</h1>
            <p>Prepare-se para uma noite de puro heavy metal com uma das maiores bandas do gênero no Brasil! A Tomarock Produções tem o orgulho de apresentar Angra - Cycles Of Pain Tour, uma turnê que promete trazer toda a energia, técnica e emoção que só o Angra pode oferecer. Venha celebrar os sucessos de uma carreira lendária e descobrir as novas músicas do seu mais recente álbum "Cycles Of Pain", com décadas de sucesso e uma legião de fãs apaixonados, o Angra trará para o palco um setlist poderoso que inclui clássicos como "Carry On", "Nova Era" e "Rebirth", além das faixas impactantes do novo álbum "Cycles Of Pain", com a guitarra do mais antigo membro fundador Rafael Bittencourt, os solos lendários do Marcelo Barbosa, a bateria do grande Bruno Valverde, o baixo do saudoso Felipe Andreoli e o vocal do grande Fabio Lione que tem o próprio power metal em sua voz, cada performance é uma demonstração de técnica e paixão que cativa, inspira e certamente ficarão na história. A "Cycles Of Pain Tour" celebra o mais recente trabalho da banda, trazendo um show especialmente preparado para os fãs, com novas músicas que já estão conquistando o público e a crítica, além dos inesquecíveis clássicos que marcaram a carreira do Angra e o legado de seus vocalistas anteriores André Matos e Edu Falaschi.</p>
            <p>Tomarock Produções garante uma experiência de show de altíssima qualidade, com uma produção de ponta, com um sistema de som impecável e uma iluminação que realça cada detalhe da apresentação, criando um ambiente perfeito para uma noite inesquecível. O evento será realizado em um local especialmente escolhido para oferecer conforto e acessibilidade a todos os presentes, haverá áreas de alimentação, bares e opções de merchandise oficial, permitindo que os fãs levem para casa uma lembrança desta noite épica. Venha viver a intensidade e a magia do heavy metal com o Angra na Cycles Of Pain Tour!</p>
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
                        <td>R$ 100,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Solidário</td>
                        <td>R$ 100,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Entrada</td>
                        <td>R$ 100,00</td>
                    </tr>
                    <tr>
                        <td>Inteira</td>
                        <td>R$ 200,00</td>
                    </tr>
                </tbody>
            </table><br>
            <button class="btn btn-primary" id="comprarIngresso">Comprar Ingresso</button>
        </div>
        <hr class="linha">
        <div class="section ultima-section">
            <div class="event-details">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.2966099045843!2d-43.853634823930946!3d-16.712045846221926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x754ab46603101fd%3A0xaac93e0354a623d9!2sParque%20de%20Exposi%C3%A7%C3%B5es%20Jo%C3%A3o%20Alencar%20de%20Athayde!5e0!3m2!1spt-BR!2sbr!4v1718492754779!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p><strong>Data:</strong> 22/12/2024</p>
                <p><strong>Horário:</strong> 21:00</p>
                <p><strong>Abertura dos portões:</strong> 20:00</p>
                <p><strong>Localização:</strong> Praça Lindolfo Laughton, 1373 - Alto São João, Montes Claros - MG, 39400-575</p>
                <p><strong>BILHETERIA OFICIAL:</strong> Praça Lindolfo Laughton, 1373 - Alto São João, Montes Claros - MG, 39400-575</p>
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
