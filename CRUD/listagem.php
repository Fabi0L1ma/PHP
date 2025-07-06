<?php
include 'conexao.php';

if (isset($_POST['buscar']) and !empty($_POST['buscar'])) {

    $buscar = $_POST['buscar'] ?? null;

    $query = "
        SELECT * FROM pessoa
            WHERE nm_pessoa ilike :buscar;
    ";
} 
else 
{
    $query = "
        SELECT * FROM pessoa;
    ";
}

$stmt = $conn->prepare($query);

if (!empty($buscar)) {
    $stmt->bindValue(':buscar', $buscar);
}

$stmt->execute();

$pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Listagem</title>
</head>

<body>

    <div>
        <a class="bt-paginacao" href="index.php">⬅️ Voltar</a>
    </div>

    <form action="listagem.php" method="post">
        <div class="box-buscar">

            <input type="text" name="buscar" id="" class="input-buscar">
            <button class="bt-buscar" type="submit">Buscar</button>

        </div>
    </form>

    <table class="tabela">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Senha</th>
            <th>Atualizar</th>
            <th>Deletar</th>
        </tr>
        <?php foreach ($pessoas as $pessoa) { ?>
            <tr>
                <td><?= $pessoa['nm_pessoa'] ?? null ?></td>
                <td><?= $pessoa['email_pessoa'] ?? null ?></td>
                <td><?= $pessoa['nu_pessoa'] ?? null ?></td>
                <td><?= $pessoa['senha_pessoa'] ?? null ?></td>
                <td><a href="atualizar.php?metodo=atualizar&id=<?= $pessoa['id'] ?>">✏️</a></td>
                <td><a href="deletar.php?id=<?= $pessoa['id'] ?>">🗑️</a></td>
            </tr>
        <?php } ?>
    </table>



</body>

</html>