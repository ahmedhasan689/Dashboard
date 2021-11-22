<?php 

include "function.php";

$pageTitle = "Login";

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>
      <?php getTitle(); ?>
  </title>
</head>

<body>
  <!--start header -->
<header>
  <div class="header">

    <div class="navbar"> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-3"  id="navbarResponsive">
              <div class="but">
                <a href="sign.php">
                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#navbarResponsive">تسجيل</button>
                </a>
                <a href="Login.php">
                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#navbarResponsive">تسجيل دخول</button>
                </a>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                      <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">تواصل معنا</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                      <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">الفئات</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                      <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">من نحن</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                      <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">الرئيسية</a>
                    </li>
                </ul>
            </div>
            </div>
            <div class="col-lg-3 col-sm-3">
              <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>
  <!--end header -->