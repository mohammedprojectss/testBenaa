<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
error_reporting(E_ERROR | E_PARSE);
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
?>


<script>
  const allio = localStorage.getItem('uname');
  if(allio != 'admin@gmail.com'){
    location.href = 'null2.php'; 
  }
</script>
<link rel="stylesheet" href="media/style.css">
  <link rel="stylesheet" href="media/all.min.css">
  <link rel="stylesheet" href="media/style.css.map">
  <link rel="stylesheet" href="media/style.scss">
  <link rel="stylesheet" href="s.css">
<!-- Basic Division -->

 <nav id='nav'>
      <div class="logo">
        <img src="asimg/logo.png" alt="logo" />
      </div>
      <div class='links'>
        <ul>
          <a href='home.php'>الصفحة الرئيسية</a>
          <a href='our.php'>عنّا</a>
          <a href='home.php#design'>الخدمات الهندسية</a>
<div id="nulli"></div>


        </ul>
        <div class='div' id='createsign'>
          
        </div>
      </div>
      
      <div class='div'>
          <i  onclick='sh()'   style='cursor:pointer;'  class="pplus menuu fa-solid fa-list fa-2x"></i>
        </div>
        <ul id="nav-list" class='d' style='display:none;'>
                <li><a href='home.php'>الصفحة الرئيسية</a></li>
                <li><a href='our.php'>عنّا</a></li>
                <li><a href='home.php#design'>الخدمات الهندسية</a></li>
                <li>


<div id="nulli2"></div>


                </li>
  
            </ul>
    </nav>

    <style>
.ga1{
  position: absolute;
left: 30 !important;
} 
.ga2{
  position: absolute;
left: 10%;
}
    #nav-list 
 li:hover{ 
  background-color: #4444a8;
  padding: 3px 7px;
}

#nav-list li a:hover{
  margin-top: 10px;
  margin-left: 20px;
}
    #nav-list {
      display: block;
background-color: #3c3c91;
text-decoration: none;
position: fixed;
top: 0;
left: 0;
padding: 64px 30px 120px 30px;
width: 345px;
font-size: 25px;
transition: 200ms;
opacity: 1;
z-index: 209233;
    }

    #nav-list li {
transition: 200ms;

    }

    #nav-list li a {
        color: white;
        text-decoration: none;
transition: 200ms;

    }
    ul {
  list-style: none;
transition: 200ms;

}
.pplus{
    display: none;
  }
@media screen and (max-width: 650px) {
  .togglec {
    display: none;
  } 
  .pplus{
    display: inline-block;
  }
  .uo {
    display: none;
  }
  .ga1{
    position: inline-block !important;
left: 1 !important;
}
}
@media screen and (max-width: 900px){
  .togglec {
    display: none;
  } 
  .pplus{
    display: inline-block;
  }
  .uo {
    display: none;
  }
  .ga1{
left: -60 !important;
}
}
@media screen and (min-width: 1720px){
  .ga1{
left: 100 !important;
}
}
.ga1:hover{
color: red !important;
}
</style>




