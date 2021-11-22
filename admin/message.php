<?php 

session_start();

// Sign The SESSION ID To Var To Use IT into $statement ...
$id = $_SESSION['ID'];

if (isset($_SESSION['email-session'])) {
include '../connect.php';
include 'header.php';

    $statement = "SELECT MESSAGE_CONTROLL FROM rules WHERE USER_ID = '$id'";
    $query = mysqli_query($conn, $statement);
    $result = mysqli_fetch_array($query);

    if ($result['MESSAGE_CONTROLL'] == 1){

        // echo "welcome " . $_SESSION['name-session'] . 'br';

        $msg = isset($_GET['msg']) ? $_GET['msg'] : 'Manage';


        if ($msg == 'Manage') {

            // echo 'Welcome In Main Page ( Message )';
        
            $sql = "SELECT * FROM message";

            $query = mysqli_query($conn, $sql);
            
?>

            <h1 class="text-center">Manage Messages</h1>
            <div class="container">
            
                <div class="table-responsive">
                    <table class="main-table text-center table table-bordered">
                        <tr>
                            <td>#</td>
                            <td>MESSAGE_NAME</td>
                            <td>PHONE_NUMBER</td>
                            <td>EMAIL</td>
                            <td>MESSAGE_SUBJECT</td>
                            <td>CONTROL</td>
                        </tr>

                        <?php

                                while ($result = mysqli_fetch_assoc($query)) {
                                    echo '<tr>';
                                    echo '<td>' . $result['MESSAGE_ID']      . '</td>';
                                    echo '<td>' . $result['MESSAGE_NAME']    . '</td>';
                                    
                                    echo '<td>' . $result['PHONE_NUMBER'] . '</td>';
                                    echo '<td>' . $result['EMAIL']        . '</td>';
                                    echo '<td style="max-width: 250px">' . $result['SUBJECT']        . '</td>';
                                    echo '<td>
                                            <a href="?msg=Read&dirId=' . $result['MESSAGE_ID'] . '" class="btn btn-success">Read</a>
                                            <a href="?msg=Delete&dirId=' . $result['MESSAGE_ID'] . '" class="btn btn-danger confirm">Delete</a>
                                        </td>';
                                echo '</tr>';   
                                }
    
                        ?>                 

                    </table>

                </div>
                
            </div>


        <?php }elseif ($msg == 'Read'){

            $check = isset ($_GET['dirId']) && is_numeric ($_GET['dirId']) ? intval($_GET['dirId']) : 0;

            $sql = "SELECT * FROM message WHERE MESSAGE_ID = '$check'";

            $query = mysqli_query($conn, $sql);

            $result = mysqli_fetch_assoc($query);

            echo '<div class="container">';
                echo '<h2 class="alert alert-light">';
                    echo 'From : ' . '<span class="msg-name">' . $result['MESSAGE_NAME'] . '</span>' . '<br>';                
                echo '</h2>';
                echo '<p class="alert alert-light">';
                    echo 'Subject : ' . '<br>' . '<span class="msg-subject">' . $result['SUBJECT'] . '</span>' . '<br>';                
                echo '</p>';




            echo '</div>';


        }elseif ($msg == 'Delete') {

            echo '<div class="container">';
            $check = isset ($_GET['dirId']) && is_numeric ($_GET['dirId']) ? intval($_GET['dirId']) : 0;

            
            $sql = "SELECT * FROM message WHERE MESSAGE_ID = '$check'";
        
            $result = mysqli_query($conn, $sql); // Execute MYSQl       Statment      

            if (mysqli_num_rows($result) > 0 ) {

                $sql = "DELETE FROM message WHERE MESSAGE_ID = '$check'";

                $result = mysqli_query($conn, $sql); // Execute MYSQl Statment      
                
                echo '<div class="alert alert-success">Done The Message Was Deleted</div>';

            }else{

                echo 'This Id Not Exist ...';

            }

        echo '</div>';



        }

        include 'footer.php';


    }else{

        echo '<div class="alert alert-danger">You Are Not Allowed To Be Here</div>';

    }

}else{

    echo 'There Is No Page';

}


















?>