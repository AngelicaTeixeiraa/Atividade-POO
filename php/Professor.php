<?php class Professor
{
    private $nome;
    private $cpf;
    private $dataNasc;
    private $email;
    private $telefone;
    private $materia;

    // Constructor
    public function __construct()
    {
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;
    }
    public function setMateria($materia)
    {
        $this->materia = $materia;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function getDataNasc()
    {
        return $this->dataNasc;
    }
    public function getMateria()
    {
        return $this->materia;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }


    function imprimir()
    {
        echo "Nome : " . $this->nome;
        echo "<br>CPF : " . $this->cpf;
        echo "<br>Data Nasc : " . $this->dataNasc;
        echo "<br>Matéria: " . $this->materia;
        echo "<br>Email : " . $this->email;
        echo "<br>Telefone : " . $this->telefone;
    }
}
