<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
?>
<?php
if(isset($_POST['all'])){
    $file = $_FILES['file'];
    $ti = $_POST['ti']; 
    $des = $_POST['des']; 
    $id = $_POST['id']; 
    // تحقق من عدم وجود أخطاء في التحميل
    if($file['error'] === UPLOAD_ERR_OK){
        // تأكد من تواجد المسار المطلوب
        $destination = $ti.'/'.$file['name'];
        move_uploaded_file($file['tmp_name'], $destination);
        echo "تم رفع الملف بنجاح!";
        mysqli_query($conn,"insert into $ti values(1000,'$des','$destination')");
        $conn->multi_query("SET @rank := 0;UPDATE $ti SET id = (@rank := @rank + 1)");
        echo "<script>location.href='admin.php'</script>";
    } else {
        echo "فشل في تحميل الملف.";
    }
}
?>

<?php
if(isset($_POST['edit'])){
$des = $_POST['des']; 
$id = $_POST['id']; 
$ti = $_POST['ti']; 
mysqli_query($conn,"update $ti set des = '$des' where id = $id ");
echo "<script>location.href='admin.php'</script>";
}
?>
<?php
if(isset($_POST['del'])){
$id = $_POST['id']; 
$ti = $_POST['ti']; 
echo "$ti | $id";
mysqli_query($conn,"delete from $ti where id = $id");
$ge = mysqli_fetch_array(mysqli_query($conn,"select * from $ti where id=$id"));
$geto = $ge['url'] ; 
unlink($geto);
$conn->multi_query("SET @rank := 0;UPDATE $ti SET id = (@rank := @rank + 1)");
echo "<script>location.href='admin.php'</script>";

}
?>