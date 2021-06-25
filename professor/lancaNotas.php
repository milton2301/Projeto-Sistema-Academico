<?php
    include('conexao.php');
    include('validap.php');

    if(isset($_POST['id']) || isset($_POST['ativ']) || isset($_POST['val'])){
        $id = $_POST['id'];
        $atividade = $_POST['ativ'];
        $valor = $_POST['val'];

        $insere = "INSERT INTO nota VALUES ('$id','$atividade','$valor')";

        mysqli_query($strcon, $insere) or die("Não foi possivel lançar nota!");


    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançamento de Notas</title>
</head>
<body>
    <h1>Lançamento de nota por aluno</h1> 
    
    <form action="lancaNotas.php" method="post">
        <div>
            <label for="id">Informa a matricula do aluno:</label>
            <input type="text" name="id" placeholder="Campo obrigatório" required="">
        </div><br>
        <div>
            <label for="ativ">Informe o id da atividade:</label>
            <input type="text" name="ativ" placeholder="Campo obrigatório" required>
        </div><br>
        <div>
            <label for="val">Informe o valor da atividade:</label>
            <input type="text" name="val" placeholder="Campo obrigatório" required>
        </div><br>
        <button type="submit">Cadastrar</a></button>
    </form>
    <br>
    <div>
        <button type="button"><a href="professor.php">Voltar</a></button>
    </div>
</body>
</html>