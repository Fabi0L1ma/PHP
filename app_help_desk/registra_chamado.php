<?php 

    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']); // SUBSTITUI O # POR -
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; // PHP_EOL => PULA LINHA

    $arquivo = fopen('arquivo.txt', 'a'); // ABRE UM ARQUIVO PARA ESCRITA

    fwrite($arquivo, $texto); // ESCREVE NO ARQUIVO

    fclose($arquivo); // FECHA O ARQUIVO

    header('Location: abrir_chamado.php');
?>