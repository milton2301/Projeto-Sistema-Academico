<?php
    include('valida.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Aluno</title>
    <link rel="stylesheet" href="estiloAluno.css">
    <script src="script.js"></script>
</head>
<body>
<header>
        <div class="sair">
            <button type="button"><a href="sair.php">SAIR</a></button>
        </div>
    <a href="#" class="cabecalho" onclick="abrirMenu();">&#9776; Menu</a>
</header>

    <nav id="menu">
        <a href="#" onclick="fecharMenu();">&times; Fechar</a>
        <a href="matricula.php">Matricular-se</a>
        <a href="notas.php">Visualizar minhas notas</a>
    </nav>

    <main id="principal">
        <h1>Bem Vindo ao Web Aluno</h1>
    </main>


</body>
</html>