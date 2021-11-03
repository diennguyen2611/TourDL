<?php
include('../config/connect.php');
include('sendEmail/send.php');

if(isset($_POST['register'])){
$userName = $_POST['userName'];
$userPhone = $_POST['userPhone'];
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
    $sql1 = "INSERT INTO users (userName, userEmail, userPhone, userPass, userCode, userStatus) VALUES ('$userName','$userEmail', '$userPhone', '$pass_hash','$userCode','0')";
    $result1 = mysqli_query($conn,$sql1);

    if($result1 >=1){
        sendEmail($userEmail, $userCode);
    }
    else echo $sql1;
}

?>

