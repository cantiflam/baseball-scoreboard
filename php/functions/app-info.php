<?php
/*Funciones
  Login - Aprobar acceso
  updateError - Actualizar errores en pizzara
  updateHits - Actualizar hits en pizarra
  updateScore - Actualizar marcador en pizarra
*/
require_once('config.php');
$link = mysqli_connect(SERVER,USER,PASS,DB);
