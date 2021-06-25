<?php
include('conexao.php');

if(empty($_POST['user']) || empty($_POST['senha'])){
    header('Location: indexp.php');
    exit();
}

$login = mysqli_real_escape_string($strcon, $_POST['user']);
$senha = mysqli_real_escape_string($strcon, $_POST['senha']);

$query = "SELECT login FROM professor WHERE login = '{$login}' and senha ='{$senha}'";

$result= mysqli_query($strcon, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    session_start();
    $_SESSION['user'] = $login;
    header('Location: professor.php');
    exit();
}else{
    header('Location: indexp.php');
    exit();
}


?>