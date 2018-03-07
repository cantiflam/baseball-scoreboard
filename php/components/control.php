$control = "<div class='arrow'></div>
<section id='control' class='container'>
  <div class='row card'>
    <div class='col-lg-4'>
      <h1>Local <div class='switch-container'><div class='switch' data-turn='1'></div></div> Visitante</h1>
      <h1><label for='scoreGet'>Marcador</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' id='scoreGet'>
        <select id='scoreSelect'>
          <option value='sc1'>Entrada 1</option>
          <option value='sc2'>Entrada 2</option>
          <option value='sc3'>Entrada 3</option>
          <option value='sc4'>Entrada 4</option>
          <option value='sc5'>Entrada 5</option>
          <option value='sc6'>Entrada 6</option>
          <option value='sc7'>Entrada 7</option>
          <option value='sc8'>Entrada 8</option>
          <option value='sc9'>Entrada 9</option>
          <option value='sc10'>Entrada 10</option>
        </select>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateScore'><i class='sultanes icon-refresh'></i></button>
      </div>
    </div>

    <div class='col-lg-3 bg-d-2'>
      <h1><label for='hitsGet'>Hits</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' id='hitsGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateHits'><i class='sultanes icon-refresh'></i></button>
      </div>
      <h1><label for='errorGet'>Errores</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' id='errorGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateError'><i class='sultanes icon-refresh'></i></button>
      </div>
    </div>
    <div class='col bg-d-3'>
      <h1><label for='ballsGet'>Bolas</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' max='2' id='ballsGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateBalls'><i class='sultanes icon-undo'></i></button>
      </div>
    </div>
    <div class='col bg-d-3'>
      <h1><label for='strikesGet'>Strikes</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' max='2' id='strikesGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateStrikes'><i class='sultanes icon-undo'></i></button>
      </div>
    </div>
    <div class='col bg-d-3'>
      <h1><label for='outsGet'>Outs</label></h1>
      <div class='number-box'>
        <input type='number' value='0' min='0' max='2' id='outsGet'>
        <button type='button' class='btn btn-principal waves-effect waves-light' id='updateOuts'><i class='sultanes icon-undo'></i></button>
      </div>
    </div>
    <div id='score' class='pdx-x2'></div>
    <div id='bso'></div>
  </div>
</section>
";
