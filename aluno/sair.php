<?php 
    session_start();
    session_destroy();
    header('Location: paginaaluno.php');
    exit();
?>