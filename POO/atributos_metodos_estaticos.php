<?php 

    class Exemplo{

        public static $atributo1 = "Atributo Estático";
        public $atributo2 = "Atributo Normal";

        public static function metodo1(){
            echo "Eu sou um método estático";
        }

        public function metodo2(){
            echo "Eu sou um método normal";
        }
    }

    $x = new Exemplo();

    Exemplo::metodo1();  // PERMITE ACESSAR OS ATRIBUTOS ESTATICOS
    echo "<br>";
    echo Exemplo::$atributo1;
    echo "<br>";

    //echo $x->atributo1;  // NÃO PERMITE ACESSA DESSA FORMA
    

?>