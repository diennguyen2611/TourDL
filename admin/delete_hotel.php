<?php 

include('../config/connect.php');

$id = $_GET['id'];

$sql = "delete from hotels where hotelID=$id;";
$result = mysqli_query($conn, $sql);

if($result>0){
    header('Location:hotels.php');
}
else
echo $sql;
