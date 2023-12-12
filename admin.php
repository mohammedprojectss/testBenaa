<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
error_reporting(E_ERROR | E_PARSE);
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
?>
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
#nav-list li:hover{ 
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
@media screen and (max-width: 1000px) {
  .togglec {
    display: none;
  } 
  .pplus{
    display: inline-block;
  }
  #cpo {
    display: none;
  }
}
</style>




<!-- new division -->
        <div
        id='all'
        class='magidopsmc' 
        >
        <title>لوحة التحكم</title>
        <link rel="icon" href="asimg/logo.png">
        <form class='pay' style="margin-Top:3rem;" action='padmin.php' method='post'>
          <h1 class='subText'>إضافة أستاذ</h1>
          <input class='input' type="text" name='na' id='na' placeholder='الاسم بالعربي' required/>
          <input class='input' type="text" name='ne' id='ne' placeholder='الاسم بالانجليزي'/>
          <input class='input' type="text" name='title' id='title' placeholder='إسم الكورس    {اترك هذا الحقل فراغا ان كان كورس المعلم خارج الموقع ويجب ان يكون الاسم بالانجليزي + ان يكون كلمه واحده دون اي فارغات او اي علامات مثال : onecoursemath !!}'/>
          <select class='select' name="pl" required>
            <optgroup label='الإعدادي'>
              <option value="الإعدادي الرياضيات">رياضيات</option>
              <option value="الإعدادي العربي">عربي</option>
              <option value="الإعدادي الفيزياء">فيزياء</option>
              <option value="الإعدادي الكيمياء">كيمياء</option>
              <option value="الإعدادي الإنجليزي">إنجليزي</option>
              <option value="الإعدادي الأحياء">أحياء</option>
              <option value="الإعدادي العلوم">علوم</option>
              <option value="الإعدادي الإحصاء">إحصاء</option>
              <option value="الإعدادي التاريخ">تاريخ و جغرافيا</option>
              <option value="الإعدادي الفلسفة">فلسفة</option>
            </optgroup>
            <optgroup label='الثانوي'>
              <option value="الثانوي الرياضيات">رياضيات</option>
              <option value="الثانوي العربي">عربي</option>
              <option value="الثانوي الفيزياء">فيزياء</option>
              <option value="الثانوي الكيمياء">كيمياء</option>
              <option value="الثانوي الإنجليزي">إنجليزي</option>
              <option value="الثانوي الأحياء">أحياء</option>
              <option value="الثانوي العلوم">علوم</option>
              <option value="الثانوي الإحصاء">إحصاء</option>
              <option value="الثانوي التاريخ">تاريخ و جغرافيا</option>
              <option value="الثانوي الفلسفة">فلسفة</option>
            </optgroup>
            <optgroup label='جامعي'>
              <option value="الجامعي مدنية">هندسة مدنية</option>
              <option value="الجامعي عمارة">هندسة عمارة</option>
              <option value="الجامعي كيمياء">هندسة كيمياء</option>
              <option value="الجامعي كهرباء">هندسة كهرباء</option>
              <option value="الجامعي ميكانيكا">هندسة ميكانيكا</option>
              <option value="الجامعي طاقة">هندسة طاقة</option>
              <option value="الجامعي سيارات">هندسة ميكانيكا سيارات</option>
              <option value="الجامعي طبية">هندسة طبية</option>
              <option value="الجامعي ميكاترونيكس">الميكاترونيكس</option>
              <option value="الجامعي حاسب">علوم الحاسب</option>
              <option value="الجامعي بشري">طب بشري</option>
              <option value="الجامعي صيدلة">صيدلة</option>
              <option value="الجامعي طبيعي">علاج طبيعي</option>
              <option value="الجامعي الرياضيات">رياضيات</option>
              <option value="الجامعي الفيزياء">فيزياء</option>
              <option value="الجامعي كيمياء">كيمياء</option>
            </optgroup>
          </select>
          <input type='radio' value='in' name='in-out' id='inn' style="cursor:pointer;"/><label style='cursor:pointer;' class='bold' htmlFor="inn">الكورس داخل الموقع</label>
          <input type='radio' value='out' name='in-out' id='outt' style="margin-Top:2rem;cursor:pointer;"/><label style='cursor:pointer;' class='bold' htmlFor="outt">الكورس خارج الموقع</label>
          <button class='bott' onclick='chk()' type='submit' name='sub' style="margin:1rem;margin-Bottom:2rem">إضافة</button>
