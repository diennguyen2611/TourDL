<?php
include('../config/connect.php');

if(isset($_POST['luulaitour'])){

$tourname = $_POST['tourname'];
$tourlocation = $_POST['tourlocation'];
$tourvehicle = $_POST['tourvehicle'];
$tourdes = $_POST['tourdes'];
$tourschedule = $_POST['tourschedule'];
$tourimg = $_POST['tourimg'];
$groupid = $_POST['groupid'];


 $sql="INSERT INTO `tours` (TourID,TourName,TourLocation,TourVehicle,TourDes, TourSchedule,TourImg,GroupID,TourStatus) 
 VALUES (NULL, '$tourname', '$tourlocation','$tourvehicle','$tourdes','$tourschedule', '$tourimg',$groupid,0)";
$result = mysqli_query($conn, $sql);

if($result>0){
    echo $sql;
    header("Location:tours.php");
}
else
echo $sql;}

?>