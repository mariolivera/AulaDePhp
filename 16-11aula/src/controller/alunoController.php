<?php
//defindo que nesse arquivo será trabalhado os tipos de dados
declare(strict_types=1);


//////////////////////////////////////////////////////////////////////////////////////
// aqui são exemplos para ser usados em projetos futuros
// function soma(float $n1, float $n2):float
// {
//     return $n1 + $n2;
// }
// function welcome(string $nome) : string
// {
//     return "Bem vindo{$nome}"; 
// }
// function concat(int $n1, int $n2): string 
// {
//     return (string) $n1 . (string) $n2;
// }
/////////////////////////////////////////////////////////////////////////////////////


function inicio() : void //estamos declarando que essa função "nao tem retorno"
{
include '../src/views/inicio.phtml';
}

function listar(): void
{
include '../src/views/listar.phtml';
}

function novo(): void
{
include '../src/views/novo.phtml';
}


?>