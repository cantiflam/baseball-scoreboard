<?php
/*Componentes visuales
  Header - Inicio del documento html
  Control - Interface para controlar tablero
  Login - Formulario para acceder a la aplicación
  Scoreboard - Pantalla a visualizar durante el partido
  x-Footer - Pie de página y fin del documento
*/
require_once('config.php');

$control = "<div class='arrow'></div>
<section id='control' class='container'>
  <div class='row card'>
    <div class='col-lg-4'>
      <h1>Local <div class='switch-container'><div class='switch' data-turn='1'></div></div> Visitante</h1>
      <h1><label for='scoreGet'>Marcador</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' id='scoreGet'>
        <select id='scoreSelect'>
          <option value='sc1'>Entrada 1</option>
          <option value='sc2'>Entrada 2</option>
          <option value='sc3'>Entrada 3</option>
          <option value='sc4'>Entrada 4</option>
          <option value='sc5'>Entrada 5</option>
          <option value='sc6'>Entrada 6</option>
          <option value='sc7'>Entrada 7</option>
          <option value='sc8'>Entrada 8</option>
          <option value='sc9'>Entrada 9</option>
          <option value='sc10'>Entrada 10</option>
        </select>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateScore'><i class='sultanes icon-refresh'></i></button>
      </div>
    </div>

    <div class='col-lg-3 bg-d-2'>
      <h1><label for='hitsGet'>Hits</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' id='hitsGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateHits'><i class='sultanes icon-refresh'></i></button>
      </div>
      <h1><label for='errorGet'>Errores</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' id='errorGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateError'><i class='sultanes icon-refresh'></i></button>
      </div>
    </div>
    <div class='col bg-d-3'>
      <h1><label for='ballsGet'>Bolas</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' max='2' id='ballsGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateBalls'><i class='sultanes icon-undo'></i></button>
      </div>
    </div>
    <div class='col bg-d-3'>
      <h1><label for='strikesGet'>Strikes</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' max='2' id='strikesGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateStrikes'><i class='sultanes icon-undo'></i></button>
      </div>
    </div>
    <div class='col bg-d-3'>
      <h1><label for='outsGet'>Outs</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' max='2' id='outsGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateOuts'><i class='sultanes icon-undo'></i></button>
      </div>
    </div>
    <div id='score' class='pdx-x2'></div>
    <div id='bso'></div>
  </div>
</section>
";

