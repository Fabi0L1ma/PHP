<?php

    $dns = "mysql:host=localhost;dbname=php_com_pdo";
    $usuario = "root";
    $senha = "";

    try{
        $conexao = new PDO($dns, $usuario, $senha);

        $query = '
            INSERT INTO tb_usuarios(nome, email, senha)
                VALUES("Fabio", "fabio@gmail.com", "123456");'
        ;

        $retorno = $conexao->exec($query);

        $query = '
            INSERT INTO tb_usuarios(nome, email, senha)
                VALUES("Alice", "alice@gmail.com", "ABCDE");'
        ;

        $retorno = $conexao->exec($query);

        $query = '
            INSERT INTO tb_usuarios(nome, email, senha)
                VALUES("Francisco", "francisco@gmail.com", "123ABC");'
        ;

        $retorno = $conexao->exec($query);

        /*
        $query = '
            DELETE FROM tb_usuarios;';
        
        $retorno = $conexao->exec($query);
        */
        
        echo $retorno;

    }catch(PDOException $e){
        echo "ERRO: " . $e->getCode() . " Mensagem: " . $e->getMessage();
    }
?>