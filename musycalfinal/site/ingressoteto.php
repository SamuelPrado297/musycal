<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teto - Fortaleza CE</title>
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
                    <a href="" class="search-btn">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
                <!--Fim da Barra de Pesquisa-->
                <div class="navbar-nav ms-auto">
                    <a href="perfis.php">
                        <i class='far fa-user-circle fa-3x' style='color:#ffffff' id="perfil" title="Conta"></i> 
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <div class="banner">
        <img src="image/bannerteto.png" alt="MC Cabelinho" class="img-fluid">
    </div>
    <div class="conteudo-container container mt-5">
        <div class="section">
            <h2 class="small-title">TOMAROCK PRODUÇÕES APRESENTA</h2>
            <h1>Teto - Praia do Futuro</h1>
            <p>Prepare-se para uma noite mágica à beira-mar! A Tomarock Produções tem o orgulho de apresentar Teto - Praia do Futuro Experience, um show espetacular do fenômeno do trap brasileiro na icônica Praia do Futuro, em Fortaleza, CE. Mergulhe em uma experiência musical única, onde as batidas envolventes de Teto se encontram com o cenário paradisíaco de uma das praias mais famosas do Brasil, com seu estilo único e letras que capturam a essência do trap nacional, Teto vai levar ao palco seus maiores sucessos, incluindo hits como "M4", "Paypal" e "Mustang Preto". Prepare-se para uma performance energética e cheia de atitude que vai fazer todo mundo vibrar. O show acontecerá na deslumbrante Praia do Futuro, proporcionando uma combinação perfeita de música e natureza. Com o som das ondas como pano de fundo, essa será uma noite inesquecível em um dos locais mais belos de Fortaleza.</p>
            <p>Além uma produção de ponta, o evento irá contar com um sistema de som de alta qualidade e uma iluminação que destacará ainda mais a beleza natural do local, criando uma atmosfera mágica e envolvente. Além do show, o evento contará com áreas de alimentação, bares e uma estrutura completa para garantir o conforto e a segurança de todos os presentes. Haverá também opções de merchandise oficial para que os fãs possam levar um pedaço dessa experiência inesquecível para casa. Os ingressos para Teto - Praia do Futuro Experience estão disponíveis para compra exclusiva no site Musycal. Não perca a oportunidade de garantir seu lugar nesse evento imperdível e prepare-se para uma noite de pura magia e música com Teto na Praia do Futuro, venha viver uma noite inesquecível com Teto à beira-mar em Fortaleza!</p>
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
                        <td>Entrada Gratuita</td>
                    </tr>
                    <tr>
                        <td>Meia-Entrada</td>
                        <td>Entrada Gratuita</td>
                    </tr>
                    <tr>
                        <td>Inteira</td>
                        <td>Entrada Gratuita</td>
                    </tr>
                </tbody>
            </table><br>
            <button class="btn btn-primary" id="comprarIngresso">Comprar Ingresso</button>
        </div>
        <hr class="linha">
        <div class="section ultima-section">
            <div class="event-details">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75751.35803736243!2d-38.498609216302356!3d-3.7687207861649483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c747be96378151%3A0x566f88a305935f84!2sPraia%20do%20Futuro!5e0!3m2!1spt-BR!2sbr!4v1718414186564!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p><strong>Data:</strong> 01/06/2024</p>
                <p><strong>Horário:</strong> 21:00</p>
                <p><strong>Abertura do show:</strong> 20:00</p>
                <p><strong>Localização:</strong> Praia do Futuro - Fortaleza - Ceará</p>
                <p><strong>BILHETERIA OFICIAL:</strong> Não é necessário comprar ingressos neste evento.</p>
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
