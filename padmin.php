<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
?>
<link rel="stylesheet" href="media/style.css">
  <link rel="stylesheet" href="media/all.min.css">
  <link rel="stylesheet" href="media/style.css.map">
  <link rel="stylesheet" href="media/style.scss">
  <link rel="stylesheet" href="s.css">
<div id='all'></div>
<?php
if(isset($_POST['sub'])){
$na = $_POST['na']; 
$ne = $_POST['ne']; 
$pl = $_POST['pl']; 
$io = $_POST['in-out'];
$ti = trim(strtolower($_POST['title']));
if($ti == 'asimg' || $ti == 'media' || $ti == 'webfonts'){
die("
<center>
<h1 style='color: red; margin-top: 40px;'>لا يمكنك تسميه الكورس ب <span style='color: blue;background-color: #eee;'>$ti</span></h1>
</center>
");
}
$arr = explode(' ',$pl) ;
$part0 = $arr[0];
$lang0 = $arr[1];
if($part0 == 'الإعدادي'){
    $part = 'one';
}
else if($part0 == 'الثانوي'){
    $part = 'two';
}
else if($part0 == 'الجامعي'){
    $part = 'three';
}
else{
    $part = 'null';
}

if($lang0 == 'الرياضيات'){
    $lang = 'math';
}
else if($lang0 == 'الفيزياء'){
    $lang = 'ph';
}
else if($lang0 == 'الكيمياء'){
    $lang = 'k';
}
else if($lang0 == 'العربي'){
    $lang = 'ar';
}
else if($lang0 == 'الإحصاء') {
    $lang = 'ih';   
}
else if($lang0 == 'العلوم'){
    $lang = 's';   
}
else if($lang0 == 'الأحياء'){
    $lang = 's2';   
}
else if($lang0 == 'الإنجليزي'){
    $lang = 'en';   
}
else if($lang0 == 'التاريخ'){
    $lang = 'gr';   
}
else if($lang0 == 'الفلسفة'){
    $lang = 'kh';   
}
else if($lang0 == 'مدنية'){
    $lang = 'hm';   
}  
else if($lang0 == 'عمارة'){
    $lang = 'he';   
}    
else if($lang0 == 'كيمياء'){
    $lang = 'hk';   
}    
else if($lang0 == 'كهرباء'){
    $lang = 'hkh';   
}   
else if($lang0 == 'ميكانيكا'){
    $lang = 'hme';   
}
else if($lang0 == 'حاسب'){
    $lang = 'hh';   
}
else if($lang0 == 'ميكاترونيكس'){
    $lang = 'hmek';   
}
else if($lang0 == 'طاقة'){
    $lang = 'ht';   
} 
else if($lang0 == 'سيارات'){
    $lang = 'hmcar';   
}
else if($lang0 == 'طبية'){
    $lang = 'hdoctor';   
} 
else if($lang0 == 'بشري'){
    $lang = 'tb';   
}
else if($lang0 == 'صيدلة'){
    $lang = 'si';   
}
else if($lang0 == 'طبيعي'){
    $lang = 'et';   
}
else{
    $lang = $lang0;
}

if($io == 'in'){
    mysqli_query($conn,"insert into t (id,na,ne,part,lang,io,sale,des,ti) values (1000,'$na','$ne','$part','$lang','$io','50','no descripition','$ti')");
    mysqli_query($conn,"create table $ti (id int,des varchar(255),url varchar(255))");
    mkdir("$ti");
    $conn->multi_query("SET @rank := 0;UPDATE t SET id = (@rank := @rank + 1)");
    echo "<script>location.href='admin.php#thist'</script>";
}else{
    mysqli_query($conn,"insert into t (id,na,ne,part,lang,io) values (1000,'$na','$ne','$part','$lang','$io')");
    $conn->multi_query("SET @rank := 0;UPDATE t SET id = (@rank := @rank + 1)");
    echo "<script>location.href='admin.php#thist'</script>";
    }
}

echo "<script></script>";
?>
    <!-- mysqli_query($conn,"insert into t (id,na,ne,part,lang,io,sale,des,ti) values (1000,'$na','$ne','$part','$lang','$io','50','no descripition','$ti')");
    mysqli_query($conn,"create table $ti (id int,des varchar(255),url varchar(255))");
    mkdir("$ti");
    $conn->multi_query("SET @rank := 0;UPDATE t SET id = (@rank := @rank + 1)");
    echo "<script>location.href='admin.php'</script>"; -->


<?php
function deleteDirectory($dirPath) {
    if (!is_dir($dirPath)) {
        return;
    }

    $files = glob($dirPath . '/*');
    
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDirectory($file);
        } else {
            unlink($file);
        }
    }

    rmdir($dirPath);
}
?>



<?php
if(isset($_POST['del1'])){
    $idw = (int)$_POST['id1'];
    $tiw = $_POST['ti'];
    if(strlen($tiw) > 2){
        mysqli_query($conn,"delete from t where id = $idw");
        $conn->multi_query("SET @rank := 0;UPDATE t SET id = (@rank := @rank + 1)");
        $fph = "$tiw";
deleteDirectory($fph);
$conn = mysqli_connect('localhost','root','12345','ajdar');
mysqli_query($conn,"drop table $tiw ");
        echo "<script>location.href='admin.php#thist'</script>";
    }else{
    mysqli_query($conn,"delete from t where id = $idw");
    $conn->multi_query("SET @rank := 0;UPDATE t SET id = (@rank := @rank + 1)");
    echo "<script>location.href='admin.php#thist'</script>";
}
}
?>
<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
if(isset($_POST['del2'])){
    $idw = (int)$_POST['id2'];
    mysqli_query($conn,"delete from s where id = $idw");
    $conn->multi_query("SET @rank := 0;UPDATE s SET id = (@rank := @rank + 1);");
    echo "<script>location.href='admin.php'</script>";
}
?>

<script>
    $value = localStorage.getItem('uname');
console.log($value);
$one = document.getElementById('all');
if($value != 'admin@gmail.com'){
$one.innerHTML = 
`
<div id="all" class="magidopsmc">
<center>
<div style="padding-right: 6px;"><br>
<h1 style="color: red;">لم يتم العثور </h1>
<p style="padding-right: 10px;">هذه الصفحة غير متواجدة في موقع بناء !! <a href="home.php" class="cry">العودة للصفحة الرئيسية</a></p>
</div>
</center>
<style>
.cry{
    color: #008000;
    background-color: #eee;
    text-decoration: none;
    font-size: 17px;
    padding:3px 7px ;
    margin-right:12px ;
    transition: 300ms;
  }
  .cry:hover{
    background-color: #008000;
    color: white;
    border-radius: 11px;
  }
  p{
  margin-top: 10px;
  }
  center{
    margin-top:24px ;
  }
</style>
</div>
`
}
</script>
