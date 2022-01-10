<?php 
include('header.php');
include('../config/connect.php');
?>
<div class="container f-header my-main">
    <h2 class="text-uppercase my-title-ad">Quản lý admin</h2>
    <a href="add_user_ad.php" type="submit" class="btn btn-primary my-title-ad">Thêm admin</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope=col>STT</th>
                <th scope=col>user_adID</th>
                <th scope=col>user_adName</th>
                <th scope=col>user_adPass</th>
                <th scope=col>user_adEmail</th>
                <th scope=col>user_adStatus</th>
                <th scope=col>Action</th>

            </tr>
        </thead>
       
            <?php
            $sql = "select * from users_ad";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result)>0){
                $STT=1;
                while($row=mysqli_fetch_assoc($result)){
                    $user_adID=$row['user_adID'];
                    $user_adName=$row['user_adName'];
                    $user_adPass=$row['user_adPass'];
                    $user_adEmail=$row['user_adEmail'];
                    $user_adStatus=$row['user_adStatus'];
            ?>
            <tr>
                <th scope=rowphp><?php echo $STT++?></th>
                <td><?php echo $user_adID?></td>
                <td><?php echo $user_adName?></td>
                <td><?php echo $user_adPass?></td>
                <td><?php echo $user_adEmail?></td>
                <td>
                    <?php 
                if($user_adStatus==0)
                echo '<p class="text-danger">Chưa kích hoạt</p>';
                else 
                echo '<p class="text-success">Đã kích hoạt</p>';
            ?>
                </td>
                <td>
                    <?php
                    if($user_adStatus==0){?>
                    <a href="edit_user_ad.php?user_adID=<?php echo $user_adID; ?>"><button type="button"
                            class="btn btn-success">Update</button></a>

                    <a href="del_user_ad.php?user_adID=<?php echo $user_adID; ?>"
                        onclick="return confirm('Bạn chắc chắn muốn xóa?')"><button type="button"
                            class="btn btn-danger">Delete</button></a>
                            <?php } ?>
                </td>
                    </tr>
                <?php       
                }
            }
            else {echo $sql;}
        ?>
        
    </table>
</div>



<?php
include('footer.php');
?>