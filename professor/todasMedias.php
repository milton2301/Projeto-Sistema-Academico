<?php
    include('conexao.php');
    include('validap.php');

$sql = "SELECT *, a.nome_aluno, AVG(valor*peso) AS media FROM nota n 
    JOIN aluno a ON a.id = n.aluno
    JOIN atividade ativ ON ativ.id = n.atividade";

    $result = $strcon->query($sql);

        if($result->num_rows > 0) {
            echo "Média de todos os alunos.<br>";
            echo "<table>";
            echo "<tr>";
            echo "<th>Aluno</th>";
            echo "<th>Média</th>";
            echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nome_aluno"] . "</td>";
            echo "<td>" . $row["media"] . "</td>";
            echo "</tr>";
        }
            echo "</table>";
        } else {
            echo "Sem resultado.";
        }    
    mysqli_close($strcon);
    
    echo "<br>";
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Medias Gerais</title>
 </head>
 <body>
        <button type="button"><a href="notaMedias.php">Voltar</a></button>
 </body>
 </html>