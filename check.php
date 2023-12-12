<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
?>
<title>كورس مدفوع</title>
<link rel="stylesheet" href="media/style.css">
  <link rel="stylesheet" href="media/all.min.css">
  <link rel="stylesheet" href="media/style.css.map">
  <link rel="stylesheet" href="media/style.scss">
  <link rel="stylesheet" href="s.css">
<?php
if(isset($_POST['check'])){
    $part0 = $_POST['part'] ; 
    $lang0 = $_POST['lang'] ; 
    $na = $_POST['na'] ; 
    $id = $_POST['id'] ;
$acc = $_POST['uname'] ; 
$ti = $_POST['ti'] ; 
$fetch  = mysqli_fetch_array(mysqli_query($conn,"select * from users where acc = '$acc'"));
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
$arr = explode(',',$fetch['c']);
function searchWord($array, $word) {
    foreach ($array as $index => $value) {
      if ($value == $word) {
        return $index;
      }
    }
    return -1;
  }
  $index = searchWord($arr, $ti);
  
  if ($index != -1) {
     echo "
        
 <form action='w.php' method='post'>

 <input type='hidden' id='sel' value='$acc' name='acc'>
 <input type='hidden' id='sel' value='$part' name='part'>
 <input type='hidden' id='sel' value='$lang' name='lang'>
 <input type='hidden' id='sel' value='$na' name='na'>
 <input type='hidden' id='sel' value='$ti' name='ti'>
 <input type='hidden' id='sel' value='$id' name='id'>

<center>
<button type='submit' name='so' style='background-color:transparent;border:none;cursor:pointer;'>
<a class='area subText teacher'>
<h3 class='subText'>$na</h3>
<h4 class='subText'>$ne</h4>
<p class='bold'>$part $lang</p>
</a>

</button>   
</center>             </form>
         </a>
 ";

  } else {
    echo "
    <center>
    <br><br><br>
<form action='payo.php' method='post'>
<input type='hidden' id='sel' value='$ti' name='ti'>
<input type='hidden' id='sel' value='$acc' name='acc'>
<input type='hidden' id='sel' value='$part' name='part'>
<input type='hidden' id='sel' value='$lang' name='lang'>
<input type='hidden' id='sel' value='$na' name='na'>
<input type='hidden' id='sel' value='paypal' name='w'>
<button type='submit' name='ss'>
<img src='asimg/paypalpal.png'>
</button>
 </form>
 <form action='payo.php' method='post'>
<input type='hidden' id='sel' value='$ti' name='ti'>
<input type='hidden' id='sel' value='$acc' name='acc'>
<input type='hidden' id='sel' value='$part' name='part'>
<input type='hidden' id='sel' value='$lang' name='lang'>
<input type='hidden' id='sel' value='$na' name='na'>
<input type='hidden' id='sel' value='WestonUonion' name='w'>
<button type='submit' name='ss'>
<img src='asimg/wuu.png'>
</button>
 </form>
    </center>
    ";
  }
}else{
  echo "<script>location.href='null2.php';</script>";
}
?>
<style>
  button:hover {
  background-color: #d0d0d0;
  transform: scale(1.02);
  border-radius: 8px;
}
button {
  border: none;
  padding: 60px 20px;
  border-radius: 10px;
  cursor: pointer;
  transition: 180ms;
}
  img{
    width: 525px;
  }
</style>