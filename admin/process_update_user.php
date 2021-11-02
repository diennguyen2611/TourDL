<?php
include('../config/connect.php');

if(isset($_POST['luulai'])){
$user_adID = $_POST['user_adID'];
$user_adName = $_POST['user_adName'];
$user_adPass = $_POST['user_adPass'];
$user_adEmail = $_POST['user_adEmail'];
$user_adStatus = $_POST['user_adStatus'];


$sql = "update `users_ad` set user_adName= '$user_adName', user_adPass = '$user_adPass', user_adEmail = '$user_adEmail'
 where user_adID=$user_adID";

//  user_adStatus = '$user_adStatus'
$result = mysqli_query($conn, $sql);

if($result>0){
    echo $sql;
    header("Location:accountadmin.php");
}
else
echo $sql;}

?>