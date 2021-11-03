<?php 
include('../config/connect.php');
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../css/admin.css">

    <title>Login</title>

</head>

<section class="vh-100 bg-image " style="background-image: url('https://i.pinimg.com/originals/d6/f4/32/d6f432ba8c5e212482f6cd9469a66944.jpg');">
  <div class=" mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                        <h2 class=" text-center mb-5">Login</h2>
                        <form action= "process_login.php" method="POST">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3cg"> Email</label>
                                <input type="email" id="form3Example3cg"  name="userEmail" class="form-control form-control-lg" 
                                aria-describedby="emailHelp">
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example4cg">Password</label>
                                <input type="password" id="form3Example4cg" name="userPass"  class="form-control form-control-lg" />
                            </div>

                            <div class="d-flex justify-content-center">
                        
                                    <button type="submit" name="login"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Đăng
                                        nhập</button>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
</body>

</html>