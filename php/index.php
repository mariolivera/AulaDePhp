<table border="1">
    <thead>
        <tr>
            <th>
                nome
            </th>

            <th>
                email
            </th>

            <th>
                cidade
            </th>
            <th>
                excluir
            </th>
        </tr>
    </thead>

    <tbody>
        <?php
        for ($i = 1; $i <= 10 ; $i++ ) {
            echo " <tr>
            <td>Chiquim{$i}</td>
            <td>Zezim{$i}@email.com</td>
            <td>Cidade{$i}</td>
            <td><button onclick='excluir()'>Excluir</button></td>
            </tr> ";
        }
        ?>
    </tbody>
</table>