<?php

    include 'include/conexao.php';

    try{
        
        $email = $_POST['email'];
        $senha = sha1($_POST['senha']);

        $sql = "SELECT email,senha FROM tb_usuarios WHERE email='$email' AND BINARY senha = '$senha'";

        $comando = $con->prepare($sql);

        $comando -> execute();

        $dados = $comando->fetchALL(PDO::FETCH_ASSOC);

        if($dados != null){

            session_start();

            $_SESSION['email']=$email;

            $retorno = array("retorno"=>"ok","mensagem"=>"Login efetuado com sucesso!");

        }else{

            $retorno = array("retorno"=>"erro","mensagem"=>"Credenciais invalidas!!!");

        }

    }catch(PDOException $e){

        $retorno = array("retorno"=>"erro","mensagem"=>$e->getMessage());

    }

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;

    $con=null;

?>