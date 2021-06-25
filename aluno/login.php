<?php
include('conexao.php');

if(empty($_POST['login']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$login = mysqli_real_escape_string($strcon, $_POST['login']);
$senha = mysqli_real_escape_string($strcon, $_POST['senha']);

$query = "SELECT login, id FROM aluno WHERE login = '{$login}' and senha ='{$senha}'";

$result= mysqli_query($strcon, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    session_start();
    $_SESSION['login'] = $login;
    header('Location: aluno.php');
    exit();
}else{
    header('Location: index.php');
    exit();
}

?>