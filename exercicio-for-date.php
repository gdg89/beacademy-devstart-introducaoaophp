<!-- Anos -->
<select>
    <option selected> -- Selecione um ano --</option>
    <?php
        for ( $ano = 2022; $ano >=1900;$ano--){
            echo "<option>{$ano}</option>";
            }
    ?>
</select>
<br><br>

<!-- Mes -->
<select>
    <option selected> -- Selecione um mês --</option>
    <?php
        for ( $mes = 1; $mes <= 12;$mes++){
            echo match($mes){
                1 => "<option>Janeiro</option>",
                2 => "<option>Fevreiro</option>",        
                3 => "<option>Março</option>",        
                4 => "<option>Abril</option>",        
                5 => "<option>Maio</option>",       
                6 => "<option>Junio</option>",       
                7 => "<option>Julho</option>",        
                8 => "<option>Agosto</option>",        
                9 => "<option>Setembro</option>",        
                10=> "<option>Otubro</option>",        
                11=> "<option>Novembro</option>",        
                12=> "<option>Dezembro</option>",
                default => "Mes invalido",
        
            };
        }
    ?>
</select>
<br><br>
<!-- Dias -->
<select>
    <option selected> -- Selecione um dia --</option>
    <?php
        for ( $dia = 1; $dia <= 31;$dia++){
            echo "<option>{$dia}</option>";
            }
    ?>
</select>
<br><br>