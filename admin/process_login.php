<?php
include('../config/connect.php');

    session_start();
    if(isset($_POST['submit'])){
        $ademail = $_POST['txtEmail'];
        $adpass = $_POST['txtPass'];

        //truy vấn tt
        $sql = "select * from `users_ad` where user_adEmail = '$ademail'";
        $result = mysqli_query($conn, $sql);

        //xác thực, đăng nhập
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
            $user_adname = $row['user_adName'];
            $passTrue = $row['user_adPass'];
 
            if(password_verify($adpass, $passTrue)){
                header("Location:index.php");
                $_SESSION['success'] = $user_adname;
                $_SESSION['pass'] = $adpass;
            }
            else{              
           header("Location:login.php");
            }}
        }
        else{
           echo 'Email không chính xác';     
           header("Location:login.php");
        }

        //đóng kết nối
    }
?>
