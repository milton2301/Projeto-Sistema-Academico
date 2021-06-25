<?php 
define('HOST','localhost');
define('USUARIO', 'admin');
define('SENHA', 'admin');
define('BASE','sistema');

$strcon = mysqli_connect(HOST,USUARIO,SENHA,BASE) or die ("Falha na conexão!");

?>