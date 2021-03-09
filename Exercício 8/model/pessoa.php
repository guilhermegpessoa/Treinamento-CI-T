<?php 

namespace Biblioteca;

class Pessoa 
{
    private $nome;

    private $genero;

    private $idade;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function setNome($nome) 
    {
        $this->nome = $nome;
    }

    public function getGenero() 
    {
        return $this->genero;
    }

    public function setGenero($genero) 
    {
        $this->genero = $genero;
    }

    public function getIdade() 
    {
        return $this->idade;
    }

    public function setIdade($idade) 
    {
        $this->idade = $idade;
    }

    public function fazerAniversario() 
    {
        $this->idade += 1;
    }

}