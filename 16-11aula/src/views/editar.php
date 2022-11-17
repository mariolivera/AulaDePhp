<h1>Pagina de Editar</h1>
<hr>

<form action="#" method='POST'>
    <input type="hidden" name="id" placeholder="Nome" value="<?php echo $aluno["id"]; ?>">
    <label></label>
    <input type="text" name="nome" placeholder="Nome" value="<?php echo $aluno["nome"]; ?>">
    <label></label>
    <input type="text" name="matricula" placeholder="Matricula" value="<?php echo $aluno["matricula"]; ?>">
    <label></label>
    <input type=" text" name="cidade" placeholder="Cidade" value="<?php echo $aluno["cidade"]; ?>">
    <button type="submit" value="Atualizar">Atualizar</button>
</form>