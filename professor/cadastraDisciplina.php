<?php
    include('conexao.php');
    include('validap.php');

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];

        $insere = "INSERT INTO disciplina VALUES (DEFAULT,'$nome',DEFAULT)";

        mysqli_query($strcon, $insere) or die("Não foi possível realizar o cadastro!");

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplinas</title>
</head>
<body>
    
    <form action="cadastraDisciplina.php" method="post">
        <h1>Cadastro de Disciplinas</h1>
        <div>
            <label for="nome">Nome da Disciplina</label>
            <input type="text" name="nome">
        </div><br>
        <input type="submit" value="Cadastrar">
    </form>
    <div><br>
    </div>
    <div><br>
    <button type="button"><a href="professor.php">Voltar</a></button>
    </div>
</body>
</html>