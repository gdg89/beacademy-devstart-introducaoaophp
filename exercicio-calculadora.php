<h1>Calculadora</h1>
<form action="" method="post">
<input name="num1" placeholder="Digite o primeiro numero"> <br><br>
<input  name="num2" placeholder="Digite o segundo numero"> <br><br>

<button name="soma">Somar<button><br>
<button name="subtracao">Subtrair<button><br>
<button name="multiplicacao">Multiplicar<button><br>
<button name="divicao">Dividir<button><br>
</form>

<?php
    if ($_POST) {
        if(isset($_POST['subtracao'])){
            echo $_POST['num1'] - $_POST['num2'];
        }
        if(isset($_POST['somar'])){
            echo $_POST['num1'] + $_POST['num2'];
        }
        if(isset($_POST['multiplicacao'])){
            echo $_POST['num1'] * $_POST['num2'];
        }
        if(isset($_POST['divicao'])){
            echo $_POST['num1'] / $_POST['num2'];
        }
        var_dump($_POST);
        
    }
?>