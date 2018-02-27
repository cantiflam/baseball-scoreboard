<?php
require_once('php/config.php');
require_once('php/components.php');

if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
  echo $header;
  if($user == 'pantalla'){
    echo $scoreboard;
  }
  if($user == 'tablero'){
    echo $control;
  }
  if($user == 'video'){
    echo $video;
  }
  echo $footer;
} else {
  echo $header.$login.$footer;
}
?>
