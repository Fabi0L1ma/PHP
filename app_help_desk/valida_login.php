<?php

    session_start();    

    $usuario_autenticado = false; // VERIFICA SE A AUTENTICACAO FOI REALIZADA
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'adm' , 2 => 'user');

    $usuarios = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
    );

    foreach($usuarios as $user){

        if($_POST['email'] == $user['email'] and $_POST['senha'] == $user['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado == true){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');  // REDIRECIONA PARA PAGINA DESEJADA
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro'); // REDIRECIONA PARA PAGINA DESEJADA
    }
?>
