$('document').ready(function(){
  score = setInterval(function(){
    $('#score').load('php/score.php');
    $('#bso').load('php/bso.php');
    $('#vel').load('php/vel.php');
    $('#back').load('php/back.php');
    $('#lineupLocal').load('php/lineup.php?team=local');
    $('#lineupVisitante').load('php/lineup.php?team=visitante');
  },1000);
});
