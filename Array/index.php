<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

    <?php 

        $lista = ['Abacate', 'Morango', 'Uva', 'Melancia', 'Manga'];

        echo '<pre>'; // ORGANIZA OS ARRAYS
            print_r($lista);
        echo '</pre>';

        echo '<hr>';

        $lista[] = 'Abacaxi'; // ATRIBUIR NOVO VALOR

        echo '<pre>';
            print_r($lista);
        echo '</pre>';

        echo '<hr>';

        //INDICA A CHAVE DA CADA ELEMENTO DO ARRAY

        $lista = ['a' => 'Abacate',  
                  'b' => 'Morango',
                  'c' => 'Uva',
                  'd' => 'Melancia',
                  'e' => 'Manga'];

        $lista['g'] = 'jacá';
        
        echo '<pre>';
            print_r($lista);
        echo '</pre>';

        echo $lista['c'];

    ?>
    
</body>
</html>