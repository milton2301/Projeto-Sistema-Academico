<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de notas e médias</title>
</head>
<body>
    <h1>Notas e Medias dos alunos</h1>

    <form action="notaMedias.php" method="POST">
        <div>
            <label for="pesq">Informe a matricula do aluno para ver sua nota e suas médias</label>
            <br>
            <input type="text" name="pesq">
        </div><br>
        <button type="submit">Buscar</button>
    </form>
    <br>
    <?php
    include('conexao.php');
    include('validap.php');

     if(isset($_POST['pesq'])){
        $pesquisa = $_POST['pesq'];
        
        $query = "SELECT aluno.nome_aluno, nota.valor FROM aluno JOIN nota WHERE aluno.id = '$pesquisa' AND nota.aluno ='$pesquisa'";

        $resultado = mysqli_query($strcon, $query) or die("Resultado não encontrado!");

        while ($row = mysqli_fetch_assoc($resultado)){
            echo " ";
            echo "Aluno: ". $row['nome_aluno']."<br>";
            echo "Nota: ". $row['valor']."<br>";
        }
    }
?>

<h2>Media de toda a turma por disciplina</h2>
<button type="button"><a href="todasMedias.php">Ver Resultados</a></button>
<div><br>
    <button type="button"><a href="professor.php">Voltar</a></button>
</div>

</body>
</html>