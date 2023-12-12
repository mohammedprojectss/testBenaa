<?php
##########################################################
$conn = mysqli_connect("localhost","root","12345","ajdar") ;
##########################################################
?>



<?php
$acc = $_POST['acc'];
$pass = $_POST['pass'];
$is1 = "select count(id) from users where acc='$acc'";
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
            <div id='myAlert' class='alert fade-in'><strong>
يمنع ادخال غير الاحرف و الارقام و الرموز  <br>مثل النقطة و@ و $ و يمنع ادخال مسافات في الحساب !!
</strong><span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span></div>
                ";
        }elseif((int)$is == 0){
            $is_id = "select count(id) from users ";
            $q_id = mysqli_query($conn,$is_id);
            $id_arr = mysqli_fetch_array($q_id);
            $id = (int)$id_arr['count(id)']+1;
            $code = "insert into users values ($id,'$acc','$pass')";
            $x = md5($acc);
            $t2 = "insert into un values ('$acc','$x')" ; 
            $t3 = "create table $x (tp varchar(255),m varchar(2000), tm varchar(255))";
            mysqli_query($conn,$code);
            mysqli_query($conn,$t2);
            mysqli_query($conn,$t3);
            mysqli_query($conn,"insert into a values ('$acc',0,0)");
            echo "
            <div id='myAlert' class='alert fade-in pz'><strong>
                تم إنشاء الحساب بنجاح !
            </strong><span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span></div>
            ";
            
        }elseif((int)$is == 1){
                echo "
                <div id='myAlert' class='alert fade-in'><strong>
               إسم المستخدم هذا مستعمل !
                </strong><span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span></div>
                ";
                
        }else{
                echo "ERROR in WebSite!";
            }
}
?>

<link rel="stylesheet" href="./media/all.min.css">
<link rel="stylesheet" href="./media/style.css">
<link rel="stylesheet" href="./media/style2.css">
<link rel="stylesheet" href="s.css">
<style>
    .wa2{
        background-image:url("./asimg/wall3.jpg");
        background-size: cover;
    }
</style>
<div class="sign-main wa2">
    <div class="sign-square">
    <img src=logo.png alt="Benaa" />
      <p class="sign-p bold">إنشاء حساب</p>
      <form class="form" action="create.php" method="post">
        <input type="email" name="acc" placeholder="الحساب">
        <input type="password" name="pass" placeholder="كلمة السر">
        <button class="sign" type="submit" name="s">أنشء الحساب</button>
      </form>
      <p class="sign-have"> تمتلك حساب؟ <a href="sign.php">تسجيل الدخول</a></p>
    </div>
</div>


