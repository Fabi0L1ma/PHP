<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $lista_coisas = [];

        //COLOCANDO UMA ARRY DENTRO DE OUTRO
        $lista_coisas['fruta'] = array(1 => 'Banana', 2 => 'Uva', 3 => 'Manga', 4 => 'Melancia', 5 => 'Morango');

        $lista_coisas['pessoa'] = array(1 => 'Jãoo', 2 => 'José', 3 => 'Maria');

        echo '<pre>';
            print_r($lista_coisas);
        echo '</pre>';

        echo '<hr>';

        echo $lista_coisas['fruta'][5] . '<br>';
        echo $lista_coisas['pessoa'][3];
    ?>  
    
</body>
</html>