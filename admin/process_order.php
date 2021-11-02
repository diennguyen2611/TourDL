<?php 
include('../config/connect.php');

//lấy id

$TourID = $_GET['TourID'];
$TourSTDay = $_GET['TourSTDay'];
$UserID = $_GET['UserID'];


$sql = "update tourorder set StatusOrder = 1 where TourID = $TourID and TourSTDay = '$TourSTDay' and UserID = $UserID ";
$result = mysqli_query($conn, $sql);

if($result>0){
    header("Location: tourorder.php");
}
else
echo $sql;

?>