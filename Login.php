<?php

session_start();

if (isset($_SESSION['email-session'])) {

  header('Location: worker/dashboard.php');

}

// PHP Files
include 'header.php';
include 'connect.php';


  // Check If user Comeing From HTTP Post Request ...
  if (isset($_POST['Login-submit'])) {

      $email        = $_POST['login-email'];
      $password     = $_POST['login-password'];

      $hashPassword = sha1($password);

      // Check If The User Exist In Database ...

      $sql = "SELECT * FROM user WHERE EMAIL = '$email' AND PASSWORD = '$hashPassword' AND USER_TYPE != 1";

      $result = mysqli_query($conn, $sql);

      $row = mysqli_fetch_array($result);

      if (mysqli_num_rows($result) === 1 ) {

          $_SESSION['email-session'] = $email; // Register Session Name
          
          $_SESSION['ID'] = $row['USER_ID'];

          $_SESSION['name-session'] = $row['USER_NAME'];

          header('Location: admin/dashboard.php');

          exit();



      }

  }
  if (isset($_POST['Login-submit'])) {
      $email    = $_POST['login-email'];
      $password = $_POST['login-password'];

      $hashPassword = sha1($password);

      // Check If The User Exist In Database ...

      $sql = "SELECT * FROM user WHERE EMAIL = '$email' AND PASSWORD = '$hashPassword' AND USER_TYPE = 1";

      $result = mysqli_query($conn, $sql);

      $row = mysqli_fetch_array($result);

      if (mysqli_num_rows($result) === 1) {

          $_SESSION['email-session'] = $email; // Register Session Name

          $_SESSION['ID'] = $row['USER_ID'];

          $_SESSION['name-session'] = $row['USER_NAME'];

          header('Location: worker/dashboard.php');

          exit();


      }
  }
?>




<!-- Login  -->
<main>
  <div class="login">
    <div class="row" style="width: 75%; background-color: rgb(255, 255, 255);
    height: 70vh;   margin: 180px auto;">
    <div class="col-6">
    <img style="width: 100%; margin: 0 auto;" src="img/Mobile-login.jpg" alt="">
    </div>
    <div class="col-6">

    <div class="login">
    <h2>تسجيل الدخول</h2>
    <form method="POST">


    <div class="mb-3">

      <input type="email" class="form-control" id="exampleInputPassword1" name="login-email" placeholder=" البريد الالكتروني أو رقم الجوال">
    </div>
    <div class="mb-3">

      <input type="password" class="form-control" id="exampleInputPassword1" name="login-password" placeholder="كلمة المرور">
    </div>


    <button type="submit" class="btn done btn-primary" name="Login-submit" style=" background-color:#4aace5;" > <a  href="mainpage.html"> دخول</a> </button>
    <div class="mb-3 form-check" style="margin-top: 20px;">
      <label class="form-check-label" for="exampleCheck1">هل نسيت كلمة المرور؟
        <a class="click" href="#" style="text-decoration: none; color: #4aace5; margin-left: 160px;">اضغط هنا</a>
      </label>
    </div>

    </form>
    </div>
    </div>
    </div>
    </div>
    <div class="return">
      <h3>اعادة تعيين كلمة المرور</h3>
      <p>تساعد هذه الخطوة في التأكد من أنك مالك الحساب</p>

      <div class="mb-3">

        <input type="text" class="form-control" placeholder="رقم الجوال أو البريد الالكتروني ">


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
      <button type="submit" class="btn done btn-primary" style=" background-color:#4aace5;" > <a class="done" href=""> موافق</a></button>
    </div>
    <!-- ret -->
    <div class="ret">
      <h3>اعادة تعيين كلمة المرور</h3>
      <p> قم بتعيين كلمة مرور جديدة</p>

      <div class="mb-3">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور الجديدة ">
        <br>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="تأكيد كلمة المرور الجديدة ">
      </div>
      <button type="submit" class="btn done btn-primary" style=" background-color:#4aace5;" >
        <a  href="index.php">موافق</a>
      </button>
    </div>


      <!--  <div class="sign" style="width: 28%; margin: 50px auto;">
            <h5 style="float: right; color: white;">ليس لديك حساب؟</h5>
            <a href="sign.html" style="float: left; text-decoration: none; color: violet;font-size: large;">انشاء حساب جديد</a>
        </div> -->
    </form>
  </div>
  </div>
  </div>
</main>


<?php

  include "footer.php";

?>
