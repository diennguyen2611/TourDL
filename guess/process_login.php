<?php
    session_start();
    if(isset($_POST['login'])){
        $userEmail = $_POST['userEmail'];
        $userPass = $_POST['userPass'];
        
        //kết nối
        include('../config/connect.php');
    

        //truy vấn tt
        $sql = "select * from `users` where userEmail = '$userEmail'";
        $result = mysqli_query($conn, $sql);

        //xác thực, đăng nhập
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
            $passTrue = $row['userPass'];
            $userStatus = $row['userStatus'];
            }

            if(password_verify($userPass, $passTrue)){
                if($userStatus==1) {
                    header('location:index.php');
                    $_SESSION['login'] = $userEmail;
                }
                else echo 'Tài khoản chưa được kích hoạt';
            }
            else{
                echo 'Mật khẩu không chính xác';
            }
        }
        else{
           echo 'Email không chính xác'; 
           header('location: login.php');    
        }

        //đóng kết nối
        $conn->close();
    }
?>


