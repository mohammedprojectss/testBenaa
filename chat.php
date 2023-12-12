<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
error_reporting(E_ERROR | E_PARSE);
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
?>
  
  <?php
  if(isset($_POST['sxx'])){
$x = $_POST['xx'];
echo "<script>alert('$x')</script>";
  }
  ?>
<script>
window.addEventListener('load', function() {
   const downchat = document.getElementById('allchat');
   if (downchat) {
      downchat.scrollTop = downchat.scrollHeight; 
   }
});
  </script>
<script>
  const allio = localStorage.getItem('uname');
  const lentxt = allio.length ; 
  console.log(lentxt);
  if(lentxt == null){
    location.href = 'getsign.php';
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

    <!--    New Division     -->

        <div class='contact' id='adi'><div id='allchat' class='mes-cont'>



        <?php
        $xv = $_COOKIE['uname'];
        $q = mysqli_query($conn,"select * from $xv");
        while($row = mysqli_fetch_array($q)){
            $tp = $row['tp'];
            $m = $row['m'];
            $tm = $row['tm'];
            if($tp == 'admin@gmail.com'){
                $thistp = 'الأدمن';
                echo "
                <div id='mess' class='come-mes'>
                <div class='content'>
                    <p class='name'>$thistp</p>
                    <p class='the-text'>$m</p>
                    <span class='date'>$tm</span>
                </div>
            </div>
                ";
            }else{
                $thistp = $tp;
                echo "
                <div id='mess' class=''>
                <div class='content' id='ur-mes-co'>
                    <p class='name'>$thistp</p>
                    <p class='the-text'>$m</p>
                    <span class='date'>$tm</span>
                </div>
            </div>
                ";
            }

        }
        ?>




</div><form action="chat.php" method='post' class='Minput'>
            <input type="text" name='msg' placeholder='اكتب هنا...'/>
            <input type="hidden" name="tp" id='setval' value=''>
            <button type='submit' name='c'>أرسل</button>
          </form>
        </div>
        <script>
            const vari = localStorage.getItem('uname');
            const gg = document.getElementById('setval');
            gg.value = vari;

        </script>
<?php
    function nowtime() {
        $time0 = time() +10200;
        $time = date("H:iA", $time0);
        return $time;
    }
if(isset($_POST['c'])){
    $tp = $_POST['tp'];
    if($tp == 'admin@gmail.com'){
      $tp2 = $_COOKIE['usr'];
      $m = $_POST['msg']; 
      $tm = nowtime();
      $get_un = mysqli_fetch_array(mysqli_query($conn,"select * from un where name = '$tp2'"));
      $get_x = $get_un['x'];
      mysqli_query($conn,"insert into $get_x values ('$tp','$m','$tm')");
      $get2 = mysqli_fetch_array(mysqli_query($conn,"select a from a where name= '$tp2'"));
      $g = (int)$get2['a'] ; 
      mysqli_query($conn,"update a set b = $g where name = '$tp2' ");
      echo "<script>location.href='chat.php';</script>";

    }else{
      $tp2 = $_COOKIE['usr'];
      $m = $_POST['msg']; 
      $tm = nowtime();
      $get_un = mysqli_fetch_array(mysqli_query($conn,"select * from un where name = '$tp2'"));
      $get_x = $get_un['x'];
      mysqli_query($conn,"insert into $get_x values ('$tp','$m','$tm')");
      $get2 = mysqli_fetch_array(mysqli_query($conn,"select count(tp) from $get_x"));
      $g = (int)$get2['count(tp)'] ; 
      mysqli_query($conn,"update a set a = $g where name = '$tp2' ");
      echo "<script>location.href='chat.php';</script>";
    }

}
?>




        <!-- SCRIPT -->

        <script>
  // localStorage.setItem('uname','ali');
  $value = localStorage.getItem('uname');
  pip = document.getElementById('pip')

console.log($value);
$one = document.getElementById('nulli'); 
$two = document.getElementById('createsign');;
if($value == 'admin@gmail.com'){
$one.innerHTML = `
<a href='admin.php'>أدمن</a>
`;
$two.innerHTML = `
<span class='uo' style='color: goldenrod;background-color: #fff;padding:4px 14px;border-radius: 6px; font-size: 18px;margin: 4px;'>AdminAccount</span>
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
pip.innerHTML= `
<li>
  <form action="pchat.php" method='post'>
          <input type="hidden" id='selee' name='xx'>
          <input  style='color:#4f4bd6;background-color: transparent;font-family:bcairo;font-size:17px;cursor:pointer;border:none;' type="submit" name='sxx' value="خدمه العملاء">
        </form>
        </li>
  `;
}
  else if($value != null){
    $two.innerHTML = `
    <span style='color: #1e1999;font-size: 18px;margin: 4px;'>${$value}</span>
    <a class='nav-reg' onclick="kick()" style='cursor: pointer;'>تسجيل الخروج</a>

    `;
    pip.innerHTML =`
    <li>
  <form action="pchat.php" method='post'>
          <input type="hidden" id='selee' name='xx'>
          <input  style='color:#4f4bd6;background-color: transparent;font-family:bcairo;font-size:17px;cursor:pointer;border:none;' type="submit" name='sxx' value="خدمه العملاء">
        </form>
        </li>
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
acco = localStorage.getItem('uname') ; 
let accoInput = document.getElementById('sel');
accoInput.value = acco;
let accoInput2 = document.getElementById('sel2');
accoInput2.value = acco;
let accoInput3 = document.getElementById('sel3');
accoInput3.value = acco;
let accoInput4 = document.getElementById('sel4');
accoInput4.value = acco;
let accoInput5 = document.getElementById('sel5');
accoInput5.value = acco;
let accoInput6 = document.getElementById('sel6');
accoInput6.value = acco;

</script>

<script>
  const mono = localStorage.getItem('uname');
  const selee = document.getElementById('selee');
  selee.value= mono; 
</script>
<script>
function disclass() {
  var element = document.getElementById("tog");
  element.setAttribute('style','display:none !important;');
 
}





function changeclass() {
  location.href = 'home.php';
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
<script>
$one = document.getElementById('nulli2'); 
if($value == 'admin@gmail.com'){
$one.innerHTML = `
<a href='admin.php'>أدمن</a>
`;
}
</script>
