$('.play-display').click(function(){
  source = $(this).siblings().attr('src');
  $.ajax({
    url: '/uploads/setDisplay.php',
    method: 'post',
    data: "src="+source
  });
  $.ajax({
    url: '/uploads/status.php',
    method: 'post',
    data: 'status=1'
  })
});
function playNow(){
  $('#playIt').load('/uploads/playNow.txt');
  setTimeout(function(){
    playIt = $('#playIt').html();
    if(playIt.match(/.mp4*/) || playIt.match(/.avi*/)){
      $('#display').html("<video src='"+playIt+"' autoplay onended='mainImg()'></video>");
    } else {
      console.log('imagen');
      $('#display').html("<img src='"+playIt+"'>");
    }
  }, 500)
}
function mainImg(){
  $('#display').html("<img src='/img/main.jpg'>")
}
mainImg();
$('#stopRep').click(function(){
  $.ajax({
    url: '/uploads/setDisplay.php',
    method: 'post',
    data: "src=/img/main.jpg"
  });
  $.ajax({
    url: '/uploads/status.php',
    method: 'post',
    data: 'status=1'
  })
});
