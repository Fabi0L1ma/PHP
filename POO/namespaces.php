<?php 

    namespace A;

    class Cliente implements \B\CadastroInterface{
        
        public $nome = "Fabio";

        public function __construct(){
            echo "<pre>";
            print_r(get_class_methods($this));
            echo "<pre>";
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function salvar(){
            echo "Salvar";
        }

        public function remover(){
            echo "Remover";
        }
    }

    interface CadastroInterface{
        public function salvar();
    }

    // ----------------------------------------

    namespace B;

    class Cliente implements \A\CadastroInterface{

        public $nome = "Ana";

        public function __construct(){
            echo "<pre>";
            print_r(get_class_methods($this));
            echo "<pre>";
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function salvar(){
            echo "Salvar";
        }

        public function remover(){
            echo "Remover";
        }
    }

    interface CadastroInterface{
        public function remover();
    }

    
    $c= new \B\Cliente();

    echo $c->__get("nome");




?>