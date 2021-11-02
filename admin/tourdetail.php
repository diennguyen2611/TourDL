<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container my-main">

    <h2 class="text-uppercase my-title-ad">Quản lý tours</h2>
    <!-- Button to Add Tour -->
    <a href="#" class="btn-primary " style="border-radius:4px; padding:8px;text-decoration: none;">Add Tours</a>
    <br /><br />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S.N</th>
                <th>TourID</th>
                <th>TourSTDay</th>
                <th>TourEDay</th>
                <th>TourPrice</th>
                <th>TourStatus</th>
                <th>Action</th>

            </tr>
        </thead>
        <?php 
                    
                        $sql = "SELECT * FROM tourdetails";
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result)>0){ 
                            $sn=1;
                            while($row=mysqli_fetch_assoc($result)){
                       
    
                                $tourid = $row['TourID'];
                                $tourstday = $row['TourSTDay'];
                                $toureday = $row['TourEDay'];
                                $tourprice = $row['TourPrice'];
                                $tourstatus = $row['TourStatus'];
                            
                                ?>

        <tr>
            <th scope="row"><?php echo $sn++; ?></th>
            <td><?php echo $tourid; ?></td>
            <td><?php echo  $tourstday; ?></td>
            <td><?php echo $toureday; ?></td>
            <td><?php echo $tourprice; ?></td>
            <td><?php echo $tourstatus; ?></td>
            <td>
                <a href="updatetourdetail.php?tourid= <?php echo $tourid; ?>&tourstday=<?php echo $tourstday; ?>"><button
                        type="button" class="btn btn-success">Update</button></a>
                <a href="deletetourdetail.php?tourid=<?php echo $tourid; ?>&tourstday='<?php echo $tourstday;?>'"
                    onclick="return confirm('Bạn chắc chắn muốn xóa?')"><button type="button"
                        class="btn btn-danger">Xóa</button></a>
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