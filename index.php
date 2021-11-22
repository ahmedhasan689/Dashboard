<?php 

include 'connect.php';
include 'header.php';



if (isset($_POST['msg-submit'])) {
  $msg_id    = $_POST['form-id'];
  $msg_name    = $_POST['form-name'];
  $msg_phone   = $_POST['form-phone'];
  $msg_email   = $_POST['form-email'];
  $msg_subject = $_POST['form-subject'];
  

  $sql = "insert into message(MESSAGE_ID, MESSAGE_NAME, PHONE_NUMBER, EMAIL, SUBJECT) 
  VALUES ('".$msg_id."', '".$msg_name."', '".$msg_phone."', '".$msg_email."', '".$msg_subject."')";

  $query = mysqli_query($conn, $sql);



};




















?>


<main>
  <!-- start slider -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slid2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end slider -->
  <!--section 3-->
  <div class="about">
    <div class="line">
      <hr class="line">
    </div>
    <div class="row" >
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 lef">
        <img src="img/about.jpg" style="height:90%; width:90%;" alt="">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right">
        <h4>اخدمني</h4>
        <p>
          موقع يقدم خدمات
          منزلية وخدمات أخرى تحت الضمان , في الوقت المحدد من قبل العميل بأعلى مستويات
          الجودة
        </p>
        <a href="#">
          <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal2">عرض المزيد 
          </button>
        </a>
      </div>

    </div>
  </div>
  <!-- category -->
  <div class="category">
    <div class="line">
      <hr class="line">
    </div>
    <div class="container">
      <h2 class="khedma"
        style="text-align: center;  position: relative;  color:#77C1EB  ; margin-bottom: 30px; display: none;">خدماتنا
      </h2>
      <div class="row" style="width: 75%; margin: 0 auto; ">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rr">
          <button
            style="text-align: center; width: 100%; padding: 10px 5px;  background-color: white; color: #000; border:none; "
            type="button" class="btn btn-primary craft">مهن حرفية</button>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
          <button
            style="text-align: center; width: 100%; padding: 10px 5px;  background-color: #08254F; color: rgb(255, 255, 255); border:none; "
            type="button" class="btn btn-primary health">مهن صحية</button>
        </div>
      </div>
    </div>
    <div class="row left" id="div1"
      style="display: none; height: 40vh;  width: 70%; margin: 0 auto;  background-color: rgba(255, 255, 255, 0.288); margin-top: 10px; border-radius: 10px;">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <p style="width: 60%; text-align: center; margin-top: 70px; font-size: large; margin-left: 50px;">المهن الحرفية
          هي
          المهن اليدوية والتي أصبح بعضها الأن يتم بواسطة الألات من المهن اليدوية النجارة والحدادة والسباكة والخياطةو
            صناعة الزجاج)</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img
          style="border-radius: 5px; width: 60%; height: 70%; margin-top: 50px;   box-shadow: 5px 5px 12px rgba(90, 142, 202, 0.623); margin-left: 70px;"
          src="img/craft.png" alt="">
      </div>
    </div>
    <div class="row right"
      style="  height: 40vh;  width: 70%; margin: 0 auto;  background-color: rgba(255, 255, 255, 0.288); margin-top: 10px; border-radius: 10px;">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <p style="width: 60%; text-align: center; margin-top: 70px; font-size: large; margin-left: 50px;">اخدمني دموقع
          يقدم خدمات منزلية وخدمات أخرى تحت الضمان , في الوقت المحدد من قبل العميل بأعلى مستويات الجودة</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img
          style="border-radius: 5px; width: 60%; height: 70%; margin-top: 50px;   box-shadow: 5px 5px 12px rgba(90, 142, 202, 0.623); margin-left: 70px;"
          src="img/craft.png" alt="">
      </div>
    </div>
  </div>
  <!-- section 4 -->
  <div class="worker">
    <div class="line">
      <hr class="line">
</div>
<p class="par" style="margin: 30px auto; text-align: center; font-size: larger; width: 50%;">مسؤول عن أمور النجارة و السباكة و التبليط
  للشركة ويُمكنني العمل في مختلف و شتى المجالات
  و المواقع التي تشمل البنوك و المؤسسات والشركات
   بمختلف أنواعها</p>
    <div class="container">
        <div class="row" style="width: 75%; margin: 150px auto;">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 card1">

                <div class="card" style="width: 17rem; margin-bottom: 50px;">
                    <img src="img/worker1.png" style="width: 40%; margin: -50px auto;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; margin-top: 50px;"> خالد سعيد </h5>
                        <p class="card-text" style="text-align: center;">حداد </p>
                        <div class="star">
                            <ul>
                              <li><img src="img/star.png" alt=""></li>
                              <li><img src="img/star.png" alt=""></li>
                              <li><img src="img/star.png" alt=""></li>
                              <li><img src="img/star.png" alt=""></li>
                              <li><img src="img/star.png" alt=""></li>
                            </ul>
                          </div>
                    </div>
                </div>
            </div> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 card1" style="margin-top: -60px;">

            <div class="card" style="width: 17rem; margin-bottom: 50px;">
                <img src="img/worker1.png" style="width: 40%; margin: -50px auto;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; margin-top: 50px;"> خالد سعيد </h5>
                    <p class="card-text" style="text-align: center;">   نجار </p>
                    <div class="star">
                        <ul>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                        </ul>
                      </div>
                </div>
            </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 card1">

            <div class="card" style="width: 17rem; margin-bottom: 50px;">
                <img src="img/worker1.png" style="width: 40%; margin: -50px auto;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; margin-top: 50px;">خالد سعيد</h5>
                    <p class="card-text" style="text-align: center;">حداد</p>
                    <div class="star">
                        <ul>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                        </ul>
                      </div>
                </div>
            </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 card4" style="margin: 50px auto; padding-left: 70px;">

            <div class="card " style="width: 17rem; margin-bottom: 50px; margin-right: -50px;">
                <img src="img/worker1.png" style="width: 40%; margin: -50px auto;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; margin-top: 50px;">  خالد سعيد</h5>
                    <p class="card-text" style="text-align: center;">سباك</p>
                    <div class="star">
                        <ul>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                        </ul>
                      </div>
                </div>
            </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 card5" style="margin: 50px auto; padding-right: 50px;">

            <div class="card" style="width: 17rem; margin-bottom: 50px; margin-left: -60px;">
                <img src="img/worker1.png" style="width: 40%; margin: -50px auto;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; margin-top: 50px;">خالد سعيد </h5>
                    <p class="card-text" style="text-align: center;">نجار</p>
                    <div class="star">
                        <ul>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                          <li><img src="img/star.png" alt=""></li>
                        </ul>
                      </div>
                </div>
            </div>
        </div> 
    </div>
       </div>
