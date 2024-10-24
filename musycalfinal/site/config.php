<?php
// Inicia a sessão se não estiver iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Configurações de conexão com o banco de dados
$servername = getenv('DB_SERVER') ?: 'localhost';
$username = getenv('DB_USERNAME') ?: 'yago'; // Nome de usuário do banco de dados
$password = getenv('DB_PASSWORD') ?: '123456';
$dbname = getenv('DB_NAME') ?: 'login'; // Nome do banco de dados

// Cria conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Falha na Conexão: " . $conn->connect_error);
}

// Define o conjunto de caracteres da conexão
if (!$conn->set_charset("utf8")) {
    printf("Erro ao definir charset: %s\n", $conn->error);
    exit();
}
?>
