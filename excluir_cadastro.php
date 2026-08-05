<?php

//primeiro declarar 4 variáveis principais que são:
    $local = 'localhost';
    $banco = 'aline';
    $usuario = 'root';
    $senha = '';

    //tentamos conectar usando nossas variáveis 
    try{
        $conexao = new PDO("mysql:host=$local;dbname=$banco;",$usuario,$senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        echo "Deu ruim parça!" . $erro->getMessage();
    }

    $id_cliente = $_GET['id_cliente'];

    $sql = "DELETE FROM saep_clientes WHERE id_cliente = :id_cliente";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id_cliente',$id_cliente);
    $stmt->execute();

    
    header("Location:cadastro_clientes.php");
?>
