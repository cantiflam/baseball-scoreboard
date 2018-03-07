
$addTeam = "<div class='container pdy-x2'>
  <form action='php/updateTeam.php' method='post'>
    <div class='row'>
      <div class='col-md-6 row pdx-1'>
        <h1 class='col-12 white-text'>Equipo local</h1>
        ";
        $i=0;
        $team = mysqli_query($link,"SELECT * FROM players where team= 'local'");
          while($player = mysqli_fetch_array($team)){
          $addTeam .= "<div class='col-lg-2'>
            <div class='input-container'>
              <input type='text' name='playerNumberLocal$player[id]' id='playerNumberLocal$player[id]' required value='$player[number]'>
              <label for='playerNumberLocal$player[id]'>número</label>
            </div>
          </div>
          <div class='col-lg-8'>
            <div class='input-container'>
              <input type='text' name='playerNameLocal$player[id]' id='playerNameLocal$player[id]' required value='$player[name]'>
              <label for='playerNameLocal$player[id]'>nombre del jugador</label>
            </div>
          </div>
          <div class='col-lg-2'>
            <div class='input-container'>
              <input type='text' name='playerPositionLocal$player[id]' id='playerPositionLocal$player[id]' required value='$player[position]'>
              <label for='playerPositionLocal$player[id]'>posición</label>
            </div>
          </div>
          ";
        }
        $addTeam .= "</div>
        <div class='col-md-6 row'>
          <h1 class='col-12 white-text'>Equipo visitante</h1>
          ";
          $team = mysqli_query($link,"SELECT * FROM players WHERE team = 'visitante'");
          while($player = mysqli_fetch_array($team)){
            $addTeam .= "<div class='col-lg-2'>
              <div class='input-container'>
                <input type='text' name='playerNumberVisitante$player[id]' id='playerNumberVisitante$player[id]' required value='$player[number]'>
                <label for='playerNumberVisitante$player[id]'>número</label>
              </div>
            </div>
            <div class='col-lg-8'>
              <div class='input-container'>
                <input type='text' name='playerNameVisitante$player[id]' id='playerNameVisitante$player[id]' required value='$player[name]'>
                <label for='playerNameVisitante$player[id]'>nombre del jugador</label>
              </div>
            </div>
            <div class='col-lg-2'>
              <div class='input-container'>
                <input type='text' name='playerPositionlVisitante$player[id]' id='playerPositionVisitante$player[id]' required value='$player[position]'>
                <label for='playerPositionVisitante$player[id]'>posición</label>
              </div>
            </div>
            ";
          }
          $addTeam .= "</div>
        </div>
        <button type='submit' class='btn btn-principal waves-effect waves-light'>enviar</button>
  </form>
</div>
";
