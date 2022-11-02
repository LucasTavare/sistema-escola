<?php

include 'include/conexao.php';

try{

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];
$tipo = $_POST['tipo'];

$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = 'SP';
$complemento = $_POST['complemento'];

$senha = sha1($nascimento);

$sql = "INSERT INTO tb_usuarios (nome,email,telefone,cpf,data_nascimento,senha,id_tipo)
VALUES
('$nome','$email','$telefone','$cpf','$nascimento','$senha','$tipo')";

$comando = $con -> prepare($sql);

$comando -> execute();

$dados = $comando->fetchALL(PDO::FETCH_ASSOC);

if($dados != null){

    session_start();

    $_SESSION['email']=$email;

    $retorno = array("retorno"=>"ok","mensagem"=>"Login efetuado com sucesso!");

}else{

    $retorno = array("retorno"=>"erro","mensagem"=>"Credenciais invalidas!!!");

}


$sql2 = "INSERT INTO tb_endereco (cep,rua,numero,bairro,cidade,estado,complemento,id_usuario)
VALUES 
('$cep','$rua','$numero','$bairro','$cidade','$estado','$complemento','$id') ";

$comando2 = $con -> prepare($sql2);

$comando2 -> execute();

$dados = $comando2->fetchALL(PDO::FETCH_ASSOC);

if($dados != null){


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