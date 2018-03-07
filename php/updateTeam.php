<?php
require('config.php');
$player = array();
$i=0;
foreach($_POST as $value){
  $player[$i] = $value;
  $i++;
}
$l = 1;
$j = 1;
$k = 2;
for($i=0;$i<50;$i+=3){
  $query = "UPDATE players SET `number` = '$player[$i]', `name` = '$player[$j]', `position` = '$player[$k]' WHERE id = $l";
  echo $query.'<br>';
  mysqli_query($link,$query);
  $j+=3;
  $k+=3;
  $l++;
}
header('Location: /add-team.php');
?>
