<?php 

namespace Biblioteca;

require 'model/interface.php';

use Biblioteca\Publicacao;

class Livro implements Publicacao
{
    private $titulo;

    private $autor;

    private $totPaginas;

    private $pagAtual;

    private $aberto;

    private $leitor;

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getTitulo() 
    {
        return $this->titulo;
    }

    public function setTitulo($titulo) 
    {
        $this->titulo = $titulo;
    }

    public function getAutor() 
    {
        return $this->autor;
    }

    public function setAutor($autor) 
    {
        $this->autor = $autor;
    }

    public function getTotPaginas() 
    {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas) 
    {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual() 
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual) 
    {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto() 
    {
        return $this->aberto;
    }

    public function setAberto($aberto) 
    {
        $this->aberto = $aberto;
    }

    public function getLeitor() 
    {
        return $this->leitor;
    }

    public function setLeitor($leitor) 
    {
        $this->leitor = $leitor;
    }

    public function detalhes() {
        echo 'Título: '.$this->titulo;
        echo '<br/>Autor: '.$this->autor;
        echo '<br/>Páginas: '.$this->totPaginas;
        echo '<br/>Página atual: '.$this->pagAtual;
        if ($this->aberto == true) {
            echo '<br/>Aberto: Sim';    
        } else {
            echo '<br/>Aberto: Não';   
        }
        echo '<br/>Leitor: '.$this->leitor;
        echo '<br/>';
    }

    public function abrir() {
        if ($this->aberto == true) {
            echo 'Livro já está aberto!<br/>';
        } else {
            $this->aberto = true;
            echo 'Livro aberto!<br/>';
        }
    }

    public function fechar() {
        if ($this->aberto == false) {
            echo 'Livro já está fechado!<br/>';
        } else {
            $this->aberto = false;
            echo 'Livro fechado!<br/><hr/>';
        }
    }

    public function folhear() {
        if ($this->aberto == true) {
            $this->pagAtual = rand(1, $this->totPaginas);
        } else {
            echo 'Não é possível folhear, o livro está fechado!<br/>';
        }
        
    }

    public function avancarPag() {
        if ($this->aberto == false) {
            echo 'Não é possível avançar, o livro está fechado!<br/>';
        } elseif ($this->pagAtual < $this->totPaginas) {
            $this->pagAtual += 1;
        } else {
            echo 'Você chegou ao final do livro!<br/>';
        }
        
    }

    public function voltarPag() {
        if ($this->aberto == false) {
            echo 'Não é possível voltar, o livro está fechado!<br/>';
        } elseif ($this->pagAtual > 1) {
            $this->pagAtual -= 1;
        } else {
            echo 'Você está no início do livro!<br/>';
        }
    }
} 