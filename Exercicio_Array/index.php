<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $listaSorteio = [];

        for($i = 0; $i < 6; $i++){
            $numeroSorteado = rand(1, 60);

            if(!in_array($numeroSorteado, $listaSorteio)){
                $listaSorteio[$i] = $numeroSorteado; 
            }else{
                $i--;
            }
        } 

        foreach($listaSorteio as $lista){
            echo $lista . '  ';
        }
    ?>
    
</body>
</html>