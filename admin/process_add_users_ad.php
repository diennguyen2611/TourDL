<?php
include('../config/connect.php');

if(isset($_POST['luulai'])){
$user_adName = $_POST['user_adName'];
$user_adPass = $_POST['user_adPass'];
$user_adEmail = $_POST['user_adEmail'];

$sql = "insert into `users_ad`(user_adName, user_adPass, user_adEmail) values ('$user_adName','$user_adPass', '$user_adEmail')";
 
$result = mysqli_query($conn, $sql);

if($result>0){
    echo $sql;
    header("Location:accountadmin.php");
}
else
echo $sql;}

?>