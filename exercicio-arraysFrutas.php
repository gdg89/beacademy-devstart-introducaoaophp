<?php
 $frutas = [
    'Laranja',
    'Banana',
    'Abacaxi',
    'Maça',
    'Melancia',
    'Morango',
    'Tangerina',
    'Kiwi',
    'Mamão',
    'Pera',
    'Manga',
];


?>

<ul>
    <?php
    for($i = 0; $i<= 9; $i++){
        echo "<li>{$frutas[$i]}</li>";
    };
    ?>
</ul>
