<?php 

session_start();

$id = $_SESSION['ID'];

if (isset($_SESSION['email-session'])) {

// Include File ...
include '../connect.php';
include 'header.php';

// Check If If You Are Allowed Here ...

    $statement = "SELECT CATEGORY_CONTROLL FROM rules WHERE USER_ID = '$id'";
    $query     = mysqli_query($conn, $statement);
    $result    = mysqli_fetch_array($query);

    // print_r($result);

    if ($result['CATEGORY_CONTROLL'] == 1){
        

        $Cate = isset($_GET['Cate']) ? $_GET['Cate'] : 'Manage';

        if ($Cate == 'Manage') { 
            
            $sql = "SELECT * FROM category";

            $query = mysqli_query($conn, $sql);
            
        ?>

            <h1 class="text-center">Manage Category</h1>
            <div class="container">
                    <a href="?Cate=Add" class="btn btn-primary">
                        <i class="fas fa-plus"></i> 
                        Add Category
                    </a>
                    <div class="table-responsive">
                        <table class="main-table text-center table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Category_Type</td>
                                <td>CONTROL</td>
                            </tr>

                            <?php

                                    while ($result = mysqli_fetch_assoc($query)) {
                                        if ($result['CATEGORY'] == 1) {

                                            $result['CATEGORY'] =   "مهن صحية";

                                        }else{

                                            $result['CATEGORY'] =   "مهن حرفية";

                                        }
                                        echo '<tr>';
                                        echo '<td>' . $result['ID']      . '</td>';
                                        echo '<td>' . $result['NAME']    . '</td>';
                                        
                                        echo '<td>' . $result['CATEGORY'] . '</td>';
                                        echo '<td>
                                                <a href="?Cate=Edit&dirId=' . $result['ID'] . '" class="btn btn-success">Edit</a>
                                                <a href="?Cate=Delete&dirId=' . $result['ID'] . '" class="btn btn-danger confirm">Delete</a>
                                            </td>';
                                    echo '</tr>';   
                                    }
        
                            ?>                 

                        </table>

                    </div>
                    
                </div>

<?php   }elseif ($Cate == 'Add'){ ?>
             <h1 class="text-center">Add Category</h1>

             <div class="container">
                 <form class="form-horizontal" action="?Cate=Insert" method="POST">
                     <input type="hidden"> 


                     <!-- Start Job-Name Input Field (Add) -->
                     <div class="form-group form-group-lg">
                         <label class="col-sm-2 control-label">Job-Name</label>
                         <div class="col-sm-10 col-md-5">
                             <input type="text" name="job" class="form-control" autocomplete="off" required="required" placeholder="Please Enter The Job Name">
                         </div>
                     </div>
                     <!-- End Job-Name Input Field (Add) -->

                     <!-- Start Checkbox Field (Add) -->
                     <div class="input-group-prepend d-flex px-3 py-2">
                        <div class="input-group-text">
                            <h6 style="margin-right: 8px; padding-top: 5px;">Select The Category :</h6><br>
                            <div>

                                <input type="checkbox" aria-label="Checkbox for following text input" name="Cate-1" checked="checked" style="margin-right: 8px">
                                <span style="margin-right: 10px">مهن صحية</span>
                            </div>
                            <br>
                            <div>
                                <input type="checkbox" aria-label="Checkbox for following text input" name="Cate-0" style="margin-right: 8px">
                                <span style="margin-right: 10px">مهن حرفية</span>
                            </div>
                        </div>
                    </div>
                     <!-- End Checkbox Field (Add) -->

                     <!-- Start Submit Button Field (Add) -->
                     <div class="form-group">
                         <div class="col-sm-offset-2 col-sm-10">
                             <input type="submit" value="Insert" class="btn btn-success">
                         </div>
                     </div>
                     <!-- End Submit Button Field (Edit) -->

                 </form>
             </div>



 <?php       }elseif ($Cate == 'Insert') {

            // echo "You Are In Insert Page => Category";
            echo '<h1 class="text-center">Insert Page</h1>';
            echo '<div class="container">';
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $job = $_POST['job-name'];

                    $category_type = '';

                    if (isset($_POST['Cate-1'])) {

                        $category_type = 1;

                    }elseif (isset($_POST['Cate-0'])){

                        $category_type = 0;

                    }else{

                        echo "Nothing To Insert";

                    }
                    
                    $sql = "insert into category(NAME, CATEGORY) 
                            VALUES ('".$job."', '".$category_type."')";

                    $result = mysqli_query($conn, $sql);

                    echo '<div class="alert alert-success">Done The Job-Name Is Inserted</div>';


                }



            echo '<div>';


        }elseif ($Cate == 'Edit'){ 

            $check = isset ($_GET['dirId']) && is_numeric ($_GET['dirId']) ? intval($_GET['dirId']) : 0;
            
            $sql = "SELECT * FROM category WHERE ID = '$check'";
            
            $query = mysqli_query($conn, $sql); // Execute MYSQl Statment
            
            $result = mysqli_fetch_array($query);
            
           
            ?>

            <h1 class="text-center">Add Category</h1>

             <div class="container">
                 <form class="form-horizontal" action="?Cate=Update" method="POST">
                     <input type="hidden" name="hidId" value="<?php echo $check ?>"> 


                     <!-- Start Job-Name Input Field (Add) -->
                     <div class="form-group form-group-lg">
                         <label class="col-sm-2 control-label">Job-Name</label>
                         <div class="col-sm-10 col-md-5">
                             <input type="text" name="job" class="form-control" autocomplete="off" required="required" value="<?php echo $result['NAME'] ?>" placeholder="Please Enter The Job Name">
                         </div>
                     </div>
                     <!-- End Job-Name Input Field (Add) -->

                     <!-- Start Checkbox Field (Add) -->
                     <div class="input-group-prepend d-flex px-3 py-2">
                        <div class="input-group-text">
                            <h6 style="margin-right: 8px; padding-top: 5px;">Select The Category :</h6><br>
                            <div>

                                <input type="checkbox" aria-label="Checkbox for following text input" name="Cate-edit-1" checked="checked" style="margin-right: 8px">
                                <span style="margin-right: 10px">مهن صحية</span>
                            </div>
                            <br>
                            <div>
                                <input type="checkbox" aria-label="Checkbox for following text input" name="Cate-edit-0" style="margin-right: 8px">
                                <span style="margin-right: 10px">مهن حرفية</span>
                            </div>
                        </div>
                    </div>
                     <!-- End Checkbox Field (Add) -->

                     <!-- Start Submit Button Field (Add) -->
                     <div class="form-group">
                         <div class="col-sm-offset-2 col-sm-10">
                             <input type="submit" value="Insert" class="btn btn-success">
                         </div>
                     </div>
                     <!-- End Submit Button Field (Edit) -->

                 </form>
             </div>            

<?php   }elseif ($Cate == 'Update'){
            echo "<h1 class='text-center'>Update User</h1>"; 
            echo "<div class='container'>"; 

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $cate_id = $_POST['hidId']; 

                $cate_name = $_POST['job'];

                $cate_type = '';
                if (isset($_POST['Cate-edit-1'])){

                    $cate_type = 1;


                }elseif (isset($_POST['Cate-edit-0'])){

                    $cate_type = 0;

                }else{

                    echo 'Nothing';

                }

                $sql = "UPDATE category SET NAME = '$cate_name', CATEGORY = '$cate_type' WHERE ID = '$cate_id'";
                        
                $result = mysqli_query($conn, $sql);
                    
                echo '<div class="alert alert-success">Done The ID Number <strong>[ ' .$cate_id . ' ]</strong> Is Updated</div>';

            }else{
                echo '<div class="alert alert-danger">You Can Not Browse This Page Redirect !</div>';
            }



        }elseif ($Cate == 'Delete'){
            echo '<div class="container">';
                    $check = isset ($_GET['dirId']) && is_numeric ($_GET['dirId']) ? intval($_GET['dirId']) : 0;

                    
                    $sql = "SELECT * FROM category WHERE ID = '$check'";
                
                    $result = mysqli_query($conn, $sql); // Execute MYSQl       Statment      

                    if (mysqli_num_rows($result) > 0 ) {

                        $sql = "DELETE FROM category WHERE ID = '$check'";

                        $result = mysqli_query($conn, $sql); // Execute MYSQl Statment      
                        
                        echo '<div class="alert alert-success">Done The User Was Deleted</div>';

                    }else{

                        echo 'This Id Not Exist ...';

                    }

            echo '</div>';


        }

    }
    

    


    include 'footer.php';
}else{

    echo 'Not Here';


}






?>