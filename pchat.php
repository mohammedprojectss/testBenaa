<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
?>
 <?php
  if(isset($_POST['sxx'])){
$x = $_POST['xx'];
if(strlen($x) > 4){
    $get_un = mysqli_fetch_array(mysqli_query($conn,"select * from un where name = '$x'"));
    $xvalue = $get_un['x'];
    setcookie('uname',$xvalue); 
    setcookie('usr',$x); 
    echo "<script>location.href='chat.php'</script>";
}else{
    echo "<script>location.href='getsign.php'</script>";

}
  }
  ?>