<?php
    include 'include/conexao.php';

    try{

        $pesquisa = $_POST['pesquisar'];

        $sql = "SELECT * FROM tb_usuarios WHERE nome LIKE '%$pesquisar%' OR cpf LIKE '%$pesquisar%' ";
        
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