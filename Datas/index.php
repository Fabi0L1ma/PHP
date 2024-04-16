<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $data_atual = date('d/m/Y H:i'); // PEGA A DATA DO SISTEMA

        echo 'Data Atual: ' . $data_atual . '<br>';
        
        echo date_default_timezone_get() . '<br>'; // PEGA O TAMIZONE DO SISTEMA
        
        date_default_timezone_set('America/Sao_Paulo'); // ALTERA A TIMEZONE COLOCANDO NO PAIS DESEJADO
        
        $data_atual = date('d/m/Y H:i');

        echo 'Data Atual: ' . $data_atual . '<br>';

        echo '<hr>';

        //CALCULO DE DATA

        echo 'Calculo de Datas: <br>';

        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';

        $calculoTempoSeg = strtotime($data_final) - strtotime($data_inicial); // TRANSFORMA A DATA EM SEG PARA CALCULAR

        $calculoPorDia = 24 * 60 * 60; // CALCULO PADRAO PRA CALCULAR DATAS EM DIAS 
        
        $diferencaPorDias = $calculoTempoSeg / $calculoPorDia;
        
        echo 'Data Inicial: ' . $data_inicial . '<br>';
        echo 'Data Final: ' . $data_final . '<br>';
        echo 'Diferenca de Dias: ' . $diferencaPorDias;

     ?>
    
</body>
</html>