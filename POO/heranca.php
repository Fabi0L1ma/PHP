<?php 

    class Veiculo{
        
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo "Acelerar";
        }

        function freiar(){
            echo "Freiar";
        }
        
    }

    class Carro extends Veiculo{

        public $teto_solar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrir_teto_Solar(){
            echo "Abrir teto solar";
        }

        function alterarPosicaoVolante(){
            echo "Alterar posição volante";
        }
    }


    class Moto extends Veiculo{

        public $contraPesoGuidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo "Empinar";
        }
    }


    $carro = new Carro("ABC1234", "BRANCO");
    $moto = new Moto("DEF5678", "PRETO");

    echo "<pre>";
    print_r($carro);
    echo "<pre>";

    echo "<pre>";
    print_r($moto);
    echo "<pre>";

    $carro->acelerar();

    echo "<br>";

    $moto->empinar();

    echo "<br>"; 

    $carro->freiar();

?>