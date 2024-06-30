<?php 

    class MinhaExceptionCustomizado extends Exception{
        
        private $erro = "";
        
        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizado(){
            return $this->erro;
        }
    }

    try{
        throw new MinhaExceptionCustomizado("Esse é um erro de teste");

    }catch(MinhaExceptionCustomizado $e){
        echo $e->exibirMensagemErroCustomizado();
    }

?>