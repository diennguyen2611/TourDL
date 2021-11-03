<?php 
include('../config/connect.php');


if(isset($_POST['submit'])){
    $hotelID = $_POST['hotelID'];
    $hotelName = $_POST['hotelName'];
    $hotelDes = $_POST['hoteldes'];
    $hotelLocation = $_POST['hotellocation'];
    $hotelPhone = $_POST['hotelphone'];
    $hotelImg = $_POST['hotelimg'];
    $tourID= $_POST['tourid'];

    $sql = "update hotels set hotelName='$hotelName', hotelDes='$hotelDes',hotelLocation='$hotelLocation', hotelPhone='$hotelPhone',
    HotelImg='$hotelImg', TourID=$tourID where hotelID=$hotelID;";

    $result=mysqli_query($conn, $sql);

    if($result>0){
        header("Location:hotels.php");
    }
    else{
        echo $sql;
    }
}


?>