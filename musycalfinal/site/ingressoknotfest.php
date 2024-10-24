<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slipknot 25° Anniversary</title>
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
        <img src="image/bannerknotfest.png" alt="Knotfest" class="img-fluid">
    </div>
    <div class="conteudo-container container mt-5">
        <div class="section">
            <h2 class="small-title">TOMAROCK PRODUÇÕES APRESENTA</h2>
            <h1>Knotfest - Slipknot 25° Anniversary</h1>
            <p>Prepare-se para uma celebração épica e inesquecível organizada pela Tomarock Produções! O Knotfest, o icônico festival de música criado pela lendária banda Slipknot, chega ao Brasil para comemorar o 25º aniversário da banda com uma edição especial no Allianz Parque. Nos dias 19 e 20 de outubro, fãs de todo o país e do mundo se reunirão em São Paulo para vivenciar dois dias de pura energia, intensidade e performances arrebatadoras.</p>
            <p>A banda se apresentará em ambos os dias, trazendo seus maiores sucessos e faixas de seu novo álbum. Com uma produção de palco espetacular, efeitos visuais impressionantes e a inigualável presença de palco de Corey Taylor e companhia, essas apresentações prometem ser momentos históricos. Além do Slipknot, o festival contará com uma linha de frente de bandas de rock e metal, nacionais e internacionais, que serão reveladas em breve e garantirão que a energia nunca caia. Nomes de peso e novos talentos se alternarão nos palcos, oferecendo uma diversidade musical que agrada a todos os gostos dentro do gênero, será mais do que um festival de música; é uma experiência completa. Haverá áreas temáticas, exposições de arte, stands interativos e espaços para meet and greet com artistas. Os fãs poderão mergulhar no universo do Slipknot e celebrar a cultura do metal em sua forma mais pura. Os ingressos para o Knotfest - Slipknot 25° Anniversary estão disponíveis para compra online e nos pontos de venda autorizados. Garanta o seu lugar nesse evento histórico e prepare-se para viver dois dias de música intensa, celebração e comunidade.</p>
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
                        <td>Solidário 1º dia</td>
                        <td>R$ 30,00</td>
                    </tr>
                    <tr>
                        <td>Solidário 2° dia</td>
                        <td>R$ 30,00</td>
                    </tr>
                    <tr>
                        <td>Solidário VIP (todos os dias)</td>
                        <td>R$ 45,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Entrada 1° dia</td>
                        <td>R$ 30,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Entrada 2° dia</td>
                        <td>R$ 30,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Entrada VIP (todos os dias)</td>
                        <td>R$ 45,00</td>
                    </tr>
                    <tr>
                        <td>Inteira 1° dia</td>
                        <td>R$ 60,00</td>
                    </tr>
                    <tr>
                        <td>Inteira 2° dia</td>
                        <td>R$ 60,00</td>
                    </tr>
                    <tr>
                        <td>Inteira VIP (todos os dias)</td>
                        <td>R$ 75,00</td>
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
                <p><strong>Data:</strong> 19/10/2024 e 20/10/2024</p>
                <p><strong>Horário:</strong> 22:00</p>
                <p><strong>Abertura dos portões:</strong> 11:00</p>
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
