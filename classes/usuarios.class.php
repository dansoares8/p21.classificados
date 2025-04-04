<?php 
class Usuarios{
    public function cadastrar($nome, $email, $senha, $telefone){

        global $pdo;

        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() == 0){

            /* Aqui, adiciona o usuário no BD: */
            $sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, telefone = :telefone");
            
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->bindValue(":telefone", $telefone);
            $sql->execute();

            return true;

        } else {
            return false;
        }

    }

    public function login($email, $senha){
        global $pdo;

        /* Verificação de login: */

        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            /* Se achar, salvar o id do usuário na sessão */
            $dado = $sql->fetch();
            $_SESSION['cLogin'] =  $dado['id'];

            return true;
        } else {
            return false;
        }

    }












}
?>