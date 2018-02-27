if(isset($_POST['user'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $res = mysqli_query($link,"SELECT * FROM users WHERE username = '$user'");
  $usr = mysqli_fetch_array($res);
  if($pass == $usr['password']){
    $_SESSION['user'] = $user;
  }
  header('Location: /');
}
