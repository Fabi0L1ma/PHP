<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        /*
        $registros = array( array('Noticia' => 'Noticia 1', 'Conteudo' => 'Conteudo 1'),
                            array('Noticia' => 'Noticia 2', 'Conteudo' => 'Conteudo 2'),
                            array('Noticia' => 'Noticia 3', 'Conteudo' => 'Conteudo 3'),
                            array('Noticia' => 'Noticia 4', 'Conteudo' => 'Conteudo 4'));

        $i = 0;

        while($i < count($registros)){
            echo $registros[$i]['Conteudo'] . '<br>';
            echo $registros[$i]['Noticia'];
            echo '<hr>';

            $i++;
        }
        */

        /*
        $itens = array('Cadeira', 'Mesa', 'Toalha', 'Sofá');

        echo 'Lista de Itens: <br>';
        foreach($itens as $item){

            echo $item . '<br>';
        }

        echo '<hr>';

        foreach($itens as $index => $item){
            
            if($item == 'Mesa'){
                echo $index . ': ' . $item . ' Esta com 25% de Desconto! <br>';
            }
            echo $index . ': ' . $item . '<br>';
        }
        */

        $lista_funcionarios = array(
            array('Nome' => 'Joao', 'Salario' => 2500, 'Data_nascimento' => '13/12/2000'),
            array('Nome' => 'Maria', 'Salario' => 3500),
            array('Nome' => 'Jose', 'Salario' => 1500));

        foreach($lista_funcionarios as  $funcionario){
            foreach($funcionario as $key => $info){
                echo $key . ': ' . $info . '<br>';
            }
            echo '<hr>';
        }
    
    ?>
    
</body>
</html>