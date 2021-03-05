<?php

namespace Biblioteca;

interface Publicacao
{
    function getTitulo();

    function setTitulo($titulo);

    function getAutor();

    function setAutor($autor);

    function getTotPaginas();

    function setTotPaginas($totPaginas);

    function getPagAtual();

    function setPagAtual($pagAtual);

    function getAberto();

    function setAberto($aberto);

    function getLeitor();

    function setLeitor($leitor);

    function detalhes();

    function abrir();

    function fechar();

    function folhear();

    function avancarPag();

    function voltarPag();
}