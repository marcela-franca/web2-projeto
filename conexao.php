<?php
// Autenticação do banco de dados
$servername = "localhost";
$username = "root";
$password = "Marcelas2@";  
$dbname = "autoescola";
$port = "3308";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

//  Retorna uma mensagem de sucesso
echo "Conexão bem-sucedida";
?>
