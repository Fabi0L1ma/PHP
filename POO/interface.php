<?php 

    interface EquipamentoEletronicoInterface{
        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface{
        
        public function abrirPorta(){
            echo "Abrir a Porta";
        }

        public function ligar(){
            echo "Ligar";
        }

        public function desligar(){
            echo "Desligar";
        }
    }

    class TV implements EquipamentoEletronicoInterface{
       
        public function trocarCanal(){
            echo "Trocar Canal";
        }

        public function ligar(){
            echo "Ligar";
        }

        public function desligar(){
            echo "Desligar";
        }
    }

    $geladeira = new Geladeira();
    $tv = new TV();

    //--------------------------------


    interface MamiferoInterface{
        public function respirar();
    }

    interface TerrestreInterface{
        public function andar();
    }

    interface AquaticoInterface{
        public function nadar();
    }


    class Humano implements MamiferoInterface, TerrestreInterface{
        
        public function respirar(){
            echo "Respirar";
        }

        public function andar(){
            echo "Andar";
        }

        public function conversar(){
            echo "Conversando";
        }
    }

    class Baleia implements AquaticoInterface, MamiferoInterface{

        public function respirar(){
            echo "Respiar";
        }

        public function nadar(){
            echo "Nadar";
        }

        protected function esguichar(){
            echo "Esguichar";
        }
    }

    $humano = new Humano();
    $baleia = new Baleia();


    // ----------------------------------

    interface AnimalInterface{
        public function comer();
    }

    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    class Papagaio implements AveInterface{

        public function voar(){
            echo "Voar";
        }

        public function comer(){
            echo "Comer";
        }  
    }

?>