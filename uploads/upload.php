<?php
$dest = $_POST['folder']."/".$_FILES['fileUploaded']['name'];
echo $dest;
move_uploaded_file($_FILES['fileUploaded']['tmp_name'], $dest);
header('Location: /playlist.php?list='.$_POST['folder']);
?>
