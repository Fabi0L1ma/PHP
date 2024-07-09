<?php 

    $dns = "mysql:host=localhost;dbname=php_com_pdo";
    $usuario = "root";
    $senha = "";

    try{
        $conexao = new PDO($dns, $usuario, $senha);

        $query = '
            SELECT * FROM tb_usuarios
            WHERE id = 15;'
        ;

        $stmt = $conexao->query($query);

        $user = $stmt->fetch(PDO::FETCH_OBJ); // RETORNA APENAS UM REGISTRO (FETCH)

        echo "<pre>";
        print_r($user);
        echo "<pre>";

        echo $user->nome; // RECUPERA O NOME DA PESSOA DENTRO DO ARRAY OBJ

    }catch(PDOException $e){
        echo "ERRO: " . $e->getCode() . " Mensagem: " . $e->getMessage();
    }


?>