</form>
        <center >
        <h1  class='subText' style='width:90% !important;text-Align:center'>قائمة الأساتذة</h1>
        </center>
        <table id='thist' class='teaTable'>
          <thead>
            <tr>
              <th>الاسم بالعربي</th>
              <th>الاسم بالانجليزي</th>
              <th>الفئة</th>
              <!-- <th>الكورس</th> -->
            </tr>
          </thead>
          <tbody>
            


<?php
$gq = mysqli_query($conn,"select * from t");
while($r = mysqli_fetch_array($gq)){
  $na = $r['na'];
  $ne = $r['ne'];
  $part0 = $r['part'];
  $lang0 = $r['lang'];
  $ti = $r['ti'];
  $id = $r['id'];
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
if(strlen($ti) > 2){
  echo "
  <tr>
  <td>
  <form action='cedit.php' method='post'>
  <input type='hidden' value='$id' name='id'>
  <input type='hidden' value='$part' name='getpl'>
  <input type='submit' name='sub' value='$na' style='
  background-color: #2214c9e8;
border: none;
font-size: 18px;
color: white;
padding: 1px 14px;
border-radius: 10px;
cursor: pointer;
font-weight: 900;
  
  '>
  </form>
  </td>
  <td>$ne<br></td>
  <td>$part $lang</td>
  <td>  <form action='padmin.php' method='post'>
  <input type='hidden' name='id1' value='$id'>
  <input type='hidden' name='ti' value='$ti'>
  <button style='border:none;' type='submit' name='del1' ><i style='font-size:18px;color:red;cursor:pointer;' class='fa-solid fa-remove'></i></button>
  </form></td>
</tr>
  ";
}else{
  echo "
  <tr>
  <td>$na</td>
  <td>$ne<br></td>
  <td>$part $lang</td>
  <td>
  <form action='padmin.php' method='post'>
  <input type='hidden' name='id1' value='$id'>
  <button style='border:none;' type='submit' name='del1' ><i style='font-size:17px;color:red;cursor:pointer;' class='fa-solid fa-remove'></i></button>
  </form>
  </td>
</tr>
  ";
}
}
?>



            
          </tbody>
        </table>
        <center>
        <h1 class='subText' style='width:90% !important;text-Align:center'>قائمة الطلبات</h1>
        </center>
        <table class='teaTable' style='width:90%'>
          <thead>
            <tr>
              <th>الاسم</th>
              <th>رقم الهاتف و الإيميل</th>
              <th>الطلب</th>
            </tr>
          </thead>
          <tbody>
