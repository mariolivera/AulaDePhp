<?php
//criando array alunos
$alunos = [];

// conectar ao banco de dados do mysql
// e mostrando os dados vindos do mysql

//add array [] = [] dentro de array, quando se se usa []=[] o arry da direita vai ser anexado ao da esquerda.
$alunos[] =[
    'nome'=> 'chiquim',
    'cidade' => 'caucaia',
    'matricula' => '20',
];

$alunos[] = [
    'nome' => 'chivas',
    'cidade' => 'fortaleza',
    'matricula' => '22',
];
$alunos[] = [
    'nome' => 'chica',
    'cidade' => 'caucaia',
    'matricula' => '24',
];
include'tabela.php'; 
?>