if($_POST['update'] == 'team'){
  $query = "UPDATE score SET name = '$_POST[team]' WHERE id = '$_POST[id]'";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}
