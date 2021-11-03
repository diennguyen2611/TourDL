<?php 
include('../config/connect.php');


if(isset($_POST['submit'])){
    $resID = $_POST['resID'];
    $resName = $_POST['resName'];
    $resDes = $_POST['resdes'];
    $resLocation = $_POST['reslocation'];
    $resPhone = $_POST['resphone'];
    $resImg = $_POST['resimg'];
    $tourID= $_POST['tourid'];

    $sql = "update restaurants set resName='$resName', resDes='$resDes', resLocation='$resLocation', resPhone='$resPhone',
    ResImg='$resImg', TourID=$tourID where resID=$resID;";

    $result=mysqli_query($conn, $sql);

    if($result>0){
        header("Location:restaurants.php");
    }
    else{
        echo $sql;
    }
}


?>