<?php
require_once('php/config.php');
require_once('php/components.php');
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
  echo $header;
  if($user == 'tablero'){
    echo $navbar.$addTeam;
  } else{
    header('Location: /');
  }
  echo $footer;
} else {
  echo $header.$login.$footer;
}
?>
