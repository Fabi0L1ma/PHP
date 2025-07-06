<?php

class conexao
{
    private $DNS = 'pgsql:host=localhost;dbname=db_crud';
    private $USERNAME = 'postgres';
    private $PASSWORD = '123456';


    public function conectar()
    {
        try {

            $conn = new PDO($this->DNS, $this->USERNAME, $this->PASSWORD);

            return $conn;
            
        } catch (PDOException $e) {
            echo 'error' . $e->getMessage();
        }
    }
}
