<?php 

session_start();

if (isset($_SESSION['email-session'])) {

    $pageTitle = "Dashboard";

    // PHP Files
    include "../connect.php";
    include "header.php";

    // print_r($_SESSION);

    $Redirect = isset ($_GET['Redirect']) ? $_GET['Redirect'] : 'Manage';


    
    // IF You Are In Main Page ... 
    if ($Redirect == 'Manage') {

        echo 'Welcome U Are In Manage Page ' . $_GET['dirId'];
        // echo '<a href="user.php?Redirect=Edit">Add New</a>';

    } elseif ($Redirect == 'Edit'){

        echo 'Welcome U Are In Edit Page';

    } elseif ($Redirect == 'Add') {

        echo 'Welcome U Are In Add Page';

    }else{

        echo 'قوم واطلع برا لانه ما في صفحه بالاسم هاد ي هكر ي كلب  ...';

    }


    include "footer.php";


}else{

    header('Location: ../Login.php');

    exit();

}