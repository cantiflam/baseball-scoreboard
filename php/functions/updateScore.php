if($_POST['update'] == 'score'){
  $query = "UPDATE score SET $_POST[score] = '$_POST[punto]' WHERE id = '$_POST[id]'";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}
