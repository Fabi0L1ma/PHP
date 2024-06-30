<?php 
    class Pessoa{

        public $nome = null;

        function __construct($nome){
            $this->nome = $nome;
        }

        function __destruct(){
            echo "Objeto Removido!";
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        } 

        function correr(){
            return $this->nome . " está correndo!";
        }
    }

    $pessoa = new Pessoa("Fabio");
 
    echo $pessoa->correr();

    echo "<br>";

    //unset($pessoa);

?>