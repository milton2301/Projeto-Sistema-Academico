<?php 
include('conexao.php');
include('validap.php');

if (isset($_post['nome']) || isset($_POST['peso']) || isset($_POST['disciplina'])){
$nome = $_POST['nome'];
$peso = $_POST['peso'];
$disciplina = $_POST['disciplina'];


$insere = "INSERT INTO atividade VALUES (DEFAULT, '$nome', '$peso', '$disciplina')";

mysqli_query($strcon, $insere) or die("Não foi possivel cadastrar!");

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Atividades</title>
</head>
<body>
    <header>
        <h1>Cadastro de Disciplinas</h1>
    </header>
    <form action="cadastraAtividade.php" method="post">
        <div>
            <label for="nome">Ativ.</label>
            <input type="text" name="nome">
        </div><br>
        <div>
            <label for="peso">Peso</label>
            <input type="text" name="peso">
        </div><br>
        <div>
            <label for="disciplina">Disc.</label>
            <input type="text" name="disciplina">
        </div><br>
        <input type="submit" value="Cadastrar">
    </form> 

    <div><br>
        <button type="button"><a href="professor.php">Voltar</a></button>
    </div>
    
</body>
</html>