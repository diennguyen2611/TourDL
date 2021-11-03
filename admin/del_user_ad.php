<?php 
include('../config/connect.php');

//lấy id

$user_adID = $_GET['user_adID'];

$sql = "delete from users_ad where user_adID = $user_adID ";
$result = mysqli_query($conn, $sql);

if($result>0){
    header("Location: accountadmin.php");
}
else
echo $sql;

?>
