<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas notas</title>
</head>
<body>
    <h1>Bem vindo a sua area de notas</h1> 

    <form action="notas.php" method="post">
        <label for="busc">Informe sua matricula</label>
        <input type="text" name="busc">
        <br>
        <br>
        <input type="submit" value="Buscar">
    </form>

<?php
    include('conexao.php');
    include('valida.php');

    if(isset($_POST['busc'])){
        $result = $_POST['busc'];
    
    $query = "SELECT aluno.nome_aluno, nota.valor FROM aluno JOIN nota WHERE aluno.id = '$result' AND nota.aluno ='$result'";

        $resultado = mysqli_query($strcon, $query) or die("Resultado não encontrado!");

        while ($row = mysqli_fetch_assoc($resultado)){
            echo "<br> ";
            echo $row['nome_aluno']." sua nota é: ". $row['valor']."<br>";
        }
    }
?>

<br>

<button type="button"><a href="aluno.php">Voltar</a></button>
</body>
</html>