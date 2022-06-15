<?php 
use app\core\Application; 
?>

<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>02SAFE Dashboard</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/1295/1295141.png" />

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href="./css/style.css" rel="stylesheet" />
    <link href="" rel="stylesheet" />
    <script src="./css/sidebar.js"></script>


</head>

<body>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <input class="ms-4 " type="text" placeholder="Search...">
            <div class="d-flex user_mrg"> <img src="user.png" alt="" width="40px"> </div><span class="ms-2">Welcome Back Mohamed</span>

        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo"> <i class="fa-solid fa-store"></i></i> <span class="nav_logo-name ">02safe.com</span> </a>
                    <div class="nav_list">
                        <a href="#" class="nav_link active"> <i class="fa-solid fa-cart-flatbed"></i> </i><span class="nav_name">Orders</span> </a>
                        <a href="#" class="nav_link"> <i class="fa-solid fa-box-open"></i> <span class="nav_name">Products</span> </a>
                        <a href="#" class="nav_link"> <i class='bx bx-line-chart nav_icon'></i> <span class="nav_name">Statistic</span> </a>
                        <a href="#" class="nav_link"><i class='nav_icon bx bxs-user-detail'></i> <span class="nav_name">Admin</span> </a>
                    </div>
                </div>
                <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>


        </div>

        <div class="">
        <?php if (Application::$app->session->getFlash('success')) : ?>
            <div class="alert alert-success">
                <?php   echo  Application::$app->session->getFlash('success'); ?>
            </div>
        <?php endif; ?>
        {{content}}
    </div>
    </body>

</html>