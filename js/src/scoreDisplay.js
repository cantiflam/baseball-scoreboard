$('#displayGet').click(function(){
  display = $(this).val();
  if(display==1){
    $('#displayPreview').html("<div class='col-12 display'></div>");
  } else if(display==2){
    $('#displayPreview').html("<div class='col-3 lineup'></div><div class='col-md-6 display'></div><div class='col-3 lineup'></div><div class='col-12 scoreDisplay'></div>");
  }
});
