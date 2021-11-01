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
                                        <a class="nav-link active text-white" aria-current="page" href="moretour.php">Tours</a>
                                    </li>
                                    <li class="nav-item hover-th">
                                        <a class="nav-link active text-white" aria-current="page" href="#footer">Contact</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white hover-th" href="#"
                                            id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">More
                                        </a>
                                        <ul class="dropdown-menu my-subnav" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Khách sạn</a></li>
                                            <li><a class="dropdown-item" href="#">Ăn uống</a></li>

                                            <li><a class="dropdown-item" href="#login-guess"
                                                    data-bs-toggle="modal">Tài khoản đặt tour</a></li>
                                        </ul>


                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-md-5" style="margin-top:15px">
                    <h6 class="float-end text-white" style="line-height:50px; margin-left: 16px;">0293454365</h6>

                    <div class="dropdown float-end">
                        <button style="line-height: 40px" class="btn dropdown-toggle text-white hover-th" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                            Tài khoản
                        </button>
                        <ul style="max-width: 300px" class="dropdown-menu text-center"
                            aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#login-admin" style="font-weight:500" data-bs-toggle="modal">Đăng nhập</a></li>
                            <p>Chưa có tài khoản <a href="#register" data-bs-toggle="modal">Đăng ký</a> ngay</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Nav -->

    <!-- Giao diện Tài khoản đặt tour -->
    <div class="modal fade" id="login-guess" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Đăng nhập</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                name="email" placeholder="Địa chỉ Email">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Mật khẩu">

                        </div>
                        <button type="submit" class="btn btn-th" name="login" style="width: 100%;">Đăng nhập</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End: Nav -->

