<?php
// api/users.php
header("Content-Type: application/json");
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    // Lógica para cadastrar um usuário
    $data = json_decode(file_get_contents("php://input"), true);
    // Validar e armazenar os dados em um banco de dados
    // Retornar resposta
} elseif ($method === 'GET') {
    // Lógica para listar usuários
}

?>