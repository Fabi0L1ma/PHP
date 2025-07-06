<?php

include 'conexao.php';

$id = $_GET['id'] ?? null;

$query = "
    DELETE FROM pessoa
        WHERE id = :id;
";

$stmt = $conn->prepare($query);

$stmt->bindValue(':id', $id);

$stmt->execute();

header('Location: listagem.php');