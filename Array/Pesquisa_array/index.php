<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $lista_frutas = array('Morango', 'Maça', 'Uva', 'Banana', 'Laranja');

        echo 'Array Normal';

        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';

        $existe = in_array('Maça', $lista_frutas); // VERRIFICA SE OBJETO EXISTE DENTRO DO ARRAY (RETORNA TRUE OU FALSE)

        
        if($existe == true){
            echo "Objeto encontrado na lista! <br>";
        }else{
            echo "Objeto não encontrado na lista! <br>";
        }

        // echo array_search('Uva', $lista_frutas); // RETORNA O INDICE DO VALOR PESQUISADO;

        echo '<hr>';

        echo 'Array Multidimensional';

        $lista_coisas = array('frutas' => $lista_frutas,
                              'pessoas' => ['Joao', 'Maria']);

        echo '<pre>';
            print_r($lista_coisas);
        echo '</pre>';

        $existe2 = in_array('Uva', $lista_coisas['frutas']);

        if($existe2 != null){
            echo 'Obejeto encontardo!';
        }else{
            echo 'Objeto não encontrado!';
        }
    ?>
    
</body>
</html>