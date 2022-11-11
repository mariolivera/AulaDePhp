<!--css-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="conteiner mb-3">
    <h1>Alunos</h1>
    <hr>

    <table class="table table-stripe table-houver">
        <thead class="table-dark">
            <tr>
                <th>Coluna1</th>
                <th>Coluna2</th>
                <th>Coluna3</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($alunos as $cadaAlunos) {
                echo "<tr> 
                <td>{$cadaaluno['nome']}</td>
                <td>{$cadaaluno['cidade']}</td>
                <td>{$cadaaluno['matricula']}</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>

</div>

