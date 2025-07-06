<?php

include 'Conexao.php';

class Pessoa
{
    private $nm_pessoa;
    private $email_pessoa;
    private $nu_pessoa;
    private $senha_pessoa;
    private Conexao $conn;

    public function __construct($nome, $email, $celular, $senha)
    {
        $this->nm_pessoa = $nome;
        $this->email_pessoa = $email;
        $this->nu_pessoa = $celular;
        $this->senha_pessoa = $senha;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function cadastrar()
    {
        $conn = $this->conn->conectar();

        $query = "
            INSERT INTO pessoa(mm_pessoa, email_pessoa, nu_pessoa, senha_pesssoa)
                VALUES(:nome, :email, :celular, :senha);
        ";

        $stmt = $conn->prepare($query);

        $stmt->bindValue(':nome', $this->nm_pessoa);
        $stmt->bindValue(':nome', $this->email_pessoa);
        $stmt->bindValue(':nome', $this->nu_pessoa);
        $stmt->bindValue(':nome', $this->senha_pessoa);

        $stmt->execute();
    }
}