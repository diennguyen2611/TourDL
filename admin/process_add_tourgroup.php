<?php
include('../config/connect.php');

if(isset($_POST['luulai'])){
$groupname = $_POST['groupname'];


 $sql="INSERT INTO `toursgroup` (`GroupID`, `GroupName`, `GroupStatus`) VALUES (NULL, '$groupname', '1')";
$result = mysqli_query($conn, $sql);

if($result>0){
    echo $sql;
    header("Location:tourgroup.php");
}
else
echo $sql;}

?>