<title>التعديل على الكورس</title>
<link rel="icon" href="asimg/logo.png">
<div class='coed'>
<?php
if(isset($_POST['sub'])){
$id = $_POST['id'];
$getplo = $_POST['getpl']; 
$q = mysqli_fetch_array(mysqli_query($conn,"select * from t where id = $id"));
$na = $q['na'] ; 
$des = $q['des'];
$sale = $q['sale'];
$ti = $q['ti'];
echo "
<h1 class='subText'>
كورس 
<spano style='
color: #60247c;
background-color: #f0f0f0;
margin: 10px;
padding: 0 4px;
border-radius: 4px;
'>$getplo</spano>
المقدم من الأستاذ
<spano style='
color: #60247c;
background-color: #f0f0f0;
margin: 10px;
padding: 0 4px;
border-radius: 4px;
'>$na</spano>
</h1>
";
}
?>
<?php
if(isset($_POST['edit'])){
    $des= $_POST['des'];
    $id = $_POST['id'];
    $sale = $_POST['sale'];
    mysqli_query($conn,"update t set des = '$des' where id = $id");
    mysqli_query($conn,"update t set sale = '$sale' where id = $id");
    echo "<script>location.href='admin.php'</script>";
}
?>
            <br>
            <form action="cedit.php" method='post'>
                <input class='inpu1t' type="hidden" value='<?=$id;?>' name='id' placeholder='وصف الكورس'/>
                <input class='inpu1t' type="text" value='<?=$des;?>' name='des' placeholder='وصف الكورس'/>
                <input class='inpu2t' type='number' value='<?=$sale;?>' name='sale' placeholder='سعر الكورس'/>
                <button class='bott' type='submit' name='edit' style='margin:1rem;margin-Bottom:2rem'>تعديل</button>
                <?=$des;?>
                <span class='bold'>السعر هو : <?=$sale;?>$</span>
            </form>
            <div class='theList'>
                <p class='bold'>فيديوهات الكورس</p>
                <?php
                $qq = mysqli_query($conn,"select * from $ti");
                while($row = mysqli_fetch_array($qq)){
                  $des = $row['des'];
                  $u = $row['url'];
                  $id = $row['id'];
                  echo "
                  <div class='lista' > 
                  <i class='fa-solid fa-photo-video fa-2x'></i>
                   <form action='try.php' method='post'>

                   <input type='text' title='$u' value='$des' name='des'>
                   <input type='hidden' name='id' value='$id'>
                   <input type='hidden' name='ti' value='$ti'>
                   <button type='submit' name='edit'  class='ga1' style='
                   background-color: transparent;
border: none;
margin-left: 200px;
                   '> 
                   <i class='fa-solid fa-2x fa-pen'></i>

                   </button>
                   </form>

                  <form action='try.php' method='post'>
                  <input type='hidden' name='id' value='$id'>
                  <input type='hidden' name='ti' value='$ti'>
                  <button type='submit' class='ga2' name='del' style='
                  background-color: transparent;
border: none;
                  '> 
                  <i class='fa-solid fa-remove fa-2x delete'></i>
                  </button>
                  </form>
                   </i></div>

                  ";
                }
                ?>
            </div>
            <!-- <form>
              <div class="upload">
                    <i class='fa-solid fa-upload fa-2x'></i> <br /> <label htmlFor='upload'>اختيار فيديو للرفع</label> <input type="file" name='video' id='upload'/>
                </div>
                <input type="text" name='videoTitle' placeholder='عنوان الفيديو' style='width:80%;'/>
                <button class='bott' style='margin:1rem;margin-Bottom:2rem'>رفع الفيديو</button> -->
            <!-- </form>  -->

            <!-- -------------- <hr> --> <br><br>
            <form action="try.php" method="POST" enctype="multipart/form-data">
            <input type="text" name='des' placeholder='عنوان الفيديو' style='width:80%;'/>
            <input type="hidden" name='id' value="<?=$id;?>" readonly placeholder='عنوان الفيديو' style='width:80%;'/>
            <input type="hidden" name='ti' value="<?=$ti;?>" readonly placeholder='عنوان الفيديو' style='width:80%;'/>
    <label for="file">اختر الفيديو:</label>
    <input type="file" name="file" id="file" style='cursor: pointer;'><br><br>
    <input type="submit" name='all' style='cursor: pointer;' value="تحميل الملف">
</form>
        </div>

      
<script>
  // localStorage.setItem('uname','ali');
  $value = localStorage.getItem('uname');
console.log($value);
$one = document.getElementById('nulli'); 
$two = document.getElementById('createsign');;
if($value == 'admin@gmail.com'){
$one.innerHTML = `
<a href='admin.php'>أدمن</a>
`;
$two.innerHTML = `
<span class='uo' id='uo' style='color: goldenrod;background-color: #fff;padding:4px 14px;border-radius: 6px; font-size: 18px;margin: 4px;'>AdminAccount</span>
<a class='nav-reg' onclick="kick()" style='cursor: pointer;'>تسجيل الخروج</a>
<style>
.uo::selection{
color: white;
background-color: goldenrod;
}
</style>
`;
}else if($value == null ){
$two.innerHTML = `

<a class='nav-reg'  href='create.php'>إنشاء حساب</a>
<a class='nav-log'  href='sign.php'>تسجيل الدخول</a>
`;
}
  else if($value != null){
    $two.innerHTML = `
    <span style='color: #1e1999;font-size: 18px;margin: 4px;'>${$value}</span>
    <a class='nav-reg' onclick="kick()" style='cursor: pointer;'>تسجيل الخروج</a>

    `;
}else{
  console.log(null); 
}
function kick(){
localStorage.removeItem('uname');
localStorage.removeItem('pass');
window.location.href = 'http://localhost/server/ajdar/sign.php';
}

</script>

<script>
  const mono = localStorage.getItem('uname');
  const selee = document.getElementById('selee');
  selee.value= mono; 
</script>

<script>
$one = document.getElementById('nulli2'); 
if($value == 'admin@gmail.com'){
$one.innerHTML = `
<a href='admin.php'>أدمن</a>
`;
}
</script>
<script>
dolor = 0 ; 
function sh() {
if(dolor == 0){
  var menuList = document.getElementById("nav-list");
    menuList.style.display = 'block';
    menuList.style.top = 70;
    dolor = 1 ; 
}else{
  var menuList = document.getElementById("nav-list");
    menuList.style.display = 'none';
    dolor = 0 ; 

}
}
</script>
