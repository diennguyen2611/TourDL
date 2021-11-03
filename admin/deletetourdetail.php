<?php 

include('../config/connect.php');
$tourid = $_GET['tourid'];
$tourstday = $_GET['tourstday'];
            $sql = "Update tourdetails set TourStatus=1 where TourID=$tourid and TourSTDay='$tourstday' ";
            $result = mysqli_query($conn, $sql);
        
            if($result>0){
                
                header("Location: tourdetail.php");
            }
            else
            echo $sql;

?>