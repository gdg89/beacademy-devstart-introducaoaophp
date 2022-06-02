<?php

$a1 = [
    'nome'=>'Chiquim',
    'email'=>'chuiquim@email.com',
    'telefone'=> '85 9 8888-0000',
    'notas'=>[
        9,
        5.5,
        10,
        8.5,
        7,
    ],
];

$a2 =[
    'nome'=> 'Maria',
    'email'=>'maria@email.com',
    'telefone'=>'86 8 4565-5465',
    'notas'=>[
        9,
        5.5,
        10,
        8.5,
        7,
    ],
];

$alunos = [
    $a1,$a2,
];
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
<table class= "table table-hover table-striped mt-5">
    <thead class="table-dark">
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
    </thead>
    <tbody>
        <?php
        foreach ($alunos as $infoAluno){
            echo "<tr><td>{$infoAluno['nome']}</td><td>{$infoAluno['email']}</td><td>{$infoAluno['telefone']}</td></tr>";
        }
        ?>
    </tbody>
</table>
</div>
