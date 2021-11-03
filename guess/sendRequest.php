<?php 
include('../config/connect.php');


if(isset($_POST['sendRequest'])){
    $name = trim($_POST['name']);
    $mobile = trim($_POST['mobile']);
    $email = trim($_POST['email']);
    $request = trim($_POST['request']);

   
    $sql = "INSERT INTO `users_request` (`RequestID`, `name`, `email`, `phone`, `note`, `RequestDay`, `RequestStatus`)
     VALUES (NULL, '$name', '$email', '$mobile', '$request', current_timestamp(), '0');";

    $result=mysqli_query($conn, $sql);

    if($result>0){
        header("Location:index.php");
    }
    else{
        echo $sql;
    }
}


?>

