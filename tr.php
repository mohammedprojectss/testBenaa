<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
error_reporting(E_ERROR | E_PARSE);
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
?>
<title>الأستاذة المحترفين من بناء</title>
<link rel="icon" href="asimg/logo.png">
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

</div>
    </nav>
    <ul id="nav-list" class='d' style='display:none;'>
                <li><a href="#">الصفحة الرئيسية</a></li>
                <li><a href="#">عنا</a></li>
                <li><a href="#">الخدمات</a></li>
                <li><a href="#">اتصل بنا</a></li>
            </ul>
<!-- new division -->


<div class='choose ba'>
<h1 class="subText" style="text-align: center;">جميع المعلمين و المحاضرين</h1>
  <p class="bold">أفضل المعلمين و المحاضرين لجميع الفئات و التخصصات</p><div>
  <?php
$limit = mysqli_query($conn,'select * from t ');
while($row = mysqli_fetch_array($limit)){
    $na =  $row['na'];
    $ne =  $row['ne'] ;
    $part0 =  $row['part'];
    $lang0 =  $row['lang'];
    $io = $row['io'];
    $ti = $row['ti'];
    if($part0 == 'one'){
$part = 'الإعدادي' ; 
    }else if($part0 == 'two'){
$part = 'الثانوي' ;
    }else if($part0 == 'three'){
            $part = 'الجامعي' ;
    }else{
$part = 'null' ; 

    }

    if($lang0 == 'math'){
$lang = 'الرياضيات' ; 
    }else if($lang0 == 'ph'){
$lang = 'الفيزياء' ; 
    }else if($lang0 == 'k'){
$lang = 'الكيمياء' ; 
    }else if($lang0 == 'ar'){
$lang = 'العربي' ; 
    }else if($lang0 == 'ih'){
$lang = 'الإحصاء' ; 
    }else if($lang0 == 's'){
$lang = 'العلوم' ; 
    }else if($lang0 == 's2'){
$lang = 'الأحياء' ; 
    }else if($lang0 == 'en'){
$lang = 'الإنجليزي' ; 
    }else if($lang0 == 'gr'){
$lang = 'الجغرافيا و التاريخ' ; 
    }else if($lang0 == 'kh'){
$lang = 'الفلسفة و علم المنطق' ; 
    }
    else if($lang0 == 'hm'){
$lang = 'الهندسة المدنية' ; 
    }
    else if($lang0 == 'he'){
$lang = 'هندسة العمارة' ; 
    }
else if($lang0 == 'hk'){
$lang = 'هندسة الكيمياء' ; 
    }
else if($lang0 == 'hkh'){
$lang = 'هندسة الكهرباء' ; 
    }
else if($lang0 == 'hme'){
$lang = 'الهندسة الميكانيكا' ; 
    }
else if($lang0 == 'hh'){
$lang = 'هندسة الحاسب' ; 
    }
else if($lang0 == 'hmek'){
$lang = 'الميكاترونيكس' ; 
    }
else if($lang0 == 'ht'){
$lang = 'هندسة الطاقة' ; 
    }
else if($lang0 == 'hmcar'){
$lang = 'هندسة ميكانيكا السيارات' ; 
    }
else if($lang0 == 'hdoctor'){
$lang = 'هندسة طبية' ; 
    }
else if($lang0 == 'tb'){
$lang = 'الطب البشري' ; 
    }
else if($lang0 == 'si'){
$lang = 'الصيدلة' ; 
    }
else if($lang0 == 'et'){
$lang = 'العلاج الطبيعي' ; 
    }

    else{
$lang = 'null' ; 

    }

    if($io == 'in'){
      echo "
      <form action='check.php' method='post'>
      <input type='hidden' value=''  id='elementacc' name='uname'>
      <input type='hidden' value='$ti'  name='ti'>
        <input type='hidden' id='sel' value='$part' name='part'>
<input type='hidden' id='sel' value='$lang' name='lang'>
<input type='hidden' id='sel' value='$na' name='na'>
<input type='hidden' id='sel' value='$id' name='id'>
<button type='submit' name='check' style='background-color:transparent;border:none;cursor:pointer;'>
<a class='area subText teacher'>
<h3 class='subText'>$na</h3>
<h4 class='subText'>$ne</h4>
<p class='bold'>$part $lang</p>
</a>

</button>                </form>
       </a>
      <script>
      const account = localStorage.getItem('uname');
      const getele = document.getElementById('elementacc'); 
      getele.value= account ; 
      </script>
      ";
}else{
      echo "
      <form action='notpay.php' method='post'>

      <input type='hidden' id='sel' value='' name='acc'>
      <input type='hidden' id='sel' value='$part' name='part'>
      <input type='hidden' id='sel' value='$lang' name='lang'>
      <input type='hidden' id='sel' value='$na' name='na'>
      <button type='submit' name='ss' style='background-color:transparent;border:none;cursor:pointer;'>
      <a class='area subText teacher'>
<h3 class='subText'>$na</h3>
<h4 class='subText'>$ne</h4>
<p class='bold'>$part $lang</p>
</a>

</button>

              </form>
              </a>
      ";
}

}


?>
    <!-- <a class="area subText teacher" href="/pay">احمد محسن <br> ahmad muhsen<p class="bold">مدرس إعدادي</p><i></i></a> -->

    <!-- new division -->

</div>






<footer>
      <div class='nonee'><img src="logo.png" alt="" /></div>
      <div class='ul'>
        <h3>للتواصل معنا :</h3>
        <ul>
          <li><a target='_blank' href='https://x.com/Academyen9401A?t=GsVDIH5saI6iVd1g5QOmjg&s=09' class='fa-brands fa-twitter'>Twitter</a></li>
          <li><a target='_blank' href='https://wa.me/qr/H66ZAHWFXFL2G1' class='fa-brands fa-whatsapp'>WhatsApp</a></li>
          <li><a target='_blank' href='emailto:a.academyengineer@gmail.com' class='fa-brands fa-email'>Gmail</a></li>
        </ul>
      </div>
      <div class='ul'>
        <h3>أقسام مهمة :</h3>
        <ul>
          <li><a href='tr.php' class='bold cepointer' >المعلمين</a></li>
          <li><a href='home.php' class='bold cepointer'>الصفحة الرئيسية</a></li>
          <div id='pip'>


          </div>

          <li><a href='our.php' class='bold cepointer'>عنّا</a></li>
          <li><a href='sign.php' class='bold cepointer'>تسجيل الدخول</a></li>
        </ul>
      </div>
      <div class='footer-about'>
        <h3>نبذة عنا :</h3>
        <p>منصة بناء تقدم لكم أفضل المحاضرين و المعلمين للتعلم من البيت بأفضل الأسعار , و تقدم خدمات هندسية عديدة منها...</p>
        <a href='our.php' style="cursor: pointer;">اقرأ المزيد</a>
        <p style="color:gray;margin-Top:1rem">Website Build By DCSS Team</p>
      </div>
    </footer>
    <script>
      $var_acc = localStorage.getItem('uname');
      if($var_acc == null){
        location.href = "getsign.php";
      }
    </script>
    
  
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
<style>
      footer{
        position: absolute;
        bottom: 0;
        width: 100%;
      }
    </style>
