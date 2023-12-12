<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
error_reporting(E_ERROR | E_PARSE);
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
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
