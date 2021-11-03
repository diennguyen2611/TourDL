<?php 
    session_start(); 
?>

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

                <div class="col-md-5">
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
                                    <li class="nav-item hover-th">

                                        <a class="nav-link active text-white" aria-current="page"
                                            href="moretour.php?id=0">Tours</a>
                                    </li>
                                    <li class="nav-item hover-th">
                                        <a class="nav-link active text-white" aria-current="page"
                                            href="#footer">Contact</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white hover-th" href="#"
                                            id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">More
                                        </a>
                                        <ul class="dropdown-menu my-subnav" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="hotels.php">Khách sạn</a></li>
                                            <li><a class="dropdown-item" href="restaurant.php">Ăn uống</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-md-5" style="margin-top:15px">
                    <h6 class="float-end text-white" style="line-height:50px; margin-left: 16px;">
                        <?php echo  $hotline ?></h6>

                    <div class="dropdown float-end">
                        <button style="line-height: 40px" class="btn dropdown-toggle text-white hover-th" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                            <?php 
                                if(isset($_SESSION['login'])){
                                    $userEmail = $_SESSION['login'];
                                    $sql = "select * from users where userEmail = '$userEmail'";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result)>0){
                                        while($row = mysqli_fetch_assoc($result)){
                                        $userName = $row['userName'];
                                        }
                                    echo $userName;
                                  ?>
                        </button>
                        <ul style="max-width: 300px" class="dropdown-menu text-center"
                            aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="logout.php" style="font-weight:500"
                                    >Đăng xuất</a></li>
                            <li><a class="dropdown-item" href="manageAccount.php" style="font-weight:500" >Quản lý
                                    tài khoản</a></li>
                        </ul> <?php

                        }}
                        else { echo 'Tài khoản';
                        ?>
                        </button>
                        <ul style="max-width: 300px" class="dropdown-menu text-center"
                            aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="login.php" style="font-weight:500">Đăng nhập</a></li>
                            <p>Chưa có tài khoản <a href="#register" data-bs-toggle="modal">Đăng ký</a> ngay</p>
                        </ul>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Nav -->

    
<<<<<<< HEAD
=======

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

 
>>>>>>> 1a3f1854b4b06d2f9b6a9fbf073490b7bc813da6
    <!-- -->
    <!-- Modal register -->
    <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Đăng ký</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="process_register.php" method="POST">
                        <div class="mb-3">
                            <label for="userName" class="form-label">Họ tên </label>
                            <input type="text" class="form-control" id="userName" name="userName" placeholder="Họ tên ">
                        </div>

                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Email </label>
                            <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp"
                                name="userEmail" placeholder="Email ">
                        </div>
                        <div class="mb-3">
                            <label for="userPhone" class="form-label">Điện thoại </label>
                            <input type="text" class="form-control" id="userPhone" name="userPhone" placeholder="Điện thoại">
                        </div>
                        <div class="mb-3">
                            <label for="userPass1" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="userPass1" name="userPass1"
                                placeholder="Mật khẩu">

                        </div>
                        <div class="mb-3">
                            <label for="userPass2" class="form-label">Xác nhận mật khẩu</label>
                            <input type="password" class="form-control" id="userPass2" name="userPass2"
                                placeholder="Xác nhận mật khẩu">

                        </div>
                        <button type="submit" class="btn btn-th" name="register" style="width: 100%;">Đăng ký</button>
                        <div class="mb-3">
                            <hr>
                           <p class="text-center">Bạn đã có tài khoản?<a class="text-danger" href="login.php">Đăng nhập</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- -->