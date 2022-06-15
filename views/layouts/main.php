<?php 
use app\core\Application; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>02safe | Protect you whole life</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/1295/1295141.png" />
    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./css/Boostrap.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</head>
  <body>
  <nav class="navbar navbar-expand-lg  " id="mainNav">
        <div class="container-fluid">
            <!-- <a class="navbar-brand"  href="#page-top"><img src="assets/img/navbar-logo.png"  wit alt="..." /></a> -->
            <div class="h3">
                <!-- <span class="text-primary">02</span><span class="text-white">safe</span><span
                    class="text-primary">.com</span> -->
                   <a href="http://localhost:8080"> <img src=".\assets\img\navbar-logo.png" width="210px" alt="logo"></a>
            </div>
            <button class="navbar-toggler w-25" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="bg-white fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto py-4 py-lg-0">
                <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8080">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8080/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8080/packages">Packages</a>
                    </li>

                    
                   
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8080/shop">Shop</a>
                    </li>                   
                    
                    <li class="nav-item"><a class="nav-link" href="http://localhost:8080/contact">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="http://localhost:8080/card"><span class="text-black h4 py-3"><i class="ri-shopping-cart-fill "></i></span>  </a>
                    </li>

                   
                </ul>

                <a href="http://localhost:8080/build-your-system"><button class="btn btn-primary fw-bold text-white ms-4">Build Your System</button></a>
            </div>
        </div>
    </nav>
  

    <div class="">
        <?php if (Application::$app->session->getFlash('success')) : ?>
            <div class="alert alert-success">
                <?php   echo  Application::$app->session->getFlash('success'); ?>
            </div>
        <?php endif; ?>
        {{content}}
    </div>

    <footer class="footer-59391 mt-3">
        <div class="border-bottom pb-5 mb-4">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3">
                <form action="#" class="subscribe mb-4 mb-lg-0">
                  <div class="form-group">
                  <input type="email" class="form-control" placeholder="Subscribe for our news letter">
                  </div>
                  <button class="btn mt-2 btn-primary">Submit</button>

                </form>
              </div>
              <div class="col-lg-6 text-lg-center">
                <ul class="list-unstyled nav-links nav-left mb-4 mb-lg-0">
                  <li><a href="http://localhost:8080/product">Products</a></li>
                  <li><a href="http://localhost:8080/shop">Shop </a></li>
                  <li><a href="http://localhost:8080/packages">Packages </a></li>

                </ul>
              </div>
              <div class="col-lg-3">
                <ul class="list-unstyled nav-links social nav-right text-lg-right">
                  <li><a href="http://facebook.com"><span><i class=" fa-brands fa-facebook"></i></span></a></li>
                  <li><a href="http://twitter.com"><span ><i class="fa-brands fa-twitter"></i></span></a></li>
                  <li><a href="http://discord.com"><span ><i class="fa-brands fa-discord"></i></span></a></li>
                  <li><a href="http://instagram.com"><span ><i class="fa-brands fa-instagram"></i></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 text-lg-center site-logo order-1 order-lg-2 mb-3 mb-lg-0">
              <!-- <a href="#" class="m-0 p-0">02safe.com</a> -->
              <img src=".\assets\img\navbar-logo.png" width="190px" alt="">
            </div>
            <div class="col-lg-4 order-2 order-lg-1 mb-3 mb-lg-0">
              <ul class="list-unstyled nav-links m-0 nav-left">
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="http://localhost:8080/contact"> Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-4 text-lg-right order-3 order-lg-3">
              <p class="m-0 text-muted"><small>&copy; 2022. All Rights Reserved. with <span class="text-danger"><i class="fa-solid fa-heart"></i></span> By Laghbar</small></p>
            </div>
          </div>
        </div>

    </footer>

  </body>
</html>