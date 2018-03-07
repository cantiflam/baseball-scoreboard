<?php
require_once('config.php');
$score = "<div class='row'>
  <div class='col logo'><h1>Equipo</h1></div>
";
for($i=1;$i<=10;$i++){
  $score .= "<div class='col'><h1>$i</h1></div>
  ";
  if($i==10){
    $score .= "<div class='col'></div>";
  }
}
$score .= "<div class='col'><h1>C</h1></div>
<div class='col'><h1>H</h1></div>
<div class='col'><h1>E</h1></div>
</div>
";
$result = mysqli_query($link,"SELECT * FROM score WHERE id='1'");
$sc = mysqli_fetch_array($result);
$score .="<div class='row'>
  <div class='col'><img src='img/$sc[1].png' class='logo' alt='logo $sc[1]'></div>
  <div class='col'><h1 class='score'>$sc[2]</h1></div>
  <div class='col'><h1 class='score'>$sc[3]</h1></div>
  <div class='col'><h1 class='score'>$sc[4]</h1></div>
  <div class='col'><h1 class='score'>$sc[5]</h1></div>
  <div class='col'><h1 class='score'>$sc[6]</h1></div>
  <div class='col'><h1 class='score'>$sc[7]</h1></div>
  <div class='col'><h1 class='score'>$sc[8]</h1></div>
  <div class='col'><h1 class='score'>$sc[9]</h1></div>
  <div class='col'><h1 class='score'>$sc[10]</h1></div>
  <div class='col'><h1 class='score'>$sc[11]</h1></div>
  <div class='col'></div>
  <div class='col'><h1 class='score'>$sc[12]</h1></div>
  <div class='col'><h1 class='score'>$sc[13]</h1></div>
  <div class='col'><h1 class='score'>$sc[14]</h1></div>
</div>
  ";
$result = mysqli_query($link,"SELECT * FROM score WHERE id='2'");
$sc = mysqli_fetch_array($result);
$score .="<div class='row'>
  <div class='col'><img src='img/$sc[1].png' class='logo' alt='logo $sc[1]'></div>
  <div class='col'><h1 class='score'>$sc[2]</h1></div>
  <div class='col'><h1 class='score'>$sc[3]</h1></div>
  <div class='col'><h1 class='score'>$sc[4]</h1></div>
  <div class='col'><h1 class='score'>$sc[5]</h1></div>
  <div class='col'><h1 class='score'>$sc[6]</h1></div>
  <div class='col'><h1 class='score'>$sc[7]</h1></div>
  <div class='col'><h1 class='score'>$sc[8]</h1></div>
  <div class='col'><h1 class='score'>$sc[9]</h1></div>
  <div class='col'><h1 class='score'>$sc[10]</h1></div>
  <div class='col'><h1 class='score'>$sc[11]</h1></div>
  <div class='col'></div>
  <div class='col'><h1 class='score'>$sc[12]</h1></div>
  <div class='col'><h1 class='score'>$sc[13]</h1></div>
  <div class='col'><h1 class='score'>$sc[14]</h1></div>
</div>
  ";
echo $score;
?>
