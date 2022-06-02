<?php

$produto1 = [
    'nome'=>'Máscara Super Hidratante Morte Súbita',
    'descricao'=>'Contém 450g, perfeito para dia a dia e para o pós-processo de coloração',
    'precio'=>'R$ 25,11',
    'foto'=>'<img src="https://m.media-amazon.com/images/I/91ULDLB7JML._AC_SY200_.jpg" alt="">',
];
$produto2 = [
    'nome'=>'Kindle Oasis 8GB',
    'descricao'=>'O Kindle com a maior e melhor resolução - tela Paperwhite de 7" e 300 ppi. Leia como se fosse em papel, sem reflexo, mesmo sob a luz do sol.',
    'precio'=>'R$1.281,55',
    'foto'=>'<img src="https://m.media-amazon.com/images/I/61X0ISBpD-L._AC_SY200_.jpg" alt="">',
];
$produto3 = [
    'nome'=>'Brinquedo Macaco Marrom',
    'descricao'=>'Ideal para os pets de todos os portes e idades',
    'precio'=>'R$23,59',
    'foto'=>'<img src="https://m.media-amazon.com/images/I/51usvT7gIFL._AC_SY200_.jpg" alt="">',
];
$produto4 = [
    'nome'=>'Gel de Babosa',
    'descricao'=>'Para os seguintes tipos de cabelos:<br>
    Ondulado,Cacheado,Crespo.',
    'precio'=>'R$18,99 ',
    'foto'=>'<img src="https://m.media-amazon.com/images/I/61kSATdhlhL._AC_UL320_.jpg" alt="">',
];
$produto5 = [
    'nome'=>'Mercer Culinary Faca de chef ',
    'descricao'=>'Belo damasco de 67 camadas de aço inoxidável durável proteção contra ferrugem enquanto mantém uma borda afiada de 15 graus',
    'precio'=>'R$777,80',
    'foto'=>'<img src="https://m.media-amazon.com/images/I/41BQE16emDL._AC_UL320_.jpg" alt="">',
];

$produtos = [
    $produto1,
    $produto2,
    $produto3,
    $produto4,
    $produto5,
];
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
<table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
        <th>Produto</th>
        <th>Descrição</th>
        <th>Precio</th>
        <th>Foto</th>
    </thead>
    <tbody>
        <?php
        foreach($produtos as $cadaProduto ){
            echo "<tr class='align-middle'>
                <td>{$cadaProduto ['nome']}</td>
                <td>{$cadaProduto['descricao']}</td>
                <td>{$cadaProduto['precio']}</td>
                <td>{$cadaProduto['foto']}</td>
            </tr>";
        }
        ?>
    </tbody>
</table>
</div>
