<?php
require_once('config.php');
$result = mysqli_query($link,"SELECT * FROM radar");
$row = mysqli_fetch_array($result);
$vel = "<div class='kph'>$row[tiempo]<span>k/h</span></div>
";
echo $vel;
?>
