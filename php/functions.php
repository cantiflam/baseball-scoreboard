<?php
/*Funciones
  Login - Aprobar acceso
  updateBalls - Actualizar bolas en pizarra
  updateError - Actualizar errores en pizarra
  updateHits - Actualizar hits en pizarra
  updateOuts - Actualizar outs en pizarra
  updateError - Actualizar errores en pizzara
  updateHits - Actualizar hits en pizarra
  updateScore - Actualizar marcador en pizarra
  updateStrikes - Actualizar strikes en pizarra
  updateTeam - Actualizar equipos en pizarra
*/
require_once('config.php');
$link = mysqli_connect(SERVER,USER,PASS,DB);

if(isset($_POST['user'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $res = mysqli_query($link,"SELECT * FROM users WHERE username = '$user'");
  $usr = mysqli_fetch_array($res);
  if($pass == $usr['password']){
    $_SESSION['user'] = $user;
  }
  header('Location: /');
}

if($_POST['update'] == 'balls'){
  $query = "UPDATE bso SET ball = '$_POST[balls]' WHERE id = 1";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}

if($_POST['update'] == 'display'){
  $query = "UPDATE displayTemplate SET display = '$_POST[display]' WHERE id = 1";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}

if($_POST['update'] == 'error'){
  $query = "UPDATE score SET err = '$_POST[punto]' WHERE id = '$_POST[id]'";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}

if($_POST['update'] == 'hits'){
  $query = "UPDATE score SET hits = '$_POST[punto]' WHERE id = '$_POST[id]'";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}

if($_POST['update'] == 'outs'){
  $query = "UPDATE bso SET outGame = '$_POST[outs]' WHERE id = 1";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}

if($_POST['update'] == 'score'){
  $query = "UPDATE score SET $_POST[score] = '$_POST[punto]' WHERE id = '$_POST[id]'";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}

if($_POST['update'] == 'status'){
  $query = "UPDATE displayTemplate SET $_POST[element] = '$_POST[status]' WHERE id = 1";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}

if($_POST['update'] == 'strikes'){
  $query = "UPDATE bso SET strike = '$_POST[strikes]' WHERE id = 1";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}

if($_POST['update'] == 'team'){
  $query = "UPDATE score SET name = '$_POST[team]' WHERE id = '$_POST[id]'";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}

//fin
?>
