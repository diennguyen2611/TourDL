<?php 
include('../config/connect.php');


if(isset($_POST['submit'])){
    $hotelName = $_POST['hotelName'];
    $hotelDes = $_POST['hoteldes'];
    $hotelLocation = $_POST['hotellocation'];
    $hotelPhone = $_POST['hotelphone'];
    $hotelImg = $_POST['hotelimg'];
    $tourID= $_POST['tourid'];

    $sql = "insert into `hotels`(hotelName, hotelDes, hotelLocation, hotelPhone, HotelImg, TourID) Values
            ('$hotelName','$hotelDes', '$hotelLocation', '$hotelPhone', '$hotelImg', $tourID)";

    $result=mysqli_query($conn, $sql);

    if($result>0){
        header("Location:hotels.php");
    }
    else{
        echo $sql;
    }
}


?>