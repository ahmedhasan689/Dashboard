<?php

include "connect.php";
// include "function.php";
include "header.php";

$pageTitle = "Sign";

if (isset($_POST['sign-submit'])) {

  $name          = $_POST['sign-name'];
  $phone         = $_POST['sign-phone'];
  $Signemail     = $_POST['sign-email'];
  $Signpassword  = $_POST['sign-password'];
  $SignNpassword = $_POST['sign-newpassword'];

  $hashpassword  = sha1($Signpassword);

  // echo $name . " " . $phone . " " . $Signemail . " " . $Signpassword . " " . $SignNpassword;

  $formsErrors = array();

  if (strlen($name) < 4) {
    $formsErrors[] = '<div class="alert alert-danger">Name Can Not Be Less Than 4 Character</div>';
  }
  if (strlen($name) > 20) {
    $formsErrors[] = '<div class="alert alert-danger">Name Can Not Be More Than 20 Character</div>';
  }
  if (empty($name)) {
    $formsErrors[] = '<div class="alert alert-danger">Name Can Not Be Empty</div>';
  }
  if (empty($phone)) {
    $formsErrors[] = '<div class="alert alert-danger">Phone Can Not Be Empty</div>';
  }
  if (empty($Signemail)) {
    $formsErrors[] = '<div class="alert alert-danger">Email Can Not Be Empty</div>';
  }
  if (empty($Signpassword)) {
    $formsErrors[] = '<div class="alert alert-danger">Password Can Not Be Empty</div>';
  }
  if (empty($SignNpassword)) {
    $formsErrors[] = '<div class="alert alert-danger">Please Repeat The Password</div>';
  }
  if (empty($formsErrors)) {
    $sql = "insert into user (USER_NAME, PASSWORD, PHONE_NUMBER, EMAIL, USER_TYPE) values ('".$name."', '".$hashpassword."', '".$phone."', '".$Signemail."', 1)";

    $result = mysqli_query($conn, $sql);


  }




}





?>

<main>
    <div class="sign">
    <div class="row" style="width: 75%; background-color: rgb(255, 255, 255);
    height: 70vh;   margin: 180px auto;">
    <div class="col-6 hidden">
        <img style="width: 100%; margin: 0 auto;" src="img/Mobile-login.jpg" alt="">
    </div>
    <div class="col-6">


        <h2>تسجيل</h2>
        <?php
        if (isset($formsErrors)) {
          foreach ($formsErrors as $error) {
            echo $error;
          }
        }

        ?>
    <form action="info.php" method="post">

        <div class="mb-3">

        <input type="name" class="form-control" id="exampleInputEmail1" name="sign-name" aria-describedby="emailHelp" placeholder="الاسم" style="margin-top: 60px;">

        </div>
        <div class="mb-3">

            <input type="name" class="form-control" id="exampleInputPassword1" name="sign-phone" placeholder=" رقم الجوال">
        </div>
        <div class="mb-3">

        <input type="email" class="form-control" id="exampleInputPassword1" name="sign-email" placeholder="البريد الالكتروني">
        </div>
        <div class="mb-3">

        <input type="password" class="form-control" id="exampleInputPassword1" name="sign-password" placeholder="كلمة المرور">
        </div>
        <div class="mb-3">

            <input type="password"  class="form-control" id="exampleInputPassword1" name="sign-newpassword" placeholder=" اعادة كلمة المرور">
        </div>

        <button type="submit" class="btn done btn-primary" name="sign-submit" style="background-color:#4aace5" >
           <a>تسجيل</a>
        </button>
        <div class="mb-3 form-check ch" style="margin-top: 20px;">
            <label class="form-check-label " for="exampleCheck1">هل لديك حساب؟ <a class="log" href="Login.php" style="text-decoration: none; color: #4aace5; margin-left:180px; ">تسجيل الدخول</a></label>
        </div>
        <!--  <div class="sign" style="width: 28%; margin: 50px auto;">
            <h5 style="float: right; color: white;">ليس لديك حساب؟</h5>
            <a href="sign.html" style="float: left; text-decoration: none; color: violet;font-size: large;">انشاء حساب جديد</a>
        </div> -->
    </form>
    </div>
    </div>
    </div>

    <!-- return -->
    <div class="return">
    <h3>اعادة تعيين كلمة المرور</h3>
    <p>تساعد هذه الخطوة في التأكد من أنك مالك الحساب</p>

    <div class="mb-3">

        <input type="name" class="form-control" id="exampleInputPassword1" placeholder="رقم الجوال أو البريد الالكتروني ">


    </div>

    <button type="submit" class="btn done btn-primary" style=" background-color:#4aace5;" > <a class="ok"   href="#"> موافق</a> </button>
    <div class="mb-3 form-check" style="margin-top: 20px;">
        <!-- <label class="form-check-label" for="exampleCheck1">هل نسيت كلمة المرور؟ <a class="ok" href="#" style="text-decoration: none; color: #4aace5; margin-left: 160px;">اضغط هنا </a></label> -->
    </div>
    </div>

    <!-- code -->
    <div class="code">
    <h3>اعادة تعيين كلمة المرور</h3>
    <p> ادخل الكود الذي ارسل لك</p>

    <div class="mb-3">

        <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" ">


    </div>
    <button type="submit" class="btn done btn-primary" style=" background-color:#4aace5;" > <a  href="mainpage.html"> موافق</a> </button>
    </div>

    <!-- Ret -->
    <div class="ret">
      <h3>اعادة تعيين كلمة المرور</h3>
      <p> قم بتعيين كلمة مرور جديدة</p>

      <div class="mb-3">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور الجديدة ">
        <br>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="تأكيد كلمة المرور الجديدة ">
      </div>
      <button type="submit" class="btn done btn-primary" style=" background-color:#4aace5;" >
        <a  href="main.html">موافق</a>
      </button>
    </div>

</main>


<?php

    include "footer.php";

?>
