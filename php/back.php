<?php
require_once('config.php');
$result = mysqli_query($link,"SELECT * FROM displayTemplate WHERE id=1");
$show = mysqli_fetch_array($result);
$scoreBack = "<script async>
  if($show[display]==1){
    $('#display').addClass('fullscreen col-12').removeClass('col-8');
  } else if($show[display]==2){
    $('#display').removeClass('fullscreen col-12').addClass('col-8');
    $('#lineupLocal').fadeIn();
    $('#lineupVisitante').fadeIn();
  } else if($show[display]==3){
    $('#lineupLocal').fadeOut(300);
    $('#lineupVisitante').fadeOut(300);
    $('#display').addClass('col-12').removeClass('fullscreen col-8');
  }
  if($show[play]==1){
    playNow();
    $.ajax({
      url: '/uploads/status.php',
      method : 'post',
      data: 'status=0'
    })
  }
  if($show[clock]==1){
    $('#clock').fadeIn();
  } else{
    $('#clock').fadeOut();
  }
  if($show[radar]==1){
    $('#vel').fadeIn();
  } else {
    $('#vel').fadeOut();
  }
</script>
";
echo $scoreBack;
?>
