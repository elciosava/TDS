<?php
 //conectar com o banco de dados
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