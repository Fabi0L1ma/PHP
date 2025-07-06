<?php

include 'conexao.php';

$id = $_POST['id'] ?? null;
$nome = $_POST['nm_pessoa'] ?? null;
$email = $_POST['email_pessoa'] ?? null;
$celular = $_POST['nu_pessoa'] ?? null;
$senha = $_POST['senha_pessoa'] ?? null;

if (empty($nome) || empty($email) || empty($senha)) {
    throw new  Exception('Cammpos não preenchidos!');
}

if (empty($id)) {
    $query = "
    INSERT INTO pessoa(nm_pessoa, email_pessoa, nu_pessoa, senha_pessoa)
        VALUES(:nome, :email, :celular, :senha);

    ";
}
else
{
    var_dump($id);
    $query = "
        UPDATE pessoa
        SET nm_pessoa = :nome, email_pessoa = :email, nu_pessoa = :celular, senha_pessoa = :senha
        WHERE id = :id;
    ";
}

$stmt = $conn->prepare($query);

if(!empty($id))
{
    $stmt->bindValue(':id', $id);
}

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':celular', $celular);
$stmt->bindValue(':senha', $senha);

$user = $stmt->execute();

if ($user) {
    header('Location: listagem.php');
}
