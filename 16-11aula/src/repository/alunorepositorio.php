<?php
//declare(string_types=1);  esse codigo serva para da mostrar os erros caso passe os tipos indevidos. ex: int junto com float.

function buscaralunos(): iterable // iterable seu uso é pecorrer (pecorrivel)
{
    $sql = 'SELECT * FROM tb_alunos';
    $alunos = abrirConexao()->query($sql);
    return $alunos;
}
function buscarUmAluno($id): iterable // iterable seu uso é pecorrer (pecorrivel)
{
    $sql = "SELECT * FROM tb_alunos WHERE id = '{$id}'";
    $aluno = abrirConexao()->query($sql);
    return $aluno->fetch(PDO::FETCH_ASSOC);
}

function excluirAluno(string $id): void
{
    $sql = "DELETE FROM tb_alunos WHERE id={$id}";
    abrirConexao()->query($sql);
}
function novoAluno(): void
{
    if (false === empty($_POST)) {
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $cidade = $_POST['cidade'];

        $select = "INSERT INTO tb_alunos (nome, matricula, cidade) VALUES (?,?,?)";
        $query = abrirConexao()->prepare($select);
        $query->execute([$nome, $matricula, $cidade]);

        header('location: /listar');
    }
}
function atualizarAluno(): void
{
    if (false === empty($_POST)) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $cidade = $_POST['cidade'];

        $sql = "UPDATE tb_alunos SET nome=?, matricula=?, cidade=? WHERE id =?";
        $query = abrirConexao()->prepare($sql);
        $query->execute([$nome, $matricula, $cidade, $id]);

        header('location: /listar');
    }
}
