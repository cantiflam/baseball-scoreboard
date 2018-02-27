if($_POST['update'] == 'hits'){
  $query = "UPDATE score SET hits = '$_POST[punto]' WHERE id = '$_POST[id]'";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}
