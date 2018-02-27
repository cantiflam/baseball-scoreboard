if($_POST['update'] == 'balls'){
  $query = "UPDATE bso SET ball = '$_POST[balls]' WHERE id = 1";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}
