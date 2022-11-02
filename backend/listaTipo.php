<?php
    include 'include/conexao.php';

    try{
        $sql = "SELECT id,tipo FROM tb_tipo";
        
        $comando = $con->prepare($sql);

        $comando -> execute();

        $retorno = $comando ->fetchAll(pdo::FETCH_ASSOC);

        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        echo $json;

    }catch(PDOException $erro){
        $retorno = array(
            'retorno' => 'erro',
            'Mensagem'=> $erro->getMessage());
            $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    
    
            echo $json;
    }
?>