<?php
$get_q = mysqli_query($conn,'select * from s');
while ($row = mysqli_fetch_array($get_q)){
$name = $row['name']; 
$wn = $row['wn'];
$email = $row['email'];
$command = $row['command']; 
$plus = $row['info']; 
$od = $row['id'];
  echo "
<tr>
<td><Link to='courseedit'>$name</Link></td>
<td>$wn <br> $email  <br> {$plus}</td>
<td>
$command    
</td>
<td>
<form action='padmin.php' method='post'>
<input type='hidden' name='id2' value='$od'>
<button style='border:none;' type='submit' name='del2' ><i style='font-size:24px;color:red;cursor:pointer;' class='fa-solid fa-remove'></i></button>
</form>
</td>
</tr>
";
}
?>

          
        
          </tbody>
        </table>
        <div class='chatAdm'>
          <h1 class='subText'>خدمة العملاء</h1>
          <?php
          $gn = mysqli_query($conn,"select * from un");
          while ($row = mysqli_fetch_array($gn)){
            $user = $row['name']; 
            $x_user = $row['x'];
            // echo "<script>alert('$user')</script>";
            $n0_a = mysqli_fetch_array(mysqli_query($conn,"select a from a where name = '$user'"));
            $n_a = (int)$n0_a['a'];
            $n0_b = mysqli_fetch_array(mysqli_query($conn,"select b from a where name = '$user'"));
            $n_b = (int)$n0_b['b'];
            if($n_b == $n_a){
              echo "
              <div class='a'>
              <form action='pchat2.php' method='post'>
              <input type='hidden' name='xx' value='$x_user'>
              <input type='hidden' name='nusr' value='$user'>
              <input type='hidden' name='user' value='admin@gmail.com'>
              <input type='submit' name='sxx' value='$user' 
              style='background-color: transparent;
              border:none; font-family: bcairo;color: #1f1d73;
              cursor: pointer !important;
              '
              >
              </form>
              </div>
                 
                 ";
                 
            }else{
              echo "
              <div class='a' style='background-color: #ffbaba;'>
              <form action='pchat2.php' method='post'>
              <input type='hidden' name='xx' value='$x_user'>
              <input type='hidden' name='nusr' value='$user'>
              <input type='hidden' name='user' value='admin@gmail.com'>
              <input type='submit' name='sxx' !important;' value='$user'
              style='background-color: transparent;
              border:none; font-family: bcairo;color: #000;
              cursor: pointer !important;font-size: 15px;
              '
              >
              <span
              style='
              color: #c71f1f;
              margin-right: 34px;
              padding: 0px 13px;
              background-color: #f9f9f9;
              border-radius:9px ;
              '
              >هنالك رسائل جديدة</span>
              </form>
              </div>
                 
                 ";
            }
          }
          ?>
          <br />
        </div>
        </div>

        <!-- new division {important!} -->

        <script>
  // localStorage.setItem('uname','ali');
  $value = localStorage.getItem('uname');
console.log($value);
// $one = document.getElementById('nulli'); 
$one = document.querySelectorAll('#nulli');
$two = document.getElementById('createsign');
if($value == 'admin@gmail.com'){
$one.innerHTML = `
<a href='admin.php'>أدمن</a>
`;
$two.innerHTML = `

<a class='nav-reg' onclick="kick()" style='cursor: pointer;'>تسجيل الخروج</a>
`;
}else{
  $all = document.getElementById('all');
  $nav = document.getElementById('nav');
  $nav.innerHTML = `
    <div class="logo">
        <img src="asimg/logo.png" alt="logo" />
      </div>
      <div class='links'>
        <ul>
<div></div>
        </ul>
        <div class='div' >
        <a href='home.php' class='nav-reg'>العودة للصفحة الرئيسية</a>
        </div>
      </div>
      </div>
   `;
  $all.innerHTML = `
<center>
<div style='padding-right: 6px;'><br />
<h1 style='color: red;'>لم يتم العثور </h1>
<p style='padding-right: 10px;'>هذه الصفحة غير متواجدة في موقع بناء !! <br><br><a href='home.php' class='cry'>العودة للصفحة الرئيسية</a></p>
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
`; 

}
function kick(){
localStorage.removeItem('uname');
localStorage.removeItem('pass');
window.location.href = 'http://localhost/server/ajdar/sign.php';
}

</script>
<script>
  $value = localStorage.getItem('uname');
console.log($value);
$one = document.getElementById('nulli'); 
$two = document.getElementById('createsign');;
if($value == 'admin@gmail.com'){
$one.innerHTML = `
<a href='admin.php'>أدمن</a>
`;
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
<script>
  const mono = localStorage.getItem('uname');
  const selee = document.getElementById('selee');
  selee.value= mono; 
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

<style>
.oko{
    padding: 6px 34px;
    background-color: transparent;
    color: #2348b9;
    border: solid 2px #900000;
    border-radius: 11px;
    cursor: pointer;
    font-weight: 800;
    font-size: 17px;
    transition: 170ms;
}
.oko:hover{
    background-color: #900000;
    color: white;
}

</style>
