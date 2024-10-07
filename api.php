<?php
// api/users.php
header("Content-Type: application/json");
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {

    // Lógica para cadastrar um usuário
    $data = json_decode(file_get_contents("php://input"), true);
    //conectar com o banco de dados 
    $dao =  UsuarioDAO();
    $dao->addUser($data);
    
    

} elseif ($method === 'GET') {
    // Lógica para listar usuários
}

?>