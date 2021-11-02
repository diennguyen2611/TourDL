<?php 
include('../config/connect.php');


if(isset($_POST['submit'])){
    $tourid = $_POST['tourid'];
    $tourlocation = $_POST['tourlocation'];
    $tourvehicle = $_POST['tourvehicle'];
    $tourdes = $_POST['tourdes'];
    $tourschedule = $_POST['tourschedule'];
    $tourimg = $_POST['tourimg'];
    $tourstatus = $_POST['tourstatus'];
    $groupid = $_POST['groupid'];                             
 
$sql = "update `tours` set TourLocation='$tourlocation ', TourVehicle='$tourvehicle',
TourDes='$tourdes', TourSchedule='$tourschedule' , TourImg='$tourimg' , TourStatus=$tourstatus,
GroupID=$groupid where TourID='$tourid'";


$result = mysqli_query($conn, $sql);

if($result>0){
echo $sql;
header('location: tours.php');
}
else
echo $sql;}
?>
