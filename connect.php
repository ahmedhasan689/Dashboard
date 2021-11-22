<?php

$hostname = "localhost";
$rootname = "root";
$password = "";
$db_name   = "team";

$conn = mysqli_connect($hostname, $rootname, $password, $db_name);

if (!$conn) {
    echo "Connection Failed";
}



?>
