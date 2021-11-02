<?php
include('../config/connect.php');?>
<?php 
    $sql0 = "select * from contact";
    $result0 = mysqli_query($conn, $sql0);
    if(mysqli_num_rows($result0)>0){
        while($row=mysqli_fetch_assoc($result0)){
            $hotline = $row['Hotline'];
           }}?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="../css/style.css">
  
        <link rel="stylesheet" href="../css/admin.css">
  
    <title>Quản lý tours du lịch</title>



</head>

<body>
    <div class="my-header">

        <!-- Begin: Nav -->
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a href="index.php">
                        <img style="margin-top:12px" src="../img/logo.png" alt="logo" class="rounded-circle"
                            width="60px">
                    </a>
                </div>

                <div class="col-md-8">
                    <nav class="navbar navbar-expand-lg navbar-light my-nav">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav" style="line-height: 40px">
                                    <li class="nav-item hover-th">
                                        <a class="nav-link active text-white" aria-current="page"
                                            href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white hover-th" href="#"
                                            id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Tours
                                        </a>
                                        <ul class="dropdown-menu my-subnav" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="tours.php">Các Tour</a></li>
                                            <li><a class="dropdown-item" href="tourdetail.php">Chi tiết lịch trình</a></li>

                                            <li><a class="dropdown-item" href="tourgroup.php" data-bs-toggle="modal">Nhóm Tour</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white hover-th" href="#"
                                            id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Quản lý dịch vụ
                                        </a>
                                        <ul class="dropdown-menu my-subnav" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="hotels.php">Khách sạn</a></li>
                                            <li><a class="dropdown-item" href="restaurants.php">Nhà hàng</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white hover-th" href="#"
                                            id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Quản lý người dùng
                                        </a>
                                        <ul class="dropdown-menu my-subnav" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="accountuser.php">Tài khoản người dùng</a></li>
                                            <li><a class="dropdown-item" href="accountadmin.php">Tài khoản admin</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white hover-th" href="#"
                                            id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Quản lý đặt tour
                                        </a>
                                        <ul class="dropdown-menu my-subnav" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="tourorder.php">Đơn đặt</a></li>
                                            <li><a class="dropdown-item" href="tourrequest.php">Yêu cầu đặt riêng</a></li>

                                        </ul>
                                    </li>
                                    <li class="nav-item hover-th">
                                        <a class="nav-link active text-white" aria-current="page"
                                            href="contact.php">Contact</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-md-3" style="margin-top:15px">

                    <div class="dropdown float-end">
                        <button style="line-height: 40px" class="btn dropdown-toggle text-white hover-th" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                            Tài khoản
                        </button>
                        <ul style="max-width: 300px" class="dropdown-menu text-center"
                            aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#login-admin" style="font-weight:500"
                                    data-bs-toggle="modal">Đăng xuất</a></li>
                            <li><a class="dropdown-item" href="#login-admin" style="font-weight:500"
                                    data-bs-toggle="modal">Đổi mật khẩu</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Nav -->


   