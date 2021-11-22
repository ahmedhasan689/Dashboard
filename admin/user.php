<?php 

session_start();

$id = $_SESSION['ID'];

if (isset($_SESSION['email-session'])) {
    

    $pageTitle = "Users";

    // PHP Files
    include "../connect.php";
    include "header.php";

    // Check If You Are Allow TO Be Here Or Not ...
    $statement = "SELECT USER_CONTROLL FROM rules WHERE USER_ID = '$id'";
    $query = mysqli_query($conn, $statement);
    $result = mysqli_fetch_assoc($query);


    if ($result['USER_CONTROLL'] > 0) {
        $Redirect = isset ($_GET['Redirect']) ? $_GET['Redirect'] : 'Manage';




        // IF You Are In Main Page ... 
        if ($Redirect == 'Manage') { // Manage Member Page
            
            $sql = "SELECT * FROM user WHERE USER_TYPE = 1";

            $query = mysqli_query($conn, $sql);
                
        ?>

                <h1 class="text-center">Manage Users</h1>
                <div class="container">
                    <a href="?Redirect=Add" class="btn btn-primary">
                        <i class="fas fa-plus"></i> 
                        Add User
                    </a>
                    <div class="table-responsive">
                        <table class="main-table text-center table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>USER_NAME</td>
                                <td>PHONE_NUMBER</td>
                                <td>EMAIL</td>
                                <td>CONTROL</td>
                            </tr>

                            <?php

                                    while ($result = mysqli_fetch_assoc($query)) {
                                        echo '<tr>';
                                        echo '<td>' . $result['USER_ID']      . '</td>';
                                        echo '<td>' . $result['USER_NAME']    . '</td>';
                                        
                                        echo '<td>' . $result['PHONE_NUMBER'] . '</td>';
                                        echo '<td>' . $result['EMAIL']        . '</td>';
                                        echo '<td>
                                                <a href="?Redirect=Edit&dirId=' . $result['USER_ID'] . '" class="btn btn-success">Edit</a>
                                                <a href="?Redirect=Delete&dirId=' . $result['USER_ID'] . '" class="btn btn-danger confirm">Delete</a>
                                            </td>';
                                    echo '</tr>';   
                                    }
        
                            ?>                 

                        </table>

                    </div>
                    
                </div>
                

                

        <?php } elseif ($Redirect == 'Edit'){ // Edit Page 
                
                
                $check = isset ($_GET['dirId']) && is_numeric ($_GET['dirId']) ? intval($_GET['dirId']) : 0;

                
                $sql = "SELECT * FROM user WHERE USER_ID = '$check'";
            
                $result = mysqli_query($conn, $sql); // Execute MYSQl       Statment
            
                $row = mysqli_fetch_array($result); // Fetch Data
            

                if (mysqli_num_rows($result) > 0 ) { ?>

                    <h1 class="text-center">Edit User</h1>

                    <div class="container">
                        <form class="form-horizontal" action="?Redirect=Update" method="POST">

                            <input type="hidden" name="hidId" value="<?php echo $check ?>">

                            <!-- Start Username Input Field (Edit) -->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10 col-md-5">
                                    <input type="text" name="edit-user" class="form-control"
                                    value="<?php echo $row['USER_NAME'] ?>" autocomplete="off" required="required">
                                </div>
                            </div>
                            <!-- End Username Input Field (Edit) -->

                            <!-- Start Password Input Field (Edit) -->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10 col-md-5">
                                    <input type="hidden" name="Oedit-password" value="<?php echo $row['PASSWORD']; ?>">
                                    <input type="text" name="Nedit-password" class="form-control" autocomplete="new-password">
                                </div>
                            </div>
                            <!-- End Password Input Field (Edit) -->

                            <!-- Start Phone-number Input Field (Edit) -->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Phone-Number</label>
                                <div class="col-sm-10 col-md-5">
                                    <input type="text" name="edit-phone" class="form-control" value="<?php echo $row['PHONE_NUMBER'] ?>" required="required">
                                </div>
                            </div>
                            <!-- End Phone-number Input Field (Edit) -->

                            <!-- Start Email Input Field (Edit) -->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10 col-md-5">
                                    <input type="text" name="edit-email" class="form-control"  value="<?php echo $row['EMAIL'] ?>" required="required">
                                </div>
                            </div>
                            <!-- End Email Input Field (Edit) -->

                            <!-- Start Submit Button Field (Edit) -->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" value="Save" class="btn btn-success">
                                </div>
                            </div>
                            <!-- End Submit Button Field (Edit) -->

                        </form>
                    </div>

            <?php  
                }else{

                    echo 'There Is No Id ....';
                } 
            
            } elseif ($Redirect == 'Update') {

                echo "<h1 class='text-center'>Update User</h1>"; 
                echo "<div class='container'>"; 

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $update_id       = $_POST['hidId']; 
                $update_user     = $_POST['edit-user']; 
                $update_phone    = $_POST['edit-phone']; 
                $update_email    = $_POST['edit-email']; 

                // Hashed The Password And Check If The Password Change Or Not...    
                $update_hashPass = empty($_POST['Nedit-password']) ? $_POST['Oedit-password'] : sha1($_POST['Nedit-password']); 
                
                // Validate The Errors ....

                $Errors = array();

                if(empty($update_user)) {

                        $Errors[] = '<div class="alert alert-danger">The User Must Not By Empty</div>';

                }
                if (empty($update_phone)) {

                        $Errors[] = '<div class="alert alert-danger">The Phone Number Must Not By Empty</div>';

                }
                if (strlen($update_phone) < 9) {
                    
                        $Errors[] = '<div class="alert alert-danger">The Phone Number Must Not By Less Than 10 Numbers</div>';    

                }
                if (empty($update_email)){

                        $Errors[] = '<div class="alert alert-danger">The Email Must Not By Empty</div>';

                    } 

                foreach ($Errors as $error) {

                        echo $error;

                }

                    // IF There Is No Data In $Errors Array ...
                if (empty($Errors)) {

                        // Update The Data With This Info For The Target ID
                    
                        $sql = "UPDATE user SET USER_NAME = '$update_user', PASSWORD = '$update_hashPass', PHONE_NUMBER = '$update_phone', EMAIL = '$update_email' WHERE USER_ID = '$update_id'";
                        
                        $result = mysqli_query($conn, $sql);
                    
                        echo '<div class="alert alert-success">Done The ID Number <strong>[ ' .$update_id . ' ]</strong> Is Updated</div>';
                    }





                




                

                }else{

                    echo 'You Can Not Browse This Page Directly ...';

                }    
                

                echo "</div>";


            }elseif ($Redirect == 'Add') {  // Add Page ?>

                <h1 class="text-center">Add User</h1>

                <div class="container">
                    <form class="form-horizontal" action="?Redirect=Insert" method="POST">

                        <!-- Start Username Input Field (Edit) -->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10 col-md-5">
                                <input type="text" name="add-user" class="form-control" autocomplete="off" required="required" placeholder="Please Enter Your Name">
                            </div>
                        </div>
                        <!-- End Username Input Field (Edit) -->

                        <!-- Start Password Input Field (Edit) -->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10 col-md-5">
                                <input type="password" name="add-password" class="password form-control" autocomplete="new-password" required="required" placeholder="Please Enter Your Password">
                                <i class="show-pass fa fa-eye fa-2x"></i>
                            </div>
                        </div>
                        <!-- End Password Input Field (Edit) -->

                        <!-- Start Phone-number Input Field (Edit) -->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Phone-Number</label>
                            <div class="col-sm-10 col-md-5">
                                <input type="text" name="add-phone" class="form-control" required="required" placeholder="Please Enter Your Number Phone">
                            </div>
                        </div>
                        <!-- End Phone-number Input Field (Edit) -->

                        <!-- Start Email Input Field (Edit) -->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10 col-md-5">
                                <input type="text" name="add-email" class="form-control" required="required"placeholder="Please Enter Your Email">
                            </div>
                        </div>
                        <!-- End Email Input Field (Edit) -->

                        <!-- Start Submit Button Field (Edit) -->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="Insert" class="btn btn-success">
                            </div>
                        </div>
                        <!-- End Submit Button Field (Edit) -->

                    </form>
                </div>

                

        <?php }elseif  ($Redirect == 'Insert'){ // Insert Page

                echo '<h1 class="text-center">Insert Page</h1>';
                echo '<div class="container">';

                    if($_SERVER['REQUEST_METHOD'] == 'POST') {

                        $insert_user     = $_POST['add-user'];
                        $insert_password = $_POST['add-password'];
                        $insert_phone    = $_POST['add-phone'];
                        $insert_email    = $_POST['add-email'];

                        $hashpassword    = sha1($insert_password);

                        $Errors = array();

                        if(empty($insert_user)) {
            
                            $Errors[] = '<div class="alert alert-danger">The User Can Not By Empty</div>';
            
                        }
                        if (empty($insert_password)) {
            
                            $Errors[] = '<div class="alert alert-danger">The Password Can Not By Empty</div>';
            
                        }
                        if (strlen($insert_password) < 8) {
                        
                            $Errors[] = '<div class="alert alert-danger">The Password Can Not By Less Than 8 Digits</div>';    

                        }
                        if (empty($insert_phone)) {
            
                            $Errors[] = '<div class="alert alert-danger">The Phone Number Can Not By Empty</div>';

                        }
                        if (strlen($insert_phone) < 9) {
                        
                            $Errors[] = '<div class="alert alert-danger">The Phone Number Can Not By Less Than 10 Numbers</div>';    
            
                        }
                        if (empty($insert_email)){
            
                            $Errors[] = '<div class="alert alert-danger">The Email Can Not By Empty</div>';
            
                        } 
                        foreach ($Errors as $error) {
            
                            echo $error;
            
                        }
                        if (empty($Errors)) {

                            $sql = "insert into user(USER_NAME, PASSWORD, PHONE_NUMBER, EMAIL, USER_TYPE) 
                                VALUES ('".$insert_user."', '".$hashpassword."', '".$insert_phone."', '".$insert_email."', '". 1 ."')";

                            $result = mysqli_query($conn, $sql);

                            echo '<div class="alert alert-success">Done The User Is Inserted</div>';

                        }

                        

                    }else{

                        echo 'You Can Not Browse This Page Directly';

                    }

                echo '</div>';

            }elseif ($Redirect == 'Delete') { // Delete Page 
                
                echo '<div class="container">';
                    $check = isset ($_GET['dirId']) && is_numeric ($_GET['dirId']) ? intval($_GET['dirId']) : 0;

                    
                    $sql = "SELECT * FROM user WHERE USER_ID = '$check'";
                
                    $result = mysqli_query($conn, $sql); // Execute MYSQl       Statment      

                    if (mysqli_num_rows($result) > 0 ) {

                        $sql = "DELETE FROM user WHERE USER_ID = '$check'";

                        $result = mysqli_query($conn, $sql); // Execute MYSQl Statment      
                        
                        echo '<div class="alert alert-success">Done The User Was Deleted</div>';

                    }else{

                        echo 'This Id Not Exist ...';

                    }

                echo '</div>';

            }else {

                echo '<div class="alert alert-danger">There Is No Page With This Name</div>';

            }



            include "footer.php";


    }else{

        echo '<div class="alert alert-danger">You Are Not Allowed To Be Here</div>';

    }
}else{

    header('Location: ../Login.php');

    exit();

}
// echo 'Welcome' . "<br>";





?>