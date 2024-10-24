<?php
session_start();
require_once "config.php";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["cpf"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Verificar se as senhas coincidem
    if ($new_password !== $confirm_password) {
        $error = "As senhas não coincidem.";
    } else {
        // Verificar se o CPF está correto
        $sql = "SELECT id FROM users WHERE cpf = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $cpf);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Atualizar a senha
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $update_sql = "UPDATE users SET password = ? WHERE cpf = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("ss", $hashed_password, $cpf);

            if ($update_stmt->execute()) {
                $success = "Senha alterada com sucesso.";
            } else {
                $error = "Erro ao atualizar a senha: " . $conn->error;
            }

            $update_stmt->close();
        } else {
            $error = "CPF não encontrado.";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="css/editar_perfil.css">
    <style>
        .form-container {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .form-container input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container button {
            background-color: #149CA5;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .form-container button:hover {
            background-color: #117B81;
        }
        .error, .success {
            color: white;
            text-align: center;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
        .error {
            background-color: #f44336;
        }
        .success {
            background-color: #4CAF50;
        }
        .back-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
            text-align: center;
            margin-top: 10px;
        }
        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Editar Perfil</h1>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="success"><?php echo $success; ?></div>
            <a href="login.php"><button class="back-button">Voltar ao Login</button></a>
        <?php else: ?>
            <form action="editar_perfil.php" method="POST">
                <input type="text" name="cpf" placeholder="Digite seu CPF" required>
                <input type="password" name="new_password" placeholder="Nova Senha" required>
                <input type="password" name="confirm_password" placeholder="Confirme a Nova Senha" required>
                <button type="submit">Atualizar Senha</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>

