<?php

include 'include/conexao.php';
include 'function.php';

try{

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$tipo = $_POST['tipo'];

$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = 'SP';
$complemento = $_POST['complemento'];

// $senha = implode('', array_reverse(explode('-', $nascimento)));
$senha = date('dmY', strtotime($nascimento));

$senha = sha1($senha);

$cpf = str_replace(".", "", $cpf);
$cpf = str_replace("-", "", $cpf);

$telefone = str_replace("(", "", $telefone);
$telefone = str_replace(")", "", $telefone);
$telefone = str_replace("-", "", $telefone);
$telefone = str_replace(" ", "", $telefone);

validaCampoVazio($nome,'nome');
validaCampoVazio($email,'email');
validaCampoVazio($telefone,'telefone');
validaCampoVazio($cpf,'cpf');
validaCampoVazio($nascimento,'nascimento');
validaCampoVazio($tipo,'tipo');

validaCampoVazio($cep,'cep');
validaCampoVazio($rua,'rua');
validaCampoVazio($numero,'numero');
validaCampoVazio($bairro,'bairro');
validaCampoVazio($cidade,'cidade');
validaCampoVazio($estado,'estado');


$sql = "INSERT INTO tb_usuarios (nome,email,telefone,cpf,data_nascimento,senha,id_tipo)
VALUES
('$nome','$email','$telefone','$cpf','$nascimento','$senha','$tipo')";

$comando = $con -> prepare($sql);

$comando -> execute();

$last_id = $con->lastInsertId();

$sql = "INSERT INTO tb_endereco (cep,rua,numero,bairro,cidade,estado,complemento,id_usuario) VALUES 
('$cep','$rua','$numero','$bairro','$cidade','$estado','$complemento',$last_id) ";

$comando = $con -> prepare($sql);

$comando -> execute();

$retorno = array("retorno"=>"ok","mensagem"=>"Usuario inserido com sucesso");

}catch(PDOException $e){
    $retorno = array("retorno"=>"erro","mensagem"=>$e->getMessage());
}

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;

    $con=null;


?>