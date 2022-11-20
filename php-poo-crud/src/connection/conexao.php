<?php 

function abrirConexao (): PDO
// {
//     $servidor = 'localhost';
//     $usuario = 'root';
//     $senha = '1234';
//     $banco = 'db_sistema';

//     $conexao = new PDO("mysql:host={$servidor};dbname={$banco}", $usuario, $senha);

//     return $conexao;
// }
{
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'APOcalipisi@66';
    $banco = 'db_sistema';

    $conexao = new PDO("mysql:host={$servidor};dbname={$banco}", $usuario, $senha);

    return $conexao;
}