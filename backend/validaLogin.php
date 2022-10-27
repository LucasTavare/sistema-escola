<?php

    include 'include/conexao.php';

    try{
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT email,senha FROM tb_login WHERE email='$email' AND BINARY senha = '$senha'";

        $comando = $con->prepare($sql);

        $comando -> execute();

        $dados = $comando->fetchALL(PDO::FETCH_ASSOC);

        if($dados != null){

            session_start();

            $_SESSION['email']=$email;

            $retorno = array("retorno"=>"ok","mensagm"=>"Login efetuado com sucesso!");

        }else{

            $retorno = array("retorno"=>"erro","mensagm"=>"Credenciais invalidas!!!");

        }

    }catch(PDOException $e){

        $retorno = array("retorno"=>"erro","mensagem"=>$e->getMessage());

    }

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;

    $con=null;

?>