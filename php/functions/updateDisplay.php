if($_POST['update'] == 'display'){
  $query = "UPDATE displayTemplate SET display = '$_POST[display]' WHERE id = 1";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}
