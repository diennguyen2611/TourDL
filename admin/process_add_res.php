<?php 
include('../config/connect.php');


if(isset($_POST['submit'])){
    $resName = $_POST['resName'];
    $resDes = $_POST['resdes'];
    $resLocation = $_POST['reslocation'];
    $resPhone = $_POST['resphone'];
    $resImg = $_POST['resimg'];
    $tourID= $_POST['tourid'];

    $sql = "insert into `users_request`(name, email, phone, note, ResImg, TourID) Values
            ('$resName','$resDes', '$resLocation', '$resPhone', '$resImg', $tourID)";

    $result=mysqli_query($conn, $sql);

    if($result>0){
        header("Location:restaurants.php");
    }
    else{
        echo $sql;
    }
}


?>