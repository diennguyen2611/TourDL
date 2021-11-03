<?php
include('../config/connect.php');

if(isset($_POST['login'])){
$userName = $_POST['userName'];
$userPass1 = $_POST['userPass1'];
$userPass2 = $_POST['userPass2'];
$userEmail = $_POST['userEmail'];
}
$sql = "select * from users where userEmail='$userEmail' and userName='$userName'";
$result = mysqli_query($conn, $sql);

 //  XỬ lý kết quả
 if(mysqli_num_rows($result) > 0){
    echo 'Email hoặc Username đã tồn tại';
}
else{ 
    // Băm mật khẩu
    $pass_hash = password_hash($userPass1, PASSWORD_DEFAULT);
    $userCode = md5(uniqid(rand(), true));
        //Nếu chưa tồn tại, thì chúng ta mới LƯU vào CSDL và GỬI email xác nhận
    $sql1 = "INSERT INTO users (userName, userEmail, userPass, userCode) VALUES ('$userName','$userEmail','$pass_hash','$userCode')";
    $result1 = mysqli_query($conn,$sql1);

    if($result1 >=1){
        sendEmail($userEmail, $userCode);
    }
    else echo $sql1;
}

?>



<!-- 


// 2. Truy vấn dữ liệu
    $sql = "SELECT * FROM db_users WHERE user_email='$email' OR user_name='$user'";
    $result = mysqli_query($conn,$sql);

    // 3. XỬ lý kết quả
    if(mysqli_num_rows($result) > 0){
        echo 'Email hoặc Username đã tồn tại';
    }else{
        // Băm mật khẩu
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $code = md5(uniqid(rand(), true));
            //Nếu chưa tồn tại, thì chúng ta mới LƯU vào CSDL và GỬI email xác nhận
        $sql_2 = "INSERT INTO db_users (user_name, user_email, user_pass,user_code) VALUES ('$user','$email','$pass_hash','$code')";
        $result_2 = mysqli_query($conn,$sql_2);

        if($result_2 >=1){
            sendEmail($email,$code);
        }
    } -->
