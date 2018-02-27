<?php
require_once('config.php');
$result = mysqli_query($link,"SELECT * FROM displayTemplate WHERE id=1");
$show = mysqli_fetch_array($result);
$scoreBack = "<script async>
  if($show[display]==1){
    $('#display').addClass('fullscreen');
  } else {
    $('#display').removeClass('fullscreen');
  }
</script>
";
echo $scoreBack;
?>
