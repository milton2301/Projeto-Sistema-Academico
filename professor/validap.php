<?php 
session_start();
if(!$_SESSION['user']){
    header('Location: indexp.php');
    exit();
}
?>