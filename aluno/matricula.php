<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula</title>
</head>
<body>

    <form action="matricula.php" method="POST">
        <div>
            <label for="mat">Informe o código da sua matricula:</label>
            <input type="text" name="mat">
        </div><br>
        <div>
            <label for="cod">Informe o código da disciplina que deseja matricular-se:</label>
            <input type="text" name="cod">
        </div><br>
            <button type="submit">Matricular-se</button>
    </form>
    <button type="button" style="position: relative; float: right; margin-top: -50px;"><a href="aluno.php">Voltar</a></button>
</body>
</html>

<?php 
    include('conexao.php');
    include('valida.php');

    $dis = "SELECT * FROM disciplina";

    $mostrar = mysqli_query($strcon, $dis) or die ("Conexão não autorizada!");

    while($row = mysqli_fetch_array($mostrar)){
        echo "<hr>";
        echo "Código da disciplina: ". $row['id']. "<br>";
        echo "Nome da disciplina: ". $row['nome_disciplina']. "<br>";
        echo "<hr>";
    }

    if(isset($_POST['cod']) && isset($_POST['mat'])){
        $codigo = $_POST['cod'];
        $matricula = $_POST['mat'];

        $verifica = $strcon->query("SELECT * FROM matricula WHERE disciplina = '$codigo'");

        if(mysqli_num_rows($verifica) > 0){
            echo "Você já esta matriculado nessa materia!";
            exit();
        }else{
            $cad = "INSERT INTO matricula VALUES ('$matricula','$codigo')";
            mysqli_query($strcon, $cad) or die("Não foi possivel realizar a matricula");
        }
        echo "Cadastro realizado com sucesso!";
    }
?>