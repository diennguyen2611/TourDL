<?php 
include('../config/connect.php');


if(isset($_POST['submit'])){
    $groupid = $_POST['groupid'];
    $groupname =$_POST['groupname'];
    $groupstatus = $_POST['groupstatus'];

    
$sql = "update `toursgroup` set GroupName=N'$groupname', GroupStatus=' $groupstatus'
 where GroupID='$groupid' ";


$result = mysqli_query($conn, $sql);

if($result>0){
echo $sql;
header('location: tourgroup.php');
}
else
echo $sql;}
?>