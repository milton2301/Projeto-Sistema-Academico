<?php
    include('validap.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Professor</title>
    <link rel="stylesheet" href="estiloProfessor.css">
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
        <a href="lancaNotas.php">Lançamento de notas</a>
        <a href="notaMedias.php">Visualizar notas e médias</a>
    </nav>

    <main id="principal">
        <h1>Bem Vindo ao Web Professor</h1>
        <div>
            <h2>
                <h2><a href="cadastraDisciplina.php">Cadastrar disciplina</a></h2>
                <h2><a href="cadastraAtividade.php">Cadastrar atividade</a></h2>
            </h2>
        </div>
    </main>


    </body>
</html>