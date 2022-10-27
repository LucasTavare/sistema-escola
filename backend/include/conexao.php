<?php  

define('LOCAL', 'localhost');
define('USER', 'root');
define('SENHA', '');
define('BANCO', 'db_escola');

try {
    $con = new PDO("mysql:host=".LOCAL.";dbname=".BANCO, USER, SENHA);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    $retorno = array("retorno"=>"erro","mensagem"=>$e->getMessage());
    $json = json_encode($retorno,JSON_UNESCAPED_UNICODE);
    echo $json;
    exit;
  }

?>