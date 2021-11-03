<?php
include('../config/connect.php');
    // URL kích hoạt có dạng phương thức GET
    $userEmail = $_GET['userEmail'];
    $userCode  = $_GET['userCode'];

    // 2. Truy vấn dữ liệu
    $sql = "SELECT * FROM users WHERE userEmail='$userEmail' AND userCode='$userCode'";
    $result = mysqli_query($conn,$sql);

    // 3. XỬ lý kết quả
    if(mysqli_num_rows($result) > 0){
        $sql = "UPDATE users SET userStatus = 1 WHERE userEmail = '$userEmail'";
        $result = mysqli_query($conn,$sql);

        if($result > 0){
            echo 'Tài khoản đã được kích hoạt';
        }
    }else{
       echo 'Không thể kích hoạt.';
    }
?>