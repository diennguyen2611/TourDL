<?php 

include('../config/connect.php');
$id_group = $_GET['groupid'];

$sql="Update toursgroup set GroupStatus=0 where GroupID=$id_group";

            $result = mysqli_query($conn, $sql);
        
            if($result>0){
                $sql1="Update tours set TourStatus=0 where GroupID=$id_group";
                $result1 = mysqli_query($conn, $sql1);
                if($result1>0)
                {
                    header("location: tourgroup.php ");
                }
                else echo $sql1;
            }
            else
            echo $sql;

?>