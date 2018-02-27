$showInDisplay = mysqli_query()
$video = "<div class='container pdy-x5'>
  <div class='row'>
    <div class='col-4'>
      <div class='select-box'>
        <select id='displayGet'>
          <option value='2'>durante el juego</option>
          <option value='1'>pantalla completa</option>
        </select>
        <label for='displayGet'>Estructura</label>
      </div>
      <div class='card pd-x2 showInDisplay'>
        <h2>Mostrar</h2>
        <div class='switch-box'>
          <label for='displayGet'>Reloj</label>
          <div class='switch-container'>
            <div class='switch'></div>
          </div>
        </div>
        <div class='switch-box'>
          <label for='displayGet'>Radar</label>
          <div class='switch-container'>
            <div class='switch'></div>
          </div>
        </div>
      </div>
    </div>
    <div class='col-8 row' id='displayPreview'>
      <div class='col-12 display'></div>
    </div>
  </div>
</div>
";
