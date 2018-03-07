<?php
require_once('config.php');
$team = mysqli_query($link,"SELECT * FROM players WHERE team = '".$_GET['team']."'");
$lineup = "<div class='pdy-x5'>
<h1>$_GET[team]</h1>
<hr>
";
while($player = mysqli_fetch_array($team)){
  $lineup .= "<div class='row'>
    <div class='col-1'>$player[number]</div>
    <div class='col-9'>$player[name]</div>
    <div class='col-1'>$player[position]</div>
  </div>";
}
$lineup .= "</div>";
echo $lineup;
?>
