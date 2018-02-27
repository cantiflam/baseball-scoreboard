console.log('Declaramos variables, no la guerra');
function time(){
  t = new Date();
  hour = t.getHours(), mins = t.getMinutes(), secs = t.getSeconds();
  if(hour<=9){hour = "0"+hour;}
  if(mins<=9){mins = "0"+mins;}
  if(secs<=9){secs = "0"+secs;}
  clock = $('#clock');
  clock.html(hour+":"+mins+":"+secs);
}
setInterval(time, 1000);

$('.switch-container').click(function(){
  $('.arrow').toggleClass('active');
  $(this).children().toggleClass('active');
  turn = $(this).children();
  if(turn.data('turn')==1){
    turn.data('turn',2);
  } else {
    turn.data('turn',1);
  }
});
$('#updateScore').click(function(){
  id = "&id="+$('.switch').data('turn');
  sc = "&score="+$('#scoreSelect').val();
  pt = "&punto="+$('#scoreGet').val();
  $.ajax({
    url: 'php/functions.php',
    data: 'update=score'+id+sc+pt,
    method: 'post'
  })
});
$('#updateHits').click(function(){
  id = "&id="+$('.switch').data('turn');
  pt = "&punto="+$('#hitsGet').val();
  $.ajax({
    url: 'php/functions.php',
    data: 'update=hits'+id+pt,
    method: 'post'
  })
});
$('#updateError').click(function(){
  id = "&id="+$('.switch').data('turn');
  pt = "&punto="+$('#errorGet').val();
  $.ajax({
    url: 'php/functions.php',
    data: 'update=error'+id+pt,
    method: 'post'
  })
})
$('#updateTeam').click(function(){
  id = "&id="+$('.switch').data('turn');
  team = "&team="+$('#teamGet').val();
  $.ajax({
    url: 'php/functions.php',
    data: 'update=team'+id+team,
    method: 'post'
  })
})
$('#updateBalls').click(function(){
  $.ajax({
    url: 'php/functions.php',
    data: 'update=balls&balls='+$('#ballsGet').val(),
    method: 'post'
  })
})
$('#updateStrikes').click(function(){
  $.ajax({
    url: 'php/functions.php',
    data: 'update=strikes&strikes='+$('#strikesGet').val(),
    method: 'post'
  })
})
$('#updateOuts').click(function(){
  $.ajax({
    url: 'php/functions.php',
    data: 'update=outs&outs='+$('#outsGet').val(),
    method: 'post'
  })
})
