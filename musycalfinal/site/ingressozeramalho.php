<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zé Ramalho - Show dos Sucessos</title>
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
                    <a href="perfis.php">
                        <i class='far fa-user-circle fa-3x' style='color:#ffffff' id="perfil" title="Conta"></i> 
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <div class="banner">
        <img src="image/bannerzeramalho.png" alt="Zé Ramalho" class="img-fluid">
    </div>
    <div class="conteudo-container container mt-5">
        <div class="section">
            <h2 class="small-title">TOMAROCK PRODUÇÕES APRESENTA</h2>
            <h1>Zé Ramalho - Show dos Sucessos</h1>
            <p>Zé Ramalho, o ícone da música brasileira, chega para uma apresentação memorável, onde sua voz única e suas letras profundas vão te levar a uma experiência além do tempo. Prepare-se para mergulhar em clássicos que atravessam gerações e em canções que tocam a essência de quem as ouve, com uma carreira repleta de sucessos e uma identidade musical única, Zé Ramalho é um dos maiores nomes da música popular brasileira. Suas composições carregadas de poesia e sua voz marcante conquistam fãs por todo o país.</p>
            <p>A Tomarock Produções tem a satisfação de apresentar este evento, garantindo uma produção impecável para uma noite que ficará gravada na memória de todos os presentes, não perca essa oportunidade única de se emocionar e se conectar com a arte de Zé Ramalho. Garanta seu lugar nessa noite especial adquirindo seu ingresso no site Musycal e não perca a oportunidade de vivenciar esse encontro com a genialidade musical de Zé Ramalho. Venha fazer parte deste momento inesquecível!</p>
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
                        <td>R$ 60,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Solidário</td>
                        <td>R$ 60,00</td>
                    <tr>
                        <td>Meia-Entrada</td>
                        <td>R$ 60,00</td>
                    </tr>
                    <tr>
                        <td>Inteira</td>
                        <td>R$ 120,00</td>
                    </tr>
                </tbody>
            </table><br>
            <button class="btn btn-primary" id="comprarIngresso">Comprar Ingresso</button>
        </div>
        <hr class="linha">
        <div class="section ultima-section">
            <div class="event-details">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.6896217373837!2d-43.89044712386327!3d-19.640562829362782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa67d5e61535815%3A0xcfb0f8fed06ec240!2sGurgel%20Beach%20Club!5e0!3m2!1spt-BR!2sbr!4v1718498336638!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p><strong>Data:</strong> 25/09/2024</p>
                <p><strong>Horário:</strong> 20:00</p>
                <p><strong>Abertura dos portões:</strong> 19:00</p>
                <p><strong>Localização:</strong> Av. Getúlio Vargas, 5000 - Várzea, Lagoa Santa - MG, 33233-024</p>
                <p><strong>BILHETERIA OFICIAL:</strong> Av. Getúlio Vargas, 5000 - Várzea, Lagoa Santa - MG, 33233-024</p>
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
