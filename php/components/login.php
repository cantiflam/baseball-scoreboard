$login = "<section id='login' class='container-fluid'>
  <div class='row'>
    <div class='col-md-6 offset-md-3 col-lg-4 offset-lg-4 card mry-x5 pd-0'>
      <img src='img/escudo.jpg' alt='escudo de sultanes' width='100%;'>
      <form method='POST' action='php/functions.php' class='pdx-x2 mry-x3'>
        <h1>Inicia sesión</h1>
        <div class='input-container'>
          <input type='text' required id='user' name='user' autocomplete='off'>
          <label for='user'>Usuario</label>
        </div>
        <div class='input-container'>
          <input type='password' required id='pass' name='pass' autocomplete='off'>
          <label for='pass'>Contraseña</label>
        </div>
        <button type='submit' class='btn btn-principal waves-effect waves-light'>entrar</button>
      </form>
    </div>
  </div>
</section>
";
