<?php
function abriConexao() : PDO
{
    $servidor = 'localhost';
    $usuario = 'host';
    $senha = '1234';
    $banco = 'db_alunos';
    
    $conexao = new PDO("mysql:host={$servidor}; dbname={$banco}", $usuario, $senha);
    
    return $conexao;
}

?>