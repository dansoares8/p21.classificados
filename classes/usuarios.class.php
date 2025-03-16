<?php 
class Usuarios{
    public function cadastrar($nome, $email, $senha, $telefone){

        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() == 0){

        } else {
            return false;
        }

    }   
}