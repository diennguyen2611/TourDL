<?php 
include('../config/connect.php');

//lấy id

$RequestID = $_GET['RequestID'];

$sql = "delete from users_request where RequestID = $RequestID ";
$result = mysqli_query($conn, $sql);

if($result>0){
    header("Location: tourrequest.php");
}
else
echo $sql;

?>