<?php 
require_once 'conexao.php';
require_once 'usuario_model.php';


class UsuarioDAO {

   function addUser(UsuarioModel $usuario){
        $conexao = Conexao->getConexao();
        $stmt = $conexao->prepare("INSERT INTO usuarios (nome, admin, senha) values (:nome,'N',:senha) ");
        $stmt->prepare();
        $stmt->bindValue('nome',usuario->nome);
        $stmt->bindValue('nome',usuario->senhas);
        $stmt->execute();
    }

}

