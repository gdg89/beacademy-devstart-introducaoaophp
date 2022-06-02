<table border="1" width = "500">
    <thead>
        <tr>
            <td>Bandas</td>
            <td>Musicas</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $bandas =[
            ['Dream Theater','10'],
            ['Neo Pi Neo','6'],
            ['ExaltaSamba','3'],
            ['Iron Maiden','8'],
            ['Aviões do forro','9'],
            ['Five Finger Death Punch','2'],
            ['Los iracundos','32'],
        ];
        
        $bandas[100] = ['Nirvana','6'];
        $bandas[9] = ['Calcinha Preta','12'];
        $bandas[2] = ['Turma do pagode','1'];

        foreach ($bandas as list($cadaBanda,$cadaMusica)){
            echo "<tr><td>{$cadaBanda}</td><td>{$cadaMusica}</tr>";
        };
        ?>
    </tbody>
</table>
