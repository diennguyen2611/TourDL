<?php
include('../config/connect.php');

if(isset($_POST['luulai'])){
$user_adName = $_POST['user_adName'];
$user_adPass1 = $_POST['user_adPass1'];
$user_adPass2 = $_POST['user_adPass2'];
$user_adEmail = $_POST['user_adEmail'];
}
$sql_0 = "select * from users_ad where user_adEmail='$user_adEmail' and user_adName='$user_adName'";
$result_0 = mysqli_query($conn, $sql_0);

 //  XỬ lý kết quả
 if(mysqli_num_rows($result_0) > 0){
    echo 'Email hoặc Username đã tồn tại';
}
else{ 
    // Băm mật khẩu
    $pass_hash = password_hash($user_adPass1 , PASSWORD_DEFAULT);
        //Nếu chưa tồn tại, thì chúng ta mới LƯU vào CSDL và GỬI email xác nhận
    $sql_1 = "INSERT INTO users_ad (user_adName, user_adPass, user_adEmail , user_adStatus) 
    VALUES ('$user_adName','$pass_hash','$user_adEmail','0')";
    $result_1 = mysqli_query($conn,$sql_1);

    if($result_1 >= 1){
        header("Location:accountadmin.php");
    }
    else{
        echo $sql_1;}
}

?>