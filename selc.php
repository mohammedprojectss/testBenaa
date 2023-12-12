<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
?>
<?php
if(isset($_POST['getc'])){
    $ti = $_POST['ti'];
    $info = mysqli_query($conn,"select * from $ti");
    while($get = mysqli_fetch_array($info)){
        $link =  $get['v'];
        $l = explode('.',$link);
        $l2 = $l[1] ;
        $desc = $get['des'];
        if(trim(strtolower($l2)) == 'png' || trim(strtolower($l2)) == 'gif' || trim(strtolower($l2)) == 'svg' || trim(strtolower($l2)) == 'jpg'){
            echo "<img src='$link' width='150'> ";
            echo "<br> $desc ~> <a href='$link' download='photoLesson'>click to download</a>";
            echo "<br><br>";
        }elseif(trim(strtolower($l2)) == 'mp4' || trim(strtolower($l2)) == 'mp3'){
            echo "<video src='$link' width='200' controls></video>" ; 
            echo "<br> $desc ~> <a href='$link' download='videoLesson'>click to download</a>";
            echo "<br><br>";
        }else{
            echo "ERROR";
        }
    }
// video || photo > description > Download 

}
?>
