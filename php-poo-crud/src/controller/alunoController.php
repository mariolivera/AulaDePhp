<?php 

//definindo que nesse arquivo será trabalhado os tipos de dados
declare(strict_types=1);

function renderizar(string $nomeDoArquivo, mixed $dados = null): void {
    include '../src/views/header.phtml';
    include "../src/views/{$nomeDoArquivo}.phtml";
    $dados;
    include '../src/views/footer.phtml';
}

function redirecionar(string $onde){
    header("location: {$onde}");
}


function inicio (): void //estamos declarando que essa funcao "nao tem retorno"
{
    renderizar("inicio");
}


function listar (): void 
{
    $alunos = buscarAlunos();
    renderizar("listar", $alunos);

}

function novo (): void 
{
    renderizar("novo");

    //se o usuario preencheu o formulario, vai entrar nesse if
    if (false === empty($_POST)) {
        $nome = trim($_POST['nome']);
        $cidade = trim($_POST['cidade']);
        $matricula = trim($_POST['matricula']);

        if (true === validateForm($nome, $matricula, $cidade)) {
            novoAluno($nome, $matricula, $cidade);
            redirecionar('/listar');
        } 
    }
}

function editar (): void
{
    $idalunos = $_GET["idalunos"];
    $aluno = buscarUmAluno($idalunos);
    renderizar("editar", $aluno);
    if (false === empty($_POST)) {
        $nome = trim($_POST['nome']);
        $matricula = trim($_POST['matricula']);
        $cidade = trim($_POST['cidade']);
        
        if (true === validateForm($nome, $matricula, $cidade)) {
            atualizarAluno($nome, $matricula, $cidade, $idalunos);
            redirecionar('/listar');
        } 
    }
}

function excluir() {
    $idalunos = $_GET['idalunos']; //recuperando o id que tava na URL

    excluirAluno($idalunos); //pedindo ao repository pra excluir o aluno (nao sabemos como, mas ele vai)

    redirecionar('/listar'); //redirecionando pra pagina de listar
}