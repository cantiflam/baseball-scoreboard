<?php
require_once('config.php');
$result = mysqli_query($link, "SELECT * FROM bso");
$row = mysqli_fetch_array($result);
$bso ="<ul>
  <li><h1>B <span class='score'>$row[ball]</span></h1></li>
  <li><h1>S <span class='score'>$row[strike]</span></h1></li>
  <li><h1>O <span class='score'>$row[outGame]</span></h1></li>
</ul>
";
echo $bso;
?>
