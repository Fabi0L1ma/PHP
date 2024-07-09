<?php 

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){ // NÃO PODEM SER VAZIOS

        $dns = "mysql:host=localhost;dbname=php_com_pdo";
        $usuario = "root";
        $senha =  "";
    
        try{
            $conexao = new PDO($dns, $usuario, $senha);

            $query = "
                SELECT * FROM tb_usuarios WHERE email = :usuario AND senha = :senha;
            "; 

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(":usuario", $_POST['usuario']); // REMOVE QUALQUER INJEÇÃO DE SQL MALDOSA PASSADO NO FORMULARIO
            $stmt->bindValue("senha", $_POST['senha']);

            $stmt->execute();

            $user = $stmt->fetch();

            echo "<pre>";
            print_r($user);
            echo "<pre>";

        }catch(PDOException $e){
            echo "Erro: " . $e->getCode() . " Mensagem: " . $e->getMessage();
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        .box-form{
            background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%);
            border: 1px solid black;
            border-radius: 10px;
            width: 300px;
            height: 200px;
            margin: 80px auto;

            padding: 20px;

            position: relative;
        }

        form{
            display: flex;
            flex-direction: column;
            gap: 15px;

            position: absolute;
            top: 35px;
        }

        input{
            padding: 10px;
            border-radius: 10px;
        }

        button{
            background: #1E90FF;
            color: white;
            font-weight: bolder;
            padding: 15px;
            width: 300px;
            cursor: pointer;
            border-radius: 10px;
            border: none;
        }
    </style>


</head>

<body>

    <div class="box-form">
        <form method="post" action="sql_injection.php">
            <input type="text" name="usuario" id="" placeholder="Usuário">
            <input type="password" name="senha" id="" placeholder="Senha">
            <button type="submit">ENVIAR</button>
        </form>
    </div>
 
    
</body>
</html>