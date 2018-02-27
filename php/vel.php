<?php
require_once('config.php');
$link = mysqli_connect(SERVER,USER,PASS,DB);
$result = mysqli_query($link,"SELECT * FROM radar");
$row = mysqli_fetch_array($result);
$vel = "<div class='kph'>$row[tiempo]<span>k/h</span></div>
";
echo $vel;
?>