$header = "<!DOCTYPE html>
<html lang='es'>
<head>
  <title>Tablero de béisbol</title>
  <meta charset='utf-8'>
  <base href='/'>
  <meta name='author' content='Miguel Angel de la Garza | HPMLED'>
  <meta name='description' content='Tablero y pantalla dinámica para juego de béisbol'>
  <meta name='viewport' content='width=device-width'>
  <link rel='icon' href='img/favicon.png'>
  <link rel='stylesheet' href='css/style.min.css'>
  <style>
    html{background:#000;}
  </style>
</head>
<body>
";

$login = "<section id='login' class='container-fluid'>
  <div class='row'>
    <div class='col-md-6 offset-md-3 col-lg-4 offset-lg-4 card mry-x5 pd-0'>
      <img src='img/escudo.jpg' alt='escudo de sultanes' width='100%;'>
      <form method='POST' action='php/functions.php' class='pdx-x2 mry-x3'>
        <h1>Inicia sesión</h1>
        <div class='input-container'>
          <input type='text' required id='user' name='user' autocomplete='off'>
          <label for='user'>Usuario</label>
        </div>
        <div class='input-container'>
          <input type='password' required id='pass' name='pass' autocomplete='off'>
          <label for='pass'>Contraseña</label>
        </div>
        <button type='submit' class='btn btn-principal waves-effect waves-light'>entrar</button>
      </form>
    </div>
  </div>
</section>
";

$navbar = "<nav>
  <div class='container'>
    <button type='button' class='btn' id='menuButton'><i class='sultanes icon-menu'></i></button>
    <aside class='sidenav'>
      <img src='img/escudo.jpg' class='side-img' alt='imagen de login'>";
      if($_SESSION['user']=='tablero'){
        $navbar .= "<a href=''>tablero</a>
        <a href='' id='resetScore'>restablecer pizarra</a>
        <a href='add-team.php'>modificar equipos</a>
        ";
      } else if($_SESSION['user']=='video'){
        $navbar .= "<a href='/'>Reproductor</a>";
      }
      $navbar .= "<hr>
      <a href='php/logout.php'>cerrar sesión</a>
    </aside>
  </div>
</nav>
";

$data = scandir('./uploads/');
$i = 0;
foreach($data as $value){
  if($value != '.' && $value != '..' && !preg_match('/php*/',$value) && !preg_match('/playNow*/',$value)){
    $list[$i] .= $value;
  }
  $i++;
}
if(isset($_GET['list'])){
  $dirList = $_GET['list'];
  $data = scandir("./uploads/$dirList/");
  foreach($data as $value){
    if($value != '.' && $value != '..' && !preg_match('/php*/',$value)){
      $img[$i] .= $value;
    }
    $i++;
  }
}
$playlist = "<div class='container-fluid row pdy'>
  <div class='col-md-2'>
    <div class='select-box'>
      <select id='displayGet'>
        <option value='1'>pantalla completa</option>
        <option value='2'>durante el juego</option>
        <option value='3'>pantalla y marcador</option>
      </select>
    </div>
    <button type='button' class='btn btn-principal waves-effect waves-light mry col-12' id='stopRep'><i class='sultanes icon-stop'></i></button>
    <button type='button' class='btn btn-principal waves-effect waves-light mry col-12' id='uploadBtn'><i class='sultanes icon-backup'></i></button>
    <button type='button' class='btn btn-principal waves-effect waves-light mry col-12' id='newFolder'><i class='sultanes icon-create-new-folder'></i></button>
    <div class='lists'>";
    foreach($list as $value){
      $playlist .= "<a href='/index.php?list=$value'>$value</a>
      ";
    }
    $playlist .= "</div>
    </div>
  <div class='col-md-10 pdy-x2'>
    <h1 class='white-text uppercase'>$dirList</h1>
    <div class='row'>";
      foreach($img as $value){
        if(preg_match("/\.(jpg|png|jpeg|gif)$/",$value)){
          $playlist .= "<div class='col-lg-2 col-md-3 col-sm-6 playContent'>
            <img src='/uploads/$dirList/$value' class='imgList'>
            <div class='play-display'>Reproducir en pantalla <i class='sultanes icon-play_arrow'></i></div>
          </div>";
        } else if(preg_match("/\.(mp4|avi|flv|mpeg)$/",$value)) {
          $playlist .= "<div class='col-lg-2 col-md-3 col-sm-6 playContent'>
            <video src='/uploads/$dirList/$value' class='vidList' controls audio='off' preload>
              error al visualizar vídeo
            </video>
            <div class='play-display'>Reproducir en pantalla <i class='sultanes icon-play_arrow'></i></div>
          </div>";
        }
      }
      $playlist .= "</div>
  </div>
</div>
";
$playlist .= "<div class='container pdy-x5 add-video card'>
  <h2>Subir archivo</h2>
  <form action='/uploads/upload.php' method='post' class='row' enctype='multipart/form-data'>
    <div class='col-md-3'>
      <input type='file' value='subir vídeo' required name='fileUploaded'>
    </div>
    <div class='col-md-3 input-container'>
      <select name='folder'>
        <option value=''>Seleccione lista</option>";
        foreach($list as $value){
          $playlist .= "<option value='$value'>$value</option>";
        }
        $playlist .= "</select>
    </div>
    <div class='col-md-3'>
      <button type='submit' class='btn btn-principal waves-effect waves-light'>enviar</button>
    </div>
    <div class='col-12 center-text'>
      <button type='reset' class='btn close white-text' data-target='.add-video'>cerrar <i class='sultanes icon-close'></i></button>
    </div>
  </form>
</div>
<div class='container-fluid pdy-x5 add-folder card'>
  <h2>Crear nueva carpeta</h2>
  <form class='row' action='/uploads/mkdir.php' method='post'>
    <div class='col'>
      <p>Solamente se permiten letras y/o números. Las palabras se separan con \"-\" </p>
    </div>
    <div class='col'>
      <div class='input-container'>
        <input type='text' name='folderName' required id='folderName'>
        <label for='folderName'>Nombre</label>
      </div>
    </div>
    <div class=col>
      <button type='submit' name='submit' class='btn btn-principal waves-effect waves-light'>crear</button>
    </div>
    <div class='col-12 center-text'>
      <button type='reset' class='btn close white-text' data-target='.add-folder'>cerrar <i class='sultanes icon-close'></i></button>
    </div>
  </form>
</div>
";

$scoreboard = "<section class='container-fluid'>
  <div class='row'>
    <div class='col' id='lineupLocal'></div>
    <div id='display' class='col-8 pd-0'></div>
    <div class='col' id='lineupVisitante'></div>
  </div>
</section>
<div id='scoreboard' class='container card pdy-0 pdx-x3'>
  <div class='row'>
    <div class='col-10' id='score'></div>
    <div class='col' id='bso'></div>
    <div class='col'>
      <div id='clock'></div>
      <div id='vel'></div>
    </div>
  </div>
</div>
<div id='back'></div>
<div id='playIt'></div>
";

$scoreboardSolo = "
  <div class='container' style='width:576;height:128;'>
    <div id='score'></div>
  </div>
";

$teams = ['sultanes','acereros','algodoneros','bravos','diablos','generales','guerreros','leones','olmecas','pericos','piratas','rieleros','rojos','saraperos','tecolotes','tigres','toros'];
$addTeam = "<div class='container pdy-x2'>
  <form action='php/updateTeam.php' method='post'>
    <div class='row'>
      <div class='col-md-6 row pdx-1'>
        <h1 class='col-6 white-text'>Equipo local</h1>
        <div class='select-box col-6 pdy-x3'>
          <select class='updateTeam' data-team='1'>";
            foreach($teams as $value){
              $addTeam .= "<option value='$value'>$value</option>";
            }
            $addTeam .= "
          </select>
        </div>
        ";
        $i=0;
        $team = mysqli_query($link,"SELECT * FROM players where team= 'local'");
          while($player = mysqli_fetch_array($team)){
          $addTeam .= "<div class='col-lg-2'>
            <div class='input-container'>
              <input type='text' name='playerNumberLocal$player[id]' id='playerNumberLocal$player[id]' required value='$player[number]'>
              <label for='playerNumberLocal$player[id]'>número</label>
            </div>
          </div>
          <div class='col-lg-8'>
            <div class='input-container'>
              <input type='text' name='playerNameLocal$player[id]' id='playerNameLocal$player[id]' required value='$player[name]'>
              <label for='playerNameLocal$player[id]'>nombre del jugador</label>
            </div>
          </div>
          <div class='col-lg-2'>
            <div class='input-container'>
              <input type='text' name='playerPositionLocal$player[id]' id='playerPositionLocal$player[id]' required value='$player[position]'>
              <label for='playerPositionLocal$player[id]'>posición</label>
            </div>
          </div>
          ";
        }
        $addTeam .= "</div>
        <div class='col-md-6 row'>
          <h1 class='col-6 white-text'>Equipo visitante</h1>
          <div class='select-box col-6 pdy-x3'>
            <select class='updateTeam' data-team='1'>";
              foreach($teams as $value){
                $addTeam .= "<option value='$value'>$value</option>";
              }
              $addTeam .= "
            </select>
          </div>
          ";
          $team = mysqli_query($link,"SELECT * FROM players WHERE team = 'visitante'");
          while($player = mysqli_fetch_array($team)){
            $addTeam .= "<div class='col-lg-2'>
              <div class='input-container'>
                <input type='text' name='playerNumberVisitante$player[id]' id='playerNumberVisitante$player[id]' required value='$player[number]'>
                <label for='playerNumberVisitante$player[id]'>número</label>
              </div>
            </div>
            <div class='col-lg-8'>
              <div class='input-container'>
                <input type='text' name='playerNameVisitante$player[id]' id='playerNameVisitante$player[id]' required value='$player[name]'>
                <label for='playerNameVisitante$player[id]'>nombre del jugador</label>
              </div>
            </div>
            <div class='col-lg-2'>
              <div class='input-container'>
                <input type='text' name='playerPositionlVisitante$player[id]' id='playerPositionVisitante$player[id]' required value='$player[position]'>
                <label for='playerPositionVisitante$player[id]'>posición</label>
              </div>
            </div>
            ";
          }
          $addTeam .= "</div>
        </div>
        <button type='submit' class='btn btn-principal waves-effect waves-light'>enviar</button>
  </form>
</div>
";

$showInDisplay = mysqli_query($link,"SELECT * FROM displayTemplate WHERE id=1");
$showDisplay = mysqli_fetch_array($showInDisplay);
$video = "<div class='container pdy-x5'>
  <div class='row'>
    <div class='col-4'>
      <div class='select-box'>
        <select id='displayGet'>
          <option value='1'>pantalla completa</option>
          <option value='2'>durante el juego</option>
          <option value='3'>pantalla y marcador</option>
        </select>
        <label for='displayGet'>Estructura</label>
      </div>
      <div class='card pd-x2 showInDisplay'>
        <h2>Mostrar</h2>
        <div class='switch-box'>
          <label for='displayGet'>Reloj</label>
          <div class='switch-container' data-status='";
          if($showDisplay['clock']==1){
            $video .= '1';
          } else {
            $video .= '0';
          }
          $video .= "' data-update='clock'>
            <div class='";
            if($showDisplay['clock']==1){
              $video .= "active";
            }
            $video .= " switch'></div>
          </div>
        </div>
        <div class='switch-box'>
          <label for='displayGet'>Radar</label>
          <div class='switch-container' data-status='";
          if($showDisplay['radar']==1){
            $video .= '1';
          } else {
            $video .= '0';
          }
          $video .= "' data-update='radar'>
            <div class='";
            if($showDisplay['radar']==1){
              $video .= 'active';
            }
            $video .=" switch'></div>
          </div>
        </div>
      </div>
    </div>
    <div class='col-8 row' id='displayPreview'>
      <div class='col-12 display'></div>
    </div>
  </div>
</div>
";

$footer = "<footer>HPMLED &copy; 2018</footer>
<script src='js/todo.min.js'></script>
</body>
</html>";
?>
