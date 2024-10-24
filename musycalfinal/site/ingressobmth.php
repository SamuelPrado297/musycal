<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMTH Allianz Parque 30/11</title>
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
        <img src="image/bannerbmth.png" alt="Bring Me The Horizon" class="img-fluid">
    </div>
    <div class="conteudo-container container mt-5">
        <div class="section">
            <h2 class="small-title">TOMAROCK PRODUÇÕES APRESENTA</h2>
            <h1>Bring Me The Horizon - Estádio Allianz Parque 30/11</h1>
            <p>Bring Me The Horizon promete novidades para 2024! O grupo inglês anunciou em suas redes sociais que ainda neste ano vai lançar mais um EP do projeto Post Human, que tem como ideia principal criar álbuns temáticos em torno de como a humanidade está totalmente em declínio. E o Brasil vai entrar para história do grupo. No dia 30 de novembro, acontece no Allianz Parque, em São Paulo, o primeiro show em estádio do BMTH como headliner! A apresentação única é realizada pela Tomarock Produções e ainda terá três bandas de abertura: Motionless In White, Spiritbox e The Plot In You. A venda de ingressos começa no dia 30 de abril, ao meio-dia pelo site da Musycal ou na bilheteria oficial no Allianz Parque (mais informações abaixo).</p>
            <p>O projeto Post Human, do Bring Me The Horizon, começou em 2020 com o lançamento do álbum Post Human: Horror Survival, aclamado pela crítica. Nele, a banda - formada pelo vocalista Oliver Sykes, o guitarrista Lee Malia, o baixista Matt Kean e o baterista Matt Nicholls - traz uma abordagem mais experimental e colaborativa, explorando uma variedade de gêneros musicais. O trabalho chegou ao primeiro lugar nas paradas do Reino Unido e os fãs passaram a esperar ansiosamente por cada novo lançamento.</p>
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
                        <td>R$ 70,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Entrada</td>
                        <td>R$ 70,00</td>
                    </tr>
                    <tr>
                        <td>Inteira</td>
                        <td>R$ 140,00</td>
                    </tr>
                </tbody>
            </table><br>
            <button class="btn btn-primary" id="comprarIngresso">Comprar Ingresso</button>
        </div>
        <hr class="linha">
        <div class="section ultima-section">
            <div class="event-details">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2740.486579535669!2d-46.67884828056462!3d-23.528521235391544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57fd1d715d45%3A0x864e5421d6195cb1!2sAllianz%20Parque!5e0!3m2!1spt-BR!2sbr!4v1718144970731!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <p><strong>Data:</strong> 30/11/2024</p>
                <p><strong>Horário:</strong> 21:00</p>
                <p><strong>Abertura dos portões:</strong> 18:00</p>
                <p><strong>Localização:</strong> Allianz Parque - São Paulo</p>
                <p><strong>BILHETERIA OFICIAL:</strong> Endereço Av. Francisco Matarazzo, 1705 – Portão B - Água Branca - São Paulo/SP</p>
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
