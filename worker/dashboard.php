<?php

session_start();

// Include PHP Files ...
include "../connect.php";
include "header.php";

$id = $_SESSION['ID'];




if (isset($_SESSION['email-session'])) {

//    echo "Welcome " . $_SESSION['email-session'];
    ?>
    <main>
      <?php echo $id ?>
        <div class="container pt-4">
            <!-- Information Box -->
            <div class="row">
                <div class="col-8">
                    <div class="info-box">
                        <div class="row">
                            <!-- START INFORMATION BOX SIDE-->
                            <div class="col-10">
                                <div>
                                    <p>Ahmed Hasan Abu Hatab</p>
                                    <span>
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <div>
                                    <p>Ahmed Hasan Abu Hatab</p>
                                    <span>
                                        <i class="fas fa-user-md"></i>
                                    </span>
                                </div>
                                <div>
                                    <p>Ahmed Hasan Abu Hatab</p>
                                    <span>
                                        <i class="fas fa-phone-alt"></i>
                                    </span>
                                </div>
                                <div>
                                    <p>Ahmed Hasan Abu Hatab</p>
                                    <span>
                                        <i class="far fa-clock"></i>
                                    </span>
                                </div>
                                <div>
                                    <p>Ahmed Hasan Abu Hatab</p>
                                    <span>
                                        <i class="fas fa-file-signature"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2">
                                <img src="img/image.jpeg" width="100" height="120">
                            </div>
                        </div>
                    </div>
                    <!-- END INFORMATION BOX SIDE-->
                </div>
                <div class="col-4">
                    <div class="taps">
                        <ul>
                            <li>
                                <a href="#">معلومات</a>
                                <span>
                                    <i class="fas fa-th-large"></i>
                                </span>

                            </li>
                            <li>
                                <a href="#">التقييم</a>
                                <span>
                                    <i class="far fa-star"></i>
                                </span>

                            </li>
                            <li>
                                <a href="#">العمل</a>
                                <span>
                                    <i class="fas fa-briefcase"></i>
                                </span>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--Main layout-->
<?php
}else{

    header('Location: ../Login.php');

    exit();

}


?>


    <!--Main layout-->


<?php

    include "footer.php";

?>
