<?php 

include('../config/connect.php');
$id = $_GET['tourid'];

            $sql = "Update `tours` set TourStatus=1 where TourID=$id";
            $result = mysqli_query($conn, $sql);
        
            if($result>0){
                header("Location: tours.php");
            }
            else
            echo $sql;

?>