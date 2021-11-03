<?php
include('../config/connect.php');

if(isset($_POST['luulai'])){
$tourid = $_POST['tourid'];
$tourstday = $_POST['tourstday'];
$toureday = $_POST['toureday'];
$tourprice = $_POST['tourprice'];


 $sql="INSERT INTO `tourdetails` (TourID,TourSTDay,TourEDay,TourPrice,TourStatus) 
 VALUES ($tourid, '$tourstday','$toureday',$tourprice,'1')";
$result = mysqli_query($conn, $sql);

if($result>0){
    echo $sql;
    header("Location:tourdetail.php");
}
else
echo $sql;}

?>