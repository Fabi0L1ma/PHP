<?php
include 'conexao.php';

if(isset($_GET['metodo']) and $_GET['metodo'] == 'atualizar')
{
    $id = $_GET['id'] ?? null;

    $query = "
        SELECT * FROM pessoa
            WHERE id = :id;
    
    ";

    $stmt = $conn->prepare($query);

    $stmt->bindValue(':id', $id);

    $stmt->execute();

    $pessoa = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Atividade 1</title>
</head>
<body>

    <div>
        <a class="bt-paginacao" href="listagem.php">Próximo ➡️</a>
    </div>

    <form class="formulario" action="formulario.php" method="post">
        <input type="hidden" name="id" value="<?= $pessoa['id'] ?? null ?>">
        <div class="campos-formulario">
            <label for="">Nome (*): </label>
            <input type="text" name="nm_pessoa" id="" value="<?= $pessoa['nm_pessoa'] ?? null ?>">
        </div>
        <div class="campos-formulario">
            <label for="">Email (*): </label>
            <input type="email" name="email_pessoa" id="" value="<?= $pessoa['email_pessoa'] ?? null ?>">
        </div>
        <div class="campos-formulario">
            <label for="">Celular: </label>
            <input type="number" name="nu_pessoa" id="" value="<?= $pessoa['nu_pessoa'] ?? null ?>">
        </div>
        <div class="campos-formulario">
            <label for="">Senha (*): </label>
            <input type="password" name="senha_pessoa" id="" value="<?= $pessoa['senha_pessoa'] ?? null ?>">
        </div>
        <!-- 
            <div>
                <label for="">Confirmar senha (*): </label>
                <input type="password" name="" id="">
            </div>
        -->
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </form>

    
    
</body>
</html>