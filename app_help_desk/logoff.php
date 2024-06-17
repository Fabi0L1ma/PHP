<?php 
    session_start();
    /*
    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

    // REMOVE INDICE DO ARRAY DE SESSÃO
    // unset() REMOVE POR INDICE 

    unset($_SESSION['x']); // REMOVE APENAS SE O INDICE EXISTIR

    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

    // DESTRUIR A VARIAVEL DE SESSÃO
    // session_destroy()

    session_destroy();

    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';
    */

    session_destroy();
    header('Location: index.php');
    
?>