<?php 

session_start();

include 'connect.php';
include 'header.php';
$sql = "SELECT MAX(USER_ID) AS Max_Id FROM user";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);

// "Welcome " . print_r ($result['Max_Id']);

?>

    <main>
        <div class="infomation">
            Ahmed
        </div>











    </main>

<?php include 'footer.php' ?>
</body>
</html>