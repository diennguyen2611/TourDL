<?php 

include('../config/connect.php');
$id_group = $_GET['groupid'];

$sql = "Update toursgroup set GroupStatus=1 where GroupID=$id_group";
            $result = mysqli_query($conn, $sql);
        
            if($result>0){
                header("Location: tourgroup.php");
            }
            else
            echo $sql;

?>