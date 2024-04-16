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
        $vetor = ['String', 'Integer', 'Double'];

        $resp = is_array($vetor); // INDICA SE É UM ARRAY

        if($resp != null){
            echo 'É array!';
        }else{
            echo 'Não é array!';
        }
        */

        /*
        $array = array(1 => 'a', 7 => 'b', 18 => 'c');
        
        echo '<pre>';
        print_r($array);
        echo '</pre> <hr>';

        $chaves_array = array_keys($array); // INDICA AS CHAVES DO ARRAY

        echo '<pre>';
        print_r($chaves_array);
        echo '</pre> <hr>';
        */

        /*
        $vetor = ['String', 'Integer', 'Double'];

        echo '<pre>';
            print_r($vetor);
        echo '</pre> <hr>';

        sort($vetor); // ORDENA O ARRAY SEM PRESERVAR OS INDICES

        //asort($vetor); // ORDENA O ARRAY SEM PRESEVAR OS INDICES
        
        echo '<pre>';
            print_r($vetor);
            echo count($vetor); // CONTA A QUANTIDADE DE ITENS NO ARRAY 
        echo '</pre> <hr>';
        */

        $array1 = array('Windows', 'Linux');
        $array2 = array('IOS', 'Android');
        $array3 = array('Café');

        $novoArray = array_merge($array1, $array2, $array3); // JUNTAS OS ARRAYS 

        echo '<pre>';
            print_r($novoArray);
        echo '</pre>';

    
    ?>
    
</body>
</html>