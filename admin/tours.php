<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container my-main">

    <h2 class="text-uppercase my-title-ad">Quản lý tours</h2>
    <!-- Button to Add Tour -->
    <a href="add_tours.php" class="btn-primary " style="border-radius:4px; padding:8px;text-decoration: none;">Add Tours</a>
    <br /><br />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S.N</th>
                <th>TourID</th>
                <th>TourName</th>
                <th>TourLocation</th>
                <th>TourVehicle</th>
                <th>TourDes</th>
                <th>TourSchedule</th>
                <th>TourImg</th>
                <th>TourStatus</th>
                <th>GroupID</th>
                <th>Action</th>

            </tr>
        </thead>
        <?php 
                    
                        $sql = "SELECT * FROM tours";
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result)>0){ 
                            $sn=1;
                            while($row=mysqli_fetch_assoc($result)){
                       
    
                                $tourid = $row['TourID'];
                                $tourname = $row['TourName'];
                                $tourlocation = $row['TourLocation'];
                                $tourvehicle = $row['TourVehicle'];
                                $tourdes = $row['TourDes'];
                                $tourschedule = $row['TourSchedule'];
                                $tourimg = $row['TourImg'];
                                $tourstatus = $row['TourStatus'];
                                $groupid = $row['GroupID'];
                                ?>

        <tr>
            <th scope="row"><?php echo $sn++; ?></th>
            <td><?php echo $tourid; ?></td>
            <td><?php echo  $tourname; ?></td>
            <td><?php echo $tourlocation; ?></td>
            <td><?php echo $tourvehicle; ?></td>
            <td><?php echo $tourdes; ?></td>
            <td><?php echo $tourschedule; ?></td>
            <td><img src="<?php echo $tourimg ?>" alt="<?echo $tourName ?>" width="100px"> </td>
            
            <td>
                    <?php 
                if($tourstatus==0)
                echo '<p class="text-success">Chưa khởi hành</p>';
                else 
                echo '<p class="text-danger">Đã khởi hành</p>';
            ?>
                </td>
            <td><?php echo $groupid; ?></td>
            <td>
            <td>
                    <?php
                    if($tourstatus==0){?>
                        <a href="updatetour.php?tourid=<?php echo $tourid; ?>"><button type="button"
                                class="btn btn-success">Update</button></a>

                        <a href="deletetour.php?tourid=<?php echo $tourid; ?>"
                            onclick="return confirm('Bạn chắc chắn muốn xóa?')"><button type="button"
                                class="btn btn-danger">Delete</button></a>
                    <?php } ?>

                </td>
                
            </td>
        </tr>
        <?php
                        }
                    }
                    else{
                        echo $sql;
                    }
                ?>
    </table>
    <!--  -->
</div>
<?php
include('footer.php');
?>