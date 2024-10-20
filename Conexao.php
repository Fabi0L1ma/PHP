<?php

    class Conexao{
        private $host = "localhost";
        private $db = "db_tarefas";
        private $user = "root";
        private $psw = "";

        public function conectar(){
            try{

                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->db",
                    "$this->user",
                    "$this->psw"
                );

                return $conexao;

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }

?>