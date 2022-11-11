<?php

$mes = 3;

$nome = 'chiquim';
$saldo = 1000.00;


const SENHA = '1234';

echo match ($mes) {
    1 => 'janeiro',
    2 => 'fevereiro',
    3 => 'março',
    4 => 'abril',
    5 => 'maio',
    6 => 'junho',
    7 => 'julho',
    8 => 'agosto',
    9 => 'setembro',
    10 => 'outubro',
    11 => 'novembro',
    12 => 'dezembro',
    default => 'mes invalido',
};
