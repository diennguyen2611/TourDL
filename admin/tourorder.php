<?php 
include('header.php');
include('../config/connect.php');
?>
<div class="container my-main">
    <h2 class="text-uppercase my-title-ad">Xử lý đơn đặt</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope=col>STT</th>
                <th scope=col>TourID</th>
                <th scope=col>TourSTDay</th>
                <th scope=col>userID</th>
                <th scope=col>DateOrder</th>
                <th scope=col>QuantityOrder</th>
                <th scope=col>TotalOrder</th>
                <th scope=col>Name</th>
                <th scope=col>Phone</th>
                <th scope=col>Email</th>
                <th scope=col>Request</th>
                <th scope=col>StatusOrder</th>
                <th scope=col>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from tourorder";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result)>0){
                $STT=1;
                while($row=mysqli_fetch_assoc($result)){
                    $TourID=$row['TourID'];
                    $TourSTDay=Date($row['TourSTDay']);
                    $UserID=$row['UserID'];
                    $DateOrder=Date($row['DateOrder']);
                    $QuantityOrder=$row['QuantityOrder'];
                    $TotalOrder=Date($row['TotalOrder']);
                    $name=$row['name'];
                    $phone=$row['phone'];
                    $email=$row['email'];
                    $request=$row['request'];
                    $StatusOrder=$row['StatusOrder'];
            ?>
            <tr>
                <th scope=rowphp><?php echo $STT++?></th>
                <td><?php echo $TourID?></td>
                <td><?php echo $TourSTDay?></td>
                <td><?php echo $UserID?></td>
                <td><?php echo $DateOrder?></td>
                <td><?php echo $QuantityOrder?></td>
                <td><?php echo $TotalOrder?></td>
                <td><?php echo $name?></td>
                <td><?php echo $phone?></td>
                <td><?php echo $email?></td>
                <td><?php echo $request?></td>

                <td>
                    <?php 
                if($StatusOrder==0)
                echo '<p class="text-danger">Chưa xử lý</p>';
                else 
                echo '<p class="text-success">Đã xử lý</p>';
            ?>
                </td>


                <td>
                    <?php
                    if($StatusOrder==0){?>
                        <a href="process_order.php?TourID=<?php echo $TourID; ?>&TourSTDay=<?php echo $TourSTDay;?>&UserID=<?php echo $UserID;?>"
                        onclick="return confirm('Bạn đã xử lý xong yêu cầu này?')"><button type="button"
                            class="btn btn-success">Xử lý ngay</button></a>
                    <?php } ?>
                </td>
                <?php       }
            } else echo $sql;
        ?>
        </tbody>
    </table>
</div>



<?php
include('footer.php');
?>