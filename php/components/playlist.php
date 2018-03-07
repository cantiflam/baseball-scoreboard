$data = scandir('./uploads/');
$i = 0;
foreach($data as $value){
  if($value != '.' && $value != '..' && !preg_match('/php*/',$value)){
    $list[$i] .= $value;
  }
  $i++;
}
if(isset($_GET['list'])){
  $dirList = $_GET['list'];
  $data = scandir("./uploads/$dirList/");
  foreach($data as $value){
    if($value != '.' && $value != '..' && !preg_match('/php*/',$value)){
      $img[$i] .= $value;
    }
    $i++;
  }
}
$playlist = "<div class='container-fluid row pdy-x5'>
  <div class='col-md-3'>
    <button type='button' class='btn btn-principal' id='uploadBtn'>subir archivo</button>
    <button type='button' class='btn btn-principal' id='newFolder'>nueva carpeta</button>
    <div class='lists'>";
    foreach($list as $value){
      $playlist .= "<a href='playlist.php?list=$value'>$value</a>
      ";
    }
    $playlist .= "</div>
    </div>
  <div class='col-md-9 pdy-x2'>
    <h1 class='white-text uppercase'>$dirList</h1>
    <div class='row'>";
      foreach($img as $value){
        if(preg_match("/\.(jpg|png|jpeg|gif)$/",$value)){
          $playlist .= "<div class='col-md-4 col-sm-6 playContent'>
            <img src='/uploads/$dirList/$value' class='imgList'>
            <div class='play-display'>Reproducir en pantalla <i class='sultanes icon-play_arrow'></i></div>
          </div>";
        } else if(preg_match("/\.(mp4|avi|flv|mpeg)$/",$value)) {
          $playlist .= "<div class='col-md-4 col-sm-6 playContent'>
            <video src='/uploads/$dirList/$value' class='vidList' controls audio='off' preload>
              error al visualizar vídeo
            </video>
            <div class='play-display'>Reproducir en pantalla <i class='sultanes icon-play_arrow'></i></div>
          </div>";
        }
      }
      $playlist .= "</div>
  </div>
</div>
";
$playlist .= "<div class='container pdy-x5 add-video card'>
  <h2>Subir archivo</h2>
  <form action='/uploads/upload.php' method='post' class='row' enctype='multipart/form-data'>
    <div class='col-md-3'>
      <input type='file' value='subir vídeo' required name='fileUploaded'>
    </div>
    <div class='col-md-3 input-container'>
      <select name='folder'>
        <option value=''>Seleccione lista</option>";
        foreach($list as $value){
          $playlist .= "<option value='$value'>$value</option>";
        }
        $playlist .= "</select>
    </div>
    <div class='col-md-3'>
      <button type='submit' class='btn btn-principal waves-effect waves-light'>enviar</button>
    </div>
    <div class='col-12 center-text'>
      <button type='reset' class='btn close white-text' data-target='.add-video'>cerrar <i class='sultanes icon-close'></i></button>
    </div>
  </form>
</div>
<div class='container-fluid pdy-x5 add-folder card'>
  <h2>Crear nueva carpeta</h2>
  <form class='row' action='/uploads/mkdir.php' method='post'>
    <div class='col'>
      <p>Solamente se permiten letras y/o números. Las palabras se separan con \"-\" </p>
    </div>
    <div class='col'>
      <div class='input-container'>
        <input type='text' name='folderName' required id='folderName'>
        <label for='folderName'>Nombre</label>
      </div>
    </div>
    <div class=col>
      <button type='submit' name='submit' class='btn btn-principal waves-effect waves-light'>crear</button>
    </div>
    <div class='col-12 center-text'>
      <button type='reset' class='btn close white-text' data-target='.add-folder'>cerrar <i class='sultanes icon-close'></i></button>
    </div>
  </form>
</div>
";
