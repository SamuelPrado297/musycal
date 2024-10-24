<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Rules Rio de Janeiro</title>
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
        <img src="image/banneraurorarules.png" alt="Angra" class="img-fluid">
    </div>
    <div class="conteudo-container container mt-5">
        <div class="section">
            <h2 class="small-title">TOMAROCK PRODUÇÕES APRESENTA</h2>
            <h1>Aurora Rules - Rio de Janeiro Tour</h1>
            <p>A banda Aurora Rules está pronta para incendiar o Rio de Janeiro com sua nova turnê! A Tomarock Produções orgulhosamente apresenta Aurora Rules - Rio de Janeiro Tour, uma série de shows que vai agitar a cidade maravilhosa com performances eletrizantes e inesquecíveis, sendo conhecida por sua energia contagiante e por suas músicas que conquistam cada vez mais fãs, Aurora Rules trará para o palco todos os seus maiores sucessos. Com um repertório que inclui hits como "Euphoria", "Wild Nights" e "Electric Dreams", a banda promete levantar o público com suas performances vibrantes.</p>
            <p>Sendo realizado pela Tomarock Produções que garante uma produção impecável, com som de última geração e uma iluminação espetacular, proporcionando uma experiência visual e auditiva que vai além do esperado, serão várias datas e locais pela cidade do Rio de Janeiro, cada um escolhido para oferecer a melhor experiência para os fãs. Cada show será único, com surpresas e momentos especiais que farão desta turnê um marco na carreira da banda. Será mais do que um show, será uma verdadeira imersão no universo da Aurora Rules, com interação com os fãs, merchandise exclusivo e momentos especiais que vão tornar cada apresentação inesquecível. Os ingressos já estão disponíveis para compra exclusiva no site  da Musycal. Não perca a chance de fazer parte dessa experiência incrível, acesse o site, escolha a data e o local do show que deseja assistir e garanta seu ingresso agora mesmo. Venha viver essa experiência única e vibrante com a Aurora Rules no Rio de Janeiro!</p>
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
                        <td>R$ 40,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Solidário</td>
                        <td>R$ 40,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Entrada</td>
                        <td>R$ 40,00</td>
                    </tr>
                    <tr>
                        <td>Inteira</td>
                        <td>R$ 80,00</td>
                    </tr>
                </tbody>
            </table><br>
            <button class="btn btn-primary" id="comprarIngresso">Comprar Ingresso</button>
        </div>
        <hr class="linha">
        <div class="section ultima-section">
            <div class="event-details">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.9922586079324!2d-43.183763324689394!3d-22.91365637925026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f64c19bf341%3A0x16b3af63f285810c!2sRock%20Experience!5e0!3m2!1spt-BR!2sbr!4v1718489561114!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p><strong>Data:</strong> 01/06/2024</p>
                <p><strong>Horário:</strong> 22:00</p>
                <p><strong>Abertura dos portões:</strong> 21:00</p>
                <p><strong>Localização:</strong> R. Riachuelo, 20 - Lapa, Rio de Janeiro - RJ, 20230-014</p>
                <p><strong>Bilheteria Oficial:</strong> Compra de ingressos somente no site da Musycal.</p>
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
