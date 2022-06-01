<br><br>
    <form action="" method="post">
        <input type="text" placeholder="Digite seu nome" name="nome">
        <input type="text" placeholder="Digite sua idade" name="idade">
        <input type="submit" value="Enviar">
    </form>
    <br>
    <br>

    <table border="2" width ="400" height="50">
        <thead>
            <th>Nome</th>
            <th>Idade</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_POST['nome'];?></td>
                <td><?php echo $_POST['idade'];?></td>
            </tr>
    </table>

    
    

    
    
    