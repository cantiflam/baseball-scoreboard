<?php
/*Componentes visuales
  Header - Inicio del documento html
  Control - Interface para controlar tablero
  Login - Formulario para acceder a la aplicación
  Scoreboard - Pantalla a visualizar durante el partido
  x-Footer - Pie de página y fin del documento
*/
require_once('./config.php');

$control = "<div class='arrow'></div>
<section id='control' class='container'>
  <div class='row card'>
    <div class='col-lg-3'>
      <h1>Local <div class='switch-container'><div class='switch' data-turn='1'></div></div> Visitante</h1>
    </div>
    <div class='col-lg-3 bg-d-1'>
      <h1><label>Equipo</label></h1>
      <div class='team-box'>
        <select id='teamGet'>
          <option value='sultanes'>sultanes</option>
          <option value='acereros'>acereros</option>
          <option value='algodoneros'>algodoneros</option>
          <option value='bravos'>bravos</option>
          <option value='diablos'>diablos</option>
          <option value='generales'>generales</option>
          <option value='guerreros'>guerreros</option>
          <option value='leones'>leones</option>
          <option value='olmecas'>olmecas</option>
          <option value='pericos'>pericos</option>
          <option value='piratas'>piratas</option>
          <option value='rieleros'>rieleros</option>
          <option value='rojos'>rojos</option>
          <option value='saraperos'>saraperos</option>
          <option value='tecolotes'>tecolotes</option>
          <option value='tigres'>tigres</option>
          <option value='toros'>toros</option>
        </select>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateTeam'><i class='sultanes icon-refresh'></i></button>
      </div>
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
    <div class='col-lg-3 bg-d-3'>
      <h1><label for='ballsGet'>Bolas</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' id='ballsGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateBalls'><i class='sultanes icon-refresh'></i></button>
      </div>
      <h1><label for='strikesGet'>Strikes</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' id='strikesGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateStrikes'><i class='sultanes icon-refresh'></i></button>
      </div>
      <h1><label for='outsGet'>Outs</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' id='outsGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateOuts'><i class='sultanes icon-refresh'></i></button>
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
  <meta name='viewport' content='width=device-width'>
  <link rel='shorcut icon' href='img/favicon.png'>
  <link rel='stylesheet' href='css/style.min.css'>
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

$scoreboard = "<section>
  <div class='row'>
    <div id='stats' class='col'>

    </div>
    <div id='display' class='col pd-0'>
      <video src='videos/350894231.mp4' autoplay loop>
        error
      </video>
    </div>
  </div>
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
</section>
<div id='back'></div>
";

$scoreboardSolo = "
  <div class='container' style='width:576;height:128;'>
    <div id='score'></div>
  </div>
";

$showInDisplay = mysqli_query()
$video = "<div class='container pdy-x5'>
  <div class='row'>
    <div class='col-4'>
      <div class='select-box'>
        <select id='displayGet'>
          <option value='2'>durante el juego</option>
          <option value='1'>pantalla completa</option>
        </select>
        <label for='displayGet'>Estructura</label>
      </div>
      <div class='card pd-x2 showInDisplay'>
        <h2>Mostrar</h2>
        <div class='switch-box'>
          <label for='displayGet'>Reloj</label>
          <div class='switch-container'>
            <div class='switch'></div>
          </div>
        </div>
        <div class='switch-box'>
          <label for='displayGet'>Radar</label>
          <div class='switch-container'>
            <div class='switch'></div>
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
