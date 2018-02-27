if($_POST['update'] == 'outs'){
  $query = "UPDATE bso SET outGame = '$_POST[outs]' WHERE id = 1";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}
