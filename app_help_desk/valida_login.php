<?php 
    
    session_start(); // ANTES DE QUALQUER IMPRESSAO DE DADOS/ ESSE METODO PROTEGE PAGINAS RESTRITAS QUE SO PODEM SER ACESSADAS COM DADOS CADASTRADOS (EX: LOGIN E SENHA)

    print_r($_SESSION);
    echo "<hr>";

    $usuario_autenticado = false;

    $usuarios = array(array('email' => 'adm@teste.com', 'senha' => 123456),
    array('email' => 'user@teste.com', 'senha' => 'abcd'));

    foreach($usuarios as $u){
        if($u['email'] == $_POST['email'] && $u['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado == true){
        echo "Usuario Autenticado";
        $_SESSION['autenticado'] = 'SIM';
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro'); // FORCA O REDIRECIONAMENTO DA PAGINA 
    }


?>