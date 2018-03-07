if($_POST['update'] == 'status'){
  $query = "UPDATE displayTemplate SET $_POST[element] = '$_POST[status]' WHERE id = 1";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}
