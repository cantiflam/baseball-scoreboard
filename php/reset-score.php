<?php
require_once('config.php');
mysqli_query($link,"UPDATE score SET sc1 = NULL, sc2 = NULL, sc3 = NULL, sc4 = NULL, sc5 = NULL, sc6 = NULL, sc7 = NULL, sc8 = NULL, sc9 = NULL, sc10 = NULL, carr = NULL, hits = NULL, err = NULL WHERE id > 0");

?>
