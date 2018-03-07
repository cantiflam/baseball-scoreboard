<?php
$dirName = $_POST['folderName'];
if(mkdir($dirName)){
  echo "true";
} else {
  echo "false";
}
header('Location: /playlist.php');
?>
