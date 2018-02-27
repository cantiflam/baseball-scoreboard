<?php
session_start();
header('Content-type: text/html');

//Base de datos
define("SERVER","localhost");
define("USER","User");
define("PASS","OPERACIONES");
define("DB","sultanes");
$link = mysqli_connect(SERVER,USER,PASS,DB);
?>
