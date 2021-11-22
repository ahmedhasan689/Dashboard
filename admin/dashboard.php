<?php

session_start();

if (isset($_SESSION['email-session'])) {

    $pageTitle = "Dashboard";

    // PHP Files
    include "../connect.php";
    include "header.php";

    // print_r($_SESSION);
    // First Page After Login
    // echo "Welcome " . $_SESSION['name-session'] . "<br>";
    

}else{

    header('Location: ../Login.php');

    exit();

}

?> 

<main>
    <?php 
        
        echo '<div class="text-center username">Welcome ' . $_SESSION['name-session'] . '</div><br>';        
            echo '<div class="text-center">
                    <a href="message.php?msg=Manage" class="link">messages</a><span class="line">|</span> 
                    <a href="#" class="link">Options</a><span class="line">|</span>    
                    <a href="subadmin.php?Sub=Manage" class="link">Subadmin</a> ' .  
                '</div><br>';        
        
    ?>

</main>

<?php 

    include "footer.php";
    

?>
