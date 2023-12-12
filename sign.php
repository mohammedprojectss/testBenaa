<?php
##########################################################
$conn = mysqli_connect("localhost","root","12345","ajdar") ;
##########################################################
error_reporting(E_ERROR | E_PARSE);
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
?>


<title>تسجيل الدخول</title>
<?php
$acc = $_POST['acc'];
$pass = $_POST['pass'];
$is1 = "select count(id) from users where acc='$acc' AND pass='$pass'";
$is2 = mysqli_query($conn, $is1);
$is3 = mysqli_fetch_array($is2);
$is = (int)$is3['count(id)']; 

function fi($string,$w){
    $p1 = addslashes($string); 
    $p2 = strip_tags($p1);
    if($w == 'n'){
        $p3 = strtolower($p2);
        $p4 = trim($p3);
        return $p4 ;
    }else{
        return $p2 ; 
    }
}
function v($txt) {
    if (!preg_match('/^[a-zA-Z0-9@.]+$/', $txt)) {
        return false;
    }elseif (strpos($txt, ' ') !== false) {
        return false;
    }else{
        return true;
    }
}

// session_start();
// if(!empty($_SESSION['uname'])){
//   header("Location: http://localhost/server/ajdar/lo.php");
// }
if(isset($_POST['s'])){
  
    if ($acc == fi(" ",'n')){
        echo "
    <div id='myAlert' class='alert fade-in'><strong>
أدخل الحساب لو سمحت
        </strong><span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span></div>
        ";
    }elseif($pass == fi(" ",'n')){
        echo "
    <div id='myAlert' class='alert fade-in'><strong>
        أدخل كلمة المرور لو سمحت
        </strong><span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span></div>
        ";
    }elseif(strlen($pass) <= 7){
        echo "
        <div id='myAlert' class='alert fade-in'><strong>
        لا يمكن أن تكون كلمة المرور أقل من 8 أحرف
        </strong><span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span></div>
            ";
        
        }elseif(v($acc) != 1 || v($pass) != 1 ){
            echo "
            <div id='myAlert' class='alert fade-in redt'><strong>
يمنع ادخال غير الاحرف و الارقام و الرموز  <br>مثل النقطة و@ و $ و يمنع ادخال مسافات في الحساب !!
</strong><span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span></div>
                ";
        }elseif((int)$is == 0){
            echo "
            <div id='myAlert' class='alert fade-in red'><strong>
            الحساب أو كلمة المرور خاطئة !!
            </strong><span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span></div>
            ";

        }elseif((int)$is == 1){
                echo "
                <div id='myAlert' class='alert fade-in pz'><strong>
                   تم تسجيل الدخول بنجاح !
                   <a href='home.php' style='color: blue; text-decoration:none; '> انقر الانتقال للصفحة الرئيسية</a>
                </strong><span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span></div>
                ";
                
                echo "
                <script>
                localStorage.setItem('uname','$acc');
                localStorage.setItem('uname','$acc');
                localStorage.setItem('uname','$acc');
                localStorage.setItem('uname','$acc');
                localStorage.setItem('pass','$pass');
                localStorage.setItem('pass','$pass');
                </script>
                ";
                
        }else{
                echo "ERROR in WebSite!";
            }
}
?>

<link rel="stylesheet" href="./media/all.min.css">
<link rel="stylesheet" href="./media/style.css">
<link rel="stylesheet" href="./media/style2.css">
<link rel="stylesheet" href="./media/style.css.map">
<link rel="stylesheet" href="s.css">
<style>
    .wa1{
        background-image:url("./asimg/wall.jpg");
      background-size: cover;
    
    }
</style>


<div class="sign-main wa1">
    <div class="sign-square">
    <img src=logo.png alt="Benaa" />
      <p class="sign-p bold">تسجيل الدخول</p>
      <form class="form" action="sign.php" method="post">
        <input type="email" name="acc" placeholder="الحساب">
        <input type="password" name="pass" placeholder="كلمة السر">
        <button class="sign" type="submit" name="s">تحقق</button>
      </form>
      <p class="sign-have"> تمتلك حساب؟ <a href="create.php">إنشاء حساب</a></p>
    </div>
</div>
