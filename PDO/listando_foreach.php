<?php 

    $dns = "mysql:host=localhost;dbname=php_com_pdo";
    $usuario = "root";
    $senha = "";

    try{
        $conexao = new PDO($dns, $usuario, $senha);

        $query = '
            SELECT * FROM tb_usuarios;'
        ;

       // $stmt = $conexao->query($query);

        foreach($conexao->query($query) as $key => $value){
            echo "<pre>";
            print_r($value);
            echo "</pre>";
            echo "<hr>";

        }

        //$lista = $stmt->fetchAll(PDO::FETCH_ASSOC); // UTILIZAR INDICES ASSOCIATIVOS
        /*
        foreach($lista as $key => $values){
            echo $values["nome"];
            echo "<hr>";
        }
        */

    }catch(PDOException $e){
        echo "ERRO: " . $e->getCode() . " Mensagem: " . $e->getMessage();
    }

?>