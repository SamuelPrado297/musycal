<?php
session_start();
require_once "config.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cpf'], $_POST['password'])) {
    $cpf = $_POST['cpf'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE cpf = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Inicia a sessão e redireciona para a página protegida
            $_SESSION["loggedin"] = true;
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["cpf"] = $row["cpf"];
            header("Location: index.php");
            exit;
        } else {
            $error = "Usuário ou senha incorretos";
        }
    } else {
        $error = "Usuário ou senha incorretos";
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="cadastro.php" method="POST">
                <h1>Criar Conta</h1>
                <input type="text" name="name" maxlength="80" placeholder="Nome" required>
                <input type="email" name="email" maxlength="60" placeholder="Email" title="Digite um email válido (incluindo @)" required>
                <input type="text" name="cpf" placeholder="Digite seu CPF" maxlength="14" required>
                <input type="password" name="password" placeholder="Senha" required>
                <input type="password" name="confirm_password" placeholder="Confirme sua senha" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login.php" method="POST">
                <h1>Entrar</h1>
                <input type="text" name="cpf" placeholder="Digite seu CPF" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit">Entrar</button>
                <?php if ($error): ?>
                    <p class="error"><?php echo $error; ?></p>
                <?php endif; ?>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem-vindo de volta!</h1>
                    <p>Insira seus dados pessoais para usar todos os recursos do site.</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá, amigo!</h1>
                    <p>Ainda não é cliente? Registre-se agora mesmo clicando aqui!</p>
                    <button class="hidden" id="register">Cadastrar</button> 
                </div>
            </div>
        </div>
    </div>
    <script src="js/cadastro.js"></script>
</body>
</html>

