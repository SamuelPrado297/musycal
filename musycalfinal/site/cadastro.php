<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Verificar se as senhas coincidem
    if ($password !== $confirm_password) {
        echo "As senhas não coincidem. <a href='login.php'>Tente novamente</a>.";
        exit;
    }

    // Verificar se o CPF já está cadastrado
    $sql = "SELECT id FROM users WHERE cpf = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Este CPF já está cadastrado. <a href='login.php'>Tente novamente</a>.";
        exit;
    }

    $stmt->close();

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, cpf, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $cpf, $hashed_password);

    if ($stmt->execute()) {
        echo "Usuário criado com sucesso. <a href='login.php'>Faça login</a>.";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}
$conn->close();
?>

