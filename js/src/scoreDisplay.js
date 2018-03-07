$('#displayGet').click(function(){
  display = $(this).val();
  if(display==1){
    $('#displayPreview').html("<div class='col-12 display'></div>");
  } else if(display==2){
    $('#displayPreview').html("<div class='col-3 lineup'></div><div class='col-md-6 display'></div><div class='col-3 lineup'></div><div class='col-12 scoreDisplay'></div>");
  }
  $.ajax({
    url: 'php/functions.php',
    data: 'update=display&display='+display,
    method: 'post'
  }) 
});
$('.switch-container').click(function(){
  if($(this).data('status')==1){$(this).data('status','0');}
  else{$(this).data('status','1');}
  update = "update=status";
  data = "&element="+$(this).data('update');
  stat = "&status="+$(this).data('status');
  console.log(update+data+stat);
  $.ajax({
    url: 'php/functions.php',
    data: update+data+stat,
    method: 'post'
  })
});
