<?php 

    $dns = "mysql:host=localhost;dbname=php_com_pdo";
    $usuario = "root";
    $senha = "";

    try{
        $conexao = new PDO($dns, $usuario, $senha);

        $query = '
            SELECT * FROM tb_usuarios;'
        ;

        $stmt = $conexao->query($query);

        $lista = $stmt->fetchAll(PDO::FETCH_OBJ); // RETORNA TODOS REGISTROS DA CONSULTA
        
        // PDO::FETCH_ASSOC - RETORNA SO OS INDICES ASSOCIATIVOS
        // PDO::FETCH_OBJ - RETORNA O ARRAY COMO OBJETOS

        echo "<pre>";
        print_r($lista);
        echo "<pre>";

        echo $lista[1]->nome; // RECUPERA O NOME DA PESSOA DENTRO DO ARRAY OBJ

    }catch(PDOException $e){
        echo "ERRO: " . $e->getCode() . " Mensagem: " . $e->getMessage();
    }

?>