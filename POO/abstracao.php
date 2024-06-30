<?php  
    Class Funcionario{

        private $nome = null;
        private $telefone = null;
        private $qtdFilhos = null;
        private $cargo = null;
        private $salario = null;

        //getters __setters (overloading / sobrecarga)
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;

        }

        /*

        // getters e setters
 
        function getNome(){
            return $this->nome;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function getTelefone(){
            return $this->telefone;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function getQtdFilhos(){
            return $this->qtdFilhos;
        }

        function setQtdFilhos($qtd){
            $this->qtdFilhos = $qtd;
        }

        */

        function resumoCad(){
            return "Dados do Cadastro <br><br>" .
            "Nome: $this->nome <br>" .
            "Telefone: $this->telefone <br>" . 
            "QTD filhos: $this->qtdFilhos <br>".
            "Cargo: $this->cargo <br>" .
            "Salario: R$$this->salario <br>";
        }

        function addFilho($qtd){
            $this->qtdFilhos += $qtd;
        }
    }

    $x = new Funcionario();

    $x->__set("nome", "Carlos");
    $x->__set("telefone", "(71) 98735-9090");
    $x->__set("qtdFilhos", 4);
    $x->__set("cargo", "Programador");
    $x->__set("salario", 3500);

    echo $x->resumoCad();

?>