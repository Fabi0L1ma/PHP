<?php 

    $dns = "mysql:host=localhost;dbname=php_com_pdo";
    $usuario = "root";
    $senha = "";

    try{
        $conexao = new PDO($dns, $usuario, $senha);

        $query = '
            CREATE TABLE IF NOT EXISTS tb_usuarios(
                id int primary key not null auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(50) not null);'
        ;

        $retorno = $conexao->exec($query);

        echo $retorno;

    }catch(PDOException $e){
        echo "ERRO: " . $e->getCode() . " Mensagem: " . $e->getMessage();
    }

?>