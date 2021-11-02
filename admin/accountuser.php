<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container my-main">

    <h2 class="text-uppercase my-title-ad">Quản lý tài khoản người dùng</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope=col>STT</th>
                <th scope=col>userID</th>
                <th scope=col>userName</th>
                <th scope=col>userPass</th>
                <th scope=col>userEmail</th>
                <th scope=col>userPhone</th>
                <th scope=col>registration_date</th>
                <th scope=col>userStatus</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "select * from users";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result)>0){
                $STT=1;
                while($row=mysqli_fetch_assoc($result)){
                    $userID=$row['userID'];
                    $userName=$row['userName'];
                    $userPass=$row['userPass'];
                    $userEmail=$row['userEmail'];
                    $userPhone=$row['userPhone'];
                    $registration_date=$row['registration_date'];
                    $userStatus=$row['userStatus'];?>
                <tr>
                    <th scope=rowphp><?php echo $STT++?></th>
                    <td><?php echo $userID?></td>
                    <td><?php echo $userName?></td>
                    <td><?php echo $userPass?></td>
                    <td><?php echo $userEmail?></td>
                    <td><?php echo $userPhone?></td>
                    <td><?php echo $registration_date?></td>
                    <td>
                    <?php 
                if($userStatus==0)

                echo '<p class="text-danger">Chưa kích hoạt</p>';
                else 
                echo '<p class="text-success">Đã kích hoạt</p>';
            ?>

                </td>
                </tr>
         <?php       
         }
    } else echo $sql;
        ?>

        </tbody>
    </table>
</div>



<?php
include('footer.php');
?>





















