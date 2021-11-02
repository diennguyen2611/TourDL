<?php 
include('../config/connect.php');


if(isset($_POST['submit'])){
    $tourid = $_POST['tourid'];
    $tourstday = $_POST['tourstday'];
    $toureday = $_POST['toureday'];
    $tourprice = $_POST['tourprice'];
    $tourstatus = $_POST['tourstatus'];

    
$sql = "update `tourdetails` set TourEDay='$toureday ', TourPrice='$tourprice',
        TourStatus='$tourstatus' where TourID='$tourid' and TourSTDay ='$tourstday'";


$result = mysqli_query($conn, $sql);

if($result>0){
echo $sql;
header('location: tourdetail.php');
}
else
echo $sql;}
?>