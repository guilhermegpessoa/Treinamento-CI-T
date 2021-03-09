<?php

namespace Biblioteca;

interface Publicacao
{
    function detalhes();

    function abrir();

    function fechar();

    function folhear();

    function avancarPag();

    function voltarPag();
}