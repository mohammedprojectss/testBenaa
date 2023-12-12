<?php
$conn = mysqli_connect('localhost','root','12345','ajdar');
?>
<link rel="stylesheet" href="media/style.css">
  <link rel="stylesheet" href="media/all.min.css">
  <link rel="stylesheet" href="media/style.css.map">
  <link rel="stylesheet" href="media/style.scss">
  <link rel="stylesheet" href="s.css">
  <br><br>
<center>
<?php
if(isset($_POST['s'])){
    $part= $_POST['part']; 
    $lang= $_POST['lang'];
//     if($part0 == 'one'){
//         $part = 'الإعدادي' ; 
//                 }else if($part0 == 'two'){
//         $part = 'الثانوي' ;
//                 }else if($part0 == 'three'){
//                         $part = 'الجامعي' ;
//                 }else{
//         $part = 'null' ; 
        
//                 }
        
//                 if($lang0 == 'math'){
//         $lang = 'الرياضيات' ; 
//                 }else if($lang0 == 'ph'){
//         $lang = 'الفيزياء' ; 
//                 }else if($lang0 == 'k'){
//         $lang = 'الكيمياء' ; 
//                 }else if($lang0 == 'ar'){
//         $lang = 'العربي' ; 
//                 }else if($lang0 == 'ih'){
//         $lang = 'الإحصاء' ; 
//                 }else if($lang0 == 's'){
//         $lang = 'العلوم' ; 
//                 }else if($lang0 == 's2'){
//         $lang = 'الأحياء' ; 
//                 }else if($lang0 == 'en'){
//         $lang = 'الإنجليزي' ; 
//                 }else if($lang0 == 'gr'){
//         $lang = 'الجغرافيا و التاريخ' ; 
//                 }else if($lang0 == 'kh'){
//         $lang = 'الفلسفة و علم المنطق' ; 
//                 }
//                 else if($lang0 == 'hm'){
//         $lang = 'الهندسة المدنية' ; 
//                 }
//                 else if($lang0 == 'he'){
//         $lang = 'هندسة العمارة' ; 
//                 }
//         else if($lang0 == 'hk'){
//         $lang = 'هندسة الكيمياء' ; 
//                 }
//         else if($lang0 == 'hkh'){
//         $lang = 'هندسة الكهرباء' ; 
//                 }
//         else if($lang0 == 'hme'){
//         $lang = 'الهندسة الميكانيكا' ; 
//                 }
//         else if($lang0 == 'hh'){
//         $lang = 'هندسة الحاسب' ; 
//                 }
//         else if($lang0 == 'hmek'){
//         $lang = 'الميكاترونيكس' ; 
//                 }
//         else if($lang0 == 'ht'){
//         $lang = 'هندسة الطاقة' ; 
//                 }
//         else if($lang0 == 'hmcar'){
//         $lang = 'هندسة ميكانيكا السيارات' ; 
//                 }
//         else if($lang0 == 'hdoctor'){
//         $lang = 'هندسة طبية' ; 
//                 }
//         else if($lang0 == 'tb'){
//         $lang = 'الطب البشري' ; 
//                 }
//         else if($lang0 == 'si'){
//         $lang = 'الصيدلة' ; 
//                 }
//         else if($lang0 == 'et'){
//         $lang = 'العلاج الطبيعي' ; 
//                 }
        
//                 else{
//         $lang = 'null' ; 
        
//                 }
        
//     echo '<center>'. $part .' :: ' . $lang . '</center>'; 
    $get_q = mysqli_query($conn,"select * from t where part = '$part' and lang = '$lang'");
    while($row = mysqli_fetch_array($get_q)){
        $na =  $row['na'];
        $ne =  $row['ne'] ;
        $part0 =  $row['part'];
        $lang0 =  $row['lang'];
        $io =  $row['io'];
        $ti =  $row['ti'];

        $id =  $row['id'];
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
$lang = 'هندسة الميكانيكا' ; 
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
          <input type='hidden' id='sel' value='$part0' name='part'>
 <input type='hidden' id='sel' value='$lang0' name='lang'>
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
}
?>
</center>


<?php
//  echo "
        
//  <form action='w.php' method='post'>

//  <input type='hidden' id='sel' value='' name='acc'>
//  <input type='hidden' id='sel' value='$part' name='part'>
//  <input type='hidden' id='sel' value='$lang' name='lang'>
//  <input type='hidden' id='sel' value='$na' name='na'>
//  <input type='hidden' id='sel' value='$ti' name='ti'>
//  <input type='hidden' id='sel' value='$id' name='id'>

//  <button type='submit' name='so' style='background-color:transparent;border:none;cursor:pointer;'>
//  <a class='area subText teacher'>
// <h3 class='subText'>$na</h3>
// <h4 class='subText'>$ne</h4>
// <p class='bold'>$part $lang</p>
// </a>

// </button>                </form>
//          </a>
//  ";
?>
