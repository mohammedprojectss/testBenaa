<?php
  if(isset($_POST['sxx'])){
$x = $_POST['xx'];
$usr = $_POST['user'];
$normal = $_POST['nusr'];
if($usr == 'admin@gmail.com'){
    setcookie('uname',$x); 
    setcookie('usr',$normal); 
    echo "<script>location.href='chat.php'</script>";
}else{
    echo "<script>location.href='getsign.php'</script>";

}
  }
  ?>