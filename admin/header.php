<?php

include "../connect.php";
include "../function.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php getTitle(); ?>
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/admin.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Admin-nav" aria-controls="Admin-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="Admin-nav">

            <ul class="navbar-nav mr-auto">
                <!-- Name Of The Site -->
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">main<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.php?Cate=Manage&dirId=<?php echo $_SESSION['ID'] ?>">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Articles</a>
                </li>

            <!-- Dropdown List -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="user.php?Redirect=Edit&dirId=<?php echo $_SESSION['ID'] ?>">Edit</a>
                <a class="dropdown-item" href="#">Options</a>
                <a class="dropdown-item" href="subadmin.php?Sub=Manage&dirId=<?php echo $_SESSION['ID'] ?>">Sub-Admins</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../Logout.php">Logout</a>
                </div>
            </li>

        </ul>
    </div>
</nav>


