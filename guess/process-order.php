<?php 
include('../config/connect.php');


if(isset($_POST['order'])){
    $userID = $_POST['userID'];
    $tourID =  $_POST['tourID'];
    $name = trim($_POST['hoten']);
    $mobile = trim($_POST['dienthoai']);
    $email = trim($_POST['email']);
    $tourSTDay = $_POST['ngaykh'];
    $quantity = $_POST['solg'];
    $request = trim($_POST['khac']);
    $tourPrice = $_POST['tourPrice'];
    $total = $tourPrice*$quantity;

   
    $sql = "INSERT INTO `tourorder` (`TourID`, `TourSTDay`, `UserID`, `DateOrder`, `QuantityOrder`, `TotalOrder`, `name`, `phone`, `email`, `request`, `StatusOrder`) 
    VALUES ('$tourID', '$tourSTDay', '$userID', current_timestamp(), '$quantity', '$total', '$name', '$mobile', '$email', '$request', '0');";

    $result=mysqli_query($conn, $sql);

    if($result>0){
        header("Location:manageAccount.php");
    }
    else{
        echo $sql;
    }
}


?>

