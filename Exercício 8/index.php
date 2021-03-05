<?php

require 'model/biblioteca.php';

use Biblioteca\Pessoa;
use Biblioteca\Livro;

$json = file_get_contents("pessoas.json");
$jsonPessoas = json_decode($json, true);

$i=0;
foreach ($jsonPessoas as $jsonPessoa) {
    $pessoas[] = new Pessoa($jsonPessoa['nome']);
    $pessoas[$i]->setGenero($jsonPessoa['genero']);
    $pessoas[$i]->setIdade($jsonPessoa['idade']);
    $i += 1;
}

$json = file_get_contents("livros.json");
$jsonLivros = json_decode($json, true);

$i=0;
foreach ($jsonLivros as $jsonLivro) {
    $livros[] = new Livro($jsonLivro['titulo']);
    $livros[$i]->setAutor($jsonLivro['autor']);
    $livros[$i]->setTotPaginas($jsonLivro['totPaginas']);
    $livros[$i]->setPagAtual($jsonLivro['pagAtual']);
    $livros[$i]->setAberto($jsonLivro['aberto']);
    $livros[$i]->setLeitor($jsonLivro['leitor']);
    $i += 1;
}

foreach ($livros as $livro) {
    $livro->abrir();
    $livro->folhear();
    $livro->detalhes();
    $livro->fechar();
}

