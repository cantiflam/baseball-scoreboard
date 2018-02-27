if($_POST['update'] == 'error'){
  $query = "UPDATE score SET err = '$_POST[punto]' WHERE id = '$_POST[id]'";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}
