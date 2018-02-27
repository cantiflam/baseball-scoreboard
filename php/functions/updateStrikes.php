if($_POST['update'] == 'strikes'){
  $query = "UPDATE bso SET strike = '$_POST[strikes]' WHERE id = 1";
  if(mysqli_query($link,$query)){
    echo $query;
  } else {
    echo 'false';
  }
}
