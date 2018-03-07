$navbar = "<nav>
  <div class='container'>
    <button type='button' class='btn' id='menuButton'><i class='sultanes icon-menu'></i></button>
    <aside class='sidenav'>
      <img src='img/escudo.jpg' class='side-img' alt='imagen de login'>";
      if($_SESSION['user']=='tablero'){
        $navbar .= "<a href=''>tablero</a>
        <a href='' id='resetScore'>restablecer pizarra</a>
        <a href='add-team.php'>modificar equipos</a>
        ";
      } else if($_SESSION['user']=='video'){
        $navbar .= "<a href='/'>Reproductor</a>
        <a href='/playlist.php'>Listas de vídeos</a>";
      }
      $navbar .= "<hr>
      <a href='php/logout.php'>cerrar sesión</a>
    </aside>
  </div>
</nav>
";
