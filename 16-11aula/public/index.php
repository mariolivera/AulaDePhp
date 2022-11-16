<?php
// aqui é uma forma de fazer rotas para receber elas dos arquivos.

$rota = $_SERVER['REQUEST_URI'];

require_once '../src/controller/alunoController.php'; 
require_once '../src/connection/conexao.php';

$paginas = [
    '/' => 'inicio',
    '/listar' => 'listar',
    '/novo' => 'novo',
];


if (false === isset($paginas[$rota])) {
    include'../src/views/erro404.phtml';
    exit;
}
include '../src/views/menu.phtml';

echo $paginas[$rota]();
