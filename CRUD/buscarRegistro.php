<?php

include 'conexao.php'; 

$buscar = $_POST['buscar'] ?? null;

if(empty($buscar))
{
    return;
}

$query = "
    SELECT * FROM pessoa
        WHERE nm_pessoa = :buscar
";

$stmt = $conn->prepare($query);



$stmt->execute();



