<?php
//declare(string_types=1);  esse codigo serva para da mostrar os erros caso passe os tipos indevidos. ex: int junto com float.

function buscarAlunos(): iterable // iterable seu uso é pecorrer (pecorrivel)
{
    $sql = 'SELECT * FROM alunos';
    $alunos = abrirConexao()->query($sql);
    return $alunos;
}
function buscarUmAluno($idalunos): iterable // iterable seu uso é pecorrer (pecorrivel)
{
    $sql = "SELECT * FROM alunos WHERE idalunos = '{$idalunos}'";
    $aluno = abrirConexao()->query($sql);
    return $aluno->fetch(PDO::FETCH_ASSOC);
}

function novoAluno(string $nome, string $matricula, string $cidade): void
{
        $sql = "INSERT INTO alunos (nome, matricula, cidade) VALUES (?,?,?)";
        $query = abrirConexao()->prepare($sql);
        $query->execute([$nome, $matricula, $cidade]);
}

function atualizarAluno(string $nome, string $matricula, string $cidade, $idalunos): void
{

        $sql = "UPDATE alunos SET nome=?, matricula=?, cidade=? WHERE idalunos=?";
        $query = abrirConexao()->prepare($sql);
        $query->execute([$nome, $matricula, $cidade, $idalunos]);
        // header('location: /listar');
}

function excluirAluno(string $idalunos): void
{
    $sql = "DELETE FROM alunos WHERE idalunos={$idalunos}";
    abrirConexao()->query($sql);
}