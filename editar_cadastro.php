<?php
    include 'conexao.php';

    $id_cliente = $_GET['id_cliente'];

    $sql = "SELECT * FROM saep_clientes WHERE id_cliente = :id_cliente";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id_cliente',$id_cliente);
    $stmt->execute();

    $saep_clientes = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
            <h3>Cadastro de Clientes</h3>
            <form action="update.php" method="post">
                <input type="text" name="id_cliente" value="<?php echo $saep_clientes['id_cliente']; ?>">
                <label for="">Nome</label>
                <input type="text" name="nome_cliente" id="" value="<?php echo $saep_clientes['nome_cliente']; ?>">

                <label for="">E-mail</label>
                <input type="email" name="email_cliente" id="" value="<?php echo $saep_clientes['email_cliente']; ?>">

                <label for="">Contato</label>
                <input type="number" name="telefone_cliente" id="" value="<?php echo $saep_clientes['telefone_cliente']; ?>">

                <label for="">Cidade</label>
                <input type="text" name="cidade_cliente" id="" value="<?php echo $saep_clientes['cidade_cliente']; ?>">

                <button type="submit">Salvar</button>
                    
            </form>
        </div>
</body>
</html>