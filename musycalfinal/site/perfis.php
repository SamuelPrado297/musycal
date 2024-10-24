<?php
session_start(); 

require_once "config.php";

if (!isset($_SESSION['cpf'])) {
    echo "Usuário não está logado!";
    $nome = $email = '';
} else {
    $cpf = $_SESSION['cpf'];

    $sql = "SELECT name, email FROM users WHERE cpf = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nome = $row["name"];
        $email = $row["email"];
    } else {
        echo "0 results";
        $nome = $email = '';
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="css/perfil.css">
    <style>
        .edit-button {
            background-color: #149CA5;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .edit-button:hover {
            background-color: #117B81;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <a href="index.php"><img class="logotipo" src="image/musycal.png" alt="Musycal" title="Página Principal"></a>
            <div class="search-bar">
                <input type="text" class="search-bar" name="pesquisa" placeholder="Busca...">
            </div>
        </header>
        <div class="main-content">
            <aside class="barralateral">
                <div>
                    <img src="image/loginicone.png" alt="Ícone de Usuário">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php" class="menu-item">PÁGINA INICIAL</a></li>
                        <li><a href="ingressoalok.php" class="menu-item">APRESENTAÇÕES</a></li>
                        <li><a href="logout.php" class="menu-item">SAIR</a></li>
                    </ul>
                </nav>
            </aside>
            <main>
                <section class="perfil">
                    <h1>Dados do Cadastro</h1>
                    <div> 
                        <table class="dados-perfil">
                            <tr>
                                <td class="img-cell" rowspan="7"></td>
                            </tr>
                            <tr>
                                <th class="label-cell" colspan="2">Nome</th>
                            </tr>
                            <tr>
                                <td class="data-cell" colspan="2"><?php echo htmlspecialchars($nome); ?></td>
                            </tr>
                            <tr>
                                <th class="label-cell" colspan="2">E-mail</th>
                            </tr>
                            <tr>
                                <td class="data-cell" colspan="2"><?php echo htmlspecialchars($email); ?></td>
                            </tr>
                        </table>
                        <br>
                        <a href="editar_perfil.php"><button class="edit-button">Editar Perfil</button></a>
                    </div>
                    <div id="linha"></div>
                    <br>
                </section>
            </main>
        </div>
    </div>
    <footer>
        <div>
            <p>&copy;Todos os direitos reservados aos artistas.</small> <br>
            <a href="sobre.html" class="sobre" style="text-decoration: none; color: white;">Sobre</a>
        </div>
    </footer>
</body>
</html>
