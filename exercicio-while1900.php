<select>
    <option selected> -- Selecione um ano --</option>
    <?php

        $x = 1900;

        while ($x <= 2022){
            echo "<option>{$x}</option>";
            $x++;

        }
    ?>
</select>
<br>
<br>
 <!-- Decremento -->
<select>
    <option selected> -- Selecione um ano --</option>
    <?php

        $x = 2022;

        while ($x >= 1900){
            echo "<option>{$x}</option>";
            $x--;

        }
    ?>
</select>
