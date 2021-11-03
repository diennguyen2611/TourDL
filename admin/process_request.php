<?php 
include('../config/connect.php');

//lấy id

$RequestID = $_GET['RequestID'];

$sql = "update users_request set RequestStatus = 1 where RequestID = $RequestID ";
$result = mysqli_query($conn, $sql);

if($result>0){
    header("Location: tourrequest.php");
}
else
echo $sql;

?>