</div>
  <!-- <div class="worker"> 
    <div class="line">
      <hr class="line">
</div>
<p class="par" style="margin: 30px auto; text-align: center; font-size: larger; width: 70%;">مسؤول عن أمور النجارة و السباكة و التبليط
  للشركة ويُمكنني العمل في مختلف و شتى المجالات
  و المواقع التي تشمل البنوك و المؤسسات والشركات
   بمختلف أنواعها</p>
    <div class="container">
      <div class="row ">
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 30px;">
          <div class="card" style="width: 18rem;">
            <div class="backgound" >
              <img src="img/worker1.png"  class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 style="margin-top: 30px;" class="card-title">محمد سعيد</h5>
              <p class="card-text par">نجار</p>
              <div class="star">
                <ul>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 30px;">
          <div class="card" style="width: 18rem;">
            <div class="backgound" >
              <img src="img/worker1.png"  class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 style="margin-top: 30px;" class="card-title">محمد سعيد</h5>
              <p class="card-text par">نجار</p>
              <div class="star">
                <ul>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 30px;">
          <div class="card" style="width: 18rem;">
            <div class="backgound" >
              <img src="img/worker1.png"  class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 style="margin-top: 30px;" class="card-title">محمد سعيد</h5>
              <p class="card-text par">نجار</p>
              <div class="star">
                <ul>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 30px;">
          <div class="card" style="width: 18rem;">
            <div class="backgound" >
              <img src="img/worker1.png"  class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 style="margin-top: 30px;" class="card-title">محمد سعيد</h5>
              <p class="card-text par">نجار</p>
              <div class="star">
                <ul>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 30px;">
          <div class="card" style="width: 18rem;">
            <div class="backgound" >
              <img src="img/worker1.png"  class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 style="margin-top: 30px;" class="card-title">محمد سعيد</h5>
              <p class="card-text par">نجار</p>
              <div class="star">
                <ul>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 30px;">
          <div class="card" style="width: 18rem;">
            <div class="backgound" >
              <img src="img/worker1.png"  class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 style="margin-top: 30px;" class="card-title">محمد سعيد</h5>
              <p class="card-text par">نجار</p>
              <div class="star">
                <ul>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 30px;">
          <div class="card" style="width: 18rem;">
            <div class="backgound" >
              <img src="img/worker1.png"  class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <div class="circle">
                ss
              </div>
              <h5 style="margin-top: 30px;" class="card-title">محمد سعيد</h5>
              <p class="card-text par">نجار</p>
              <div class="star">
                <ul>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                  <li><img src="img/star.png" alt=""></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- contact -->
  <div class="contact">
    <div class="container">
      <div class="line">
        <hr class="line">
  </div>
      <form action="#" method="POST">
        
  
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  
            <img src="img/2480553.jpg" style="width: 80%; margin-left: 10%; margin-top: -40px; height: 100%;" alt="">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-right" style="   margin-top: -60px;">
            <div class="mb-3">
              <input type="hidden" name="form-id">
              <!-- <label for="exampleInputEmail1" class="form-label">الاسم</label> -->
              <input type="name" placeholder="الاسم" name="form-name" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
  
            </div>
            <div class="mb-3">
              <!-- <label for="exampleInputEmail1" class="form-label">رقم الجوال</label> -->
              <input type="name" placeholder="رقم الجوال" name="form-phone" class="form-control " id="exampleInputEmail1"
                aria-describedby="emailHelp">
  
            </div>
            <div class="mb-3">
              <!-- <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label> -->
              <input type="email" placeholder="البريد الالكتروني" name="form-email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
  
            </div>
            <div class="mb-3">
  
              <textarea class="form-control " style="text-align: right;" name="form-subject" rows="5" data-rule="required"
                data-msg="Please write something for us" placeholder="اوصف المشكلة التي تواجهك"></textarea>
            </div>
  
            <button type="submit" class="btn btn-primary" name="msg-submit">Submit</button>
          </div>
  
        </div>

        <?php
            
        

        
        ?>
      </form>
    </div>
  </div>
</main>

<?php 

    include 'footer.php';

?>