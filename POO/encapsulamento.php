<?php 

    class Pai{
        
        private $nome = "Fancisco";
        protected $sobrenome = "Lima";
        public $humor = "Feliz";
        
        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        private function executarMania(){
            echo "Assobiar";
        }

        protected function responder(){
            echo "Oi"; 
        }

        public function executarAcao(){
            $x = rand(1, 10);

            if($x >= 1 && $x <= 8){
                $this->responder();
            }else{
                $this->executarMania();
            }
        }
    }

    class Filho extends Pai{

        public function __construct(){
            echo "<pre>";
            print_r(get_class_methods($this)); 
            echo "<pre>";
        }

        public function executarMania(){
            echo "Cantar";
        }

        protected function responder(){
            echo "Ola";
        }

        public function x(){
            $this->executarMania();
        }
    }

    $filho = new Filho();

    echo "<pre>";
    print_r($filho);
    echo "<pre>";

    $filho->executarAcao();
    echo "<br>";
    $filho->x();


?>