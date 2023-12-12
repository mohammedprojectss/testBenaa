<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
?>

<?php
if(isset($_POST['get'])){
$ti = $_POST['nameti']; 
$mail =$_POST['acc'] ; 
$get = mysqli_fetch_array(mysqli_query($conn,"select * from users where acc = '$mail'")); 
$with = $get['c'] . ',' . $ti; 
mysqli_query($conn,"update users set c = '$with' where acc = '$mail'");
echo "<script>location.href='admin.php';</script>";
}
?>