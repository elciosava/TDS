<?php

include 'conexao.php';

$id_cliente = $_POST['id_cliente'];
$nome_cliente = $_POST['nome_cliente'];
$email_cliente = $_POST['email_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];
$cidade_cliente = $_POST['cidade_cliente'];


$sql = "UPDATE saep_clientes 
            SET nome_cliente = :nome_cliente,
                email_cliente = :email_cliente,
                telefone_cliente = :telefone_cliente,
                cidade_cliente = :cidade_cliente
            WHERE id_cliente = :id_cliente";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(':id_cliente',$id_cliente);
$stmt->bindParam(':nome_cliente',$nome_cliente);
$stmt->bindParam(':email_cliente',$email_cliente);
$stmt->bindParam(':telefone_cliente',$telefone_cliente);
$stmt->bindParam(':cidade_cliente',$cidade_cliente);
$stmt->execute();

header("Location:cadastro_clientes.php");