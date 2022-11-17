<?php

//$nome = 'xero verde'; // se a variaveu for criada fora da function ela fica fora da fuction para ela ser usada tem que estar dentro da fuction.

// function welcome(string|int $nome = ''): string //o mixed ela é uma pseudo fuction
// {
//      return "Bem Vindo {$nome}";
// }

// echo welcome();

function adicionar // aqui essa fuction fica aberta para poder cadastrar alunos por email ou por matricula ou por idade
(
    string $nome,
    null|string $matricula = null,
    ?int $idade = null,
    ?String $email = null,  //colocar a ? tonar esa linha null label.
): array 
{
    return 
    [
        'nome' => $nome,
        'e-mail' => $email,
        'idade' => $idade,
        'matricula' => $matricula,
    ];
}

adicionar('chiquim','123456', 34, 'chiquim@email.com');
adicionar('maria');
adicionar('zezim', null, 29);
adicionar('luiza',null,null,'luiza@email.com');

//named arguments PHP 8.0
adicionar('luiza', email:'luiza@email.com');