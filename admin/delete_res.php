<?php 

include('../config/connect.php');

$id = $_GET['id'];

$sql = "delete from restaurants where resID=$id;";
$result = mysqli_query($conn, $sql);

if($result>0){
    header('Location:restaurants.php');
}
else
echo $sql;
