<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MC Cabelinho & MC Caveirinha</title>
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
        <img src="image/bannermccabelin.png" alt="MC Cabelinho" class="img-fluid">
    </div>
    <div class="conteudo-container container mt-5">
        <div class="section">
            <h2 class="small-title">TOMAROCK PRODUÇÕES APRESENTA</h2>
            <h1>MC Cabelinho & MC Caveirinha</h1>
            <p>Prepare-se para uma noite inesquecível com dois dos maiores nomes do funk brasileiro! A Tomarock Produções tem o prazer de apresentar MC Cabelinho e MC Caveirinha , o encontro de gigantes, um show explosivo que vai sacudir a cidade e fazer todo mundo dançar até o amanhecer. Com seu estilo único e letras que capturam a realidade das ruas, MC Cabelinho promete uma performance cheia de energia e emoção. Seus sucessos, como "Deixa Eu Te Amar" e "Vamos Fugir", farão parte de um setlist que vai levantar o público e transformar a noite em uma grande festa, por outro lado, conhecido por seu talento precoce e carisma, MC Caveirinha também trará seus hits que já conquistaram o Brasil, como "Menor" e "Pra Todas as Meninas". Prepare-se para uma apresentação vibrante e cheia de atitude.</p>
            <p>Dessa vez a Tomarock Produções também mostrou que pode ser Tomafunk Produções e garante uma produção de ponta, com som e iluminação de alta qualidade para proporcionar uma experiência inesquecível, cada detalhe foi pensado para que o público aproveite ao máximo cada momento do show, o local do evento será especialmente preparado para receber os fãs com conforto e segurança, criando a atmosfera perfeita para uma noite de muita música e diversão, com áreas de alimentação e bares disponíveis, todos os presentes terão tudo o que precisam para curtir o show do início ao fim, O local do evento será especialmente preparado para receber os fãs com conforto e segurança, criando a atmosfera perfeita para uma noite de muita música e diversão. Com áreas de alimentação e bares disponíveis, todos os presentes terão tudo o que precisam para curtir o show do início ao fim, os ingressos para MC Cabelinho & MC Caveirinha estão disponíveis para compra exclusiva no site Musycal. Não perca a chance de garantir seu lugar nesse evento imperdível. Acesse o site, escolha seu ingresso e prepare-se para uma noite de pura vibração com dois dos maiores nomes do funk brasileiro.
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
                        <td>R$ 50,00</td>
                    </tr>
                    <tr>
                        <td>Meia-Solidário</td>
                        <td>R$ 50,00</td>
                    <tr>
                        <td>Meia-Entrada</td>
                        <td>R$ 50,00</td>
                    </tr>
                    <tr>
                        <td>Inteira</td>
                        <td>R$ 100,00</td>
                    </tr>
                </tbody>
            </table><br>
            <button class="btn btn-primary" id="comprarIngresso">Comprar Ingresso</button>
        </div>
        <hr class="linha">
        <div class="section ultima-section">
            <div class="event-details">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.2304301384593!2d-46.65527662375996!3d-23.56016616155016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c98512b0b1%3A0x808c93368e10268a!2sRosewood%20Hotel%20-%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1718494185151!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p><strong>Data:</strong> 03/11/2024</p>
                <p><strong>Horário:</strong> 22:00</p>
                <p><strong>Abertura dos portões:</strong> 18:00</p>
                <p><strong>Localização:</strong> Rosewood Hotel - São Paulo</p>
                <p><strong>BILHETERIA OFICIAL:</strong> R. Itapeva, 435 - Bela Vista, São Paulo - SP, 01332-000</p>
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
