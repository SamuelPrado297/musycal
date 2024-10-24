<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ Alok - Brasília</title>
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
        <img src="image/banneralok.png" alt="DJ Alok" class="img-fluid">
    </div>
    <div class="conteudo-container container mt-5">
        <div class="section">
            <h2 class="small-title">TOMAROCK PRODUÇÕES APRESENTA</h2>
            <h1>DJ Alok - 64 Anos Brasília</h1>
            <p>Prepare-se para uma noite inesquecível com um dos maiores DJs do mundo! A Tomarock Produções orgulhosamente apresenta DJ Alok - 64 anos Brasília, um espetáculo de som, luzes e energia que vai agitar o público e proporcionar uma experiência única. Conhecido por seus hits que dominam as paradas mundiais, Alok trará sua mistura inconfundível de música eletrônica para o palco, fazendo todo mundo dançar e vibrar com suas batidas contagiantes. Hits como "Hear Me Now", "Never Let Me Go" e "On & On" farão parte de um setlist eletrizante.</p>
            <p>A produtora Tomarock Produções garante uma produção de ponta, com efeitos visuais impressionantes, um sistema de som de última geração e uma iluminação espetacular que criará uma atmosfera mágica e envolvente. O evento não é apenas um show, mas uma experiência completa. Com performances visuais, interações e uma ambientação que levará o público a um nível superior de entretenimento, o local do evento será especialmente preparado para oferecer conforto e segurança a todos os presentes, com diferentes opções de áreas e serviços para uma noite perfeita. Os ingressos para DJ Alok - The Ultimate Experience estão disponíveis para compra exclusiva no site da Musycal, não perca a oportunidade de garantir seu lugar nesse evento imperdível. Acesse o site, escolha seu ingresso e prepare-se para uma noite de pura diversão e música eletrônica de alta qualidade. Não perca essa chance de viver uma experiência única com DJ Alok!
            </p>
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
                        <td>R$ 400,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Solidário</td>
                        <td>R$ 400,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Entrada</td>
                        <td>R$ 400,00</td>
                    </tr>
                    <tr>
                        <td>Inteira</td>
                        <td>R$ 800,00</td>
                    </tr>
                </tbody>
            </table><br>
            <button class="btn btn-primary" id="comprarIngresso">Comprar Ingresso</button>
        </div>
        <hr class="linha">
        <div class="section ultima-section">
            <div class="event-details">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30711.74513595573!2d-47.86866502354843!3d-15.805633763437617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b38f2299385%3A0x4353617831b0037a!2sEsplanada%20dos%20Minist%C3%A9rios%20-%20Bras%C3%ADlia%2C%20DF!5e0!3m2!1spt-BR!2sbr!4v1718412557851!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <p><strong>Data:</strong> 21/04/2024</p>
                <p><strong>Horário:</strong> 20:00</p>
                <p><strong>Abertura dos portões:</strong> 19:00</p>
                <p><strong>Localização:</strong> Esplanada dos Ministérios, Brasília - Distrito Federal</p>
                <p><strong>BILHETERIA OFICIAL:</strong> Compra de ingressos somente no site da Musycal.</p>
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
