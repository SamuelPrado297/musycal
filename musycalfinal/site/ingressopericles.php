<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periclés no Terra</title>
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
        <img src="image/bannerpericles.png" alt="Péricles" class="img-fluid">
    </div>
    <div class="conteudo-container container mt-5">
        <div class="section">
            <h2 class="small-title">TOMAROCK PRODUÇÕES APRESENTA</h2>
            <h1>Péricles - Céu Ciano</h1>
            <p>Venha viver uma noite inesquecível ao som de um dos maiores nomes do samba! A Tomarock Produções tem o prazer de apresentar Péricles - A Voz do Samba, um show emocionante e cheio de energia que vai encantar todos os fãs de boa música e samba de qualidade, com sua voz inconfundível e carisma contagiante, Péricles trará para o palco um repertório recheado de sucessos que marcaram sua carreira solo e os tempos de Exaltasamba. Prepare-se para cantar e dançar ao som de hits como "Final de Tarde", "Linguagem dos Olhos" e "Cuidado Cupido".<p>
            <p>A Tomarock Produções garante uma produção impecável, com som de alta definição e uma iluminação que criará uma atmosfera intimista e envolvente. Cada detalhe foi pensado para proporcionar ao público uma experiência inesquecível, o local do evento será preparado para oferecer conforto e acessibilidade, garantindo que todos os presentes possam aproveitar o show ao máximo, haverá áreas de alimentação, bares e uma estrutura completa para tornar a noite perfeita, além da música de Péricles, o evento proporcionará momentos de interação e surpresas que tornarão a noite ainda mais especial. Venha preparado para viver uma experiência única e emocionante. Os ingressos já estão disponíveis para compra exclusiva no site Musycal, mão perca a oportunidade de garantir seu lugar nesse show imperdível! Acesse o site, escolha seu ingresso e prepare-se para uma noite de samba e emoção com Péricles.</p>
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
                        <td>R$ 85,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Solidário</td>
                        <td>R$ 85,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Entrada</td>
                        <td>R$ 85,00</td>
                    </tr>
                    <tr>
                        <td>Inteira</td>
                        <td>R$ 170,00</td>
                    </tr>
                </tbody>
            </table><br>
            <button class="btn btn-primary" id="comprarIngresso">Comprar Ingresso</button>
        </div>
        <hr class="linha">
        <div class="section ultima-section">
            <div class="event-details">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.112828232317!2d-46.69858752375667!3d-23.671922765665066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4f0ed438ffbf%3A0x8caef01636fb9abf!2sTerra%20SP!5e0!3m2!1spt-BR!2sbr!4v1718495250354!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p><strong>Data:</strong> 17/05/2024</p>
                <p><strong>Horário:</strong> 22:00</p>
                <p><strong>Abertura dos portões:</strong> 19:00</p>
                <p><strong>Localização:</strong> Terra - São Paulo</p>
                <p><strong>BILHETERIA OFICIAL:</strong> Av. Salim Antônio Curiati, 160 - Campo Grande, São Paulo - SP, 04690-050</p>
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
