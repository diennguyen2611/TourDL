<?php 
include('header.php');
include('../config/connect.php');
?>
<div class="container f-header my-main">
    <h2 class="text-uppercase my-title-ad">Xử lý yêu cầu</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope=col>STT</th>
                <th scope=col>RequestID</th>
                <th scope=col>Name</th>
                <th scope=col>Email</th>
                <th scope=col>Phone</th>
                <th scope=col>Note</th>
                <th scope=col>RequestDay</th>
                <th scope=col>RequestStatus</th>
                <th scope=col>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from users_request";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result)>0){
                $STT=1;
                while($row=mysqli_fetch_assoc($result)){
                    $RequestID=$row['RequestID'];
                    $name=$row['name'];
                    $email=$row['email'];
                    $phone=$row['phone'];

                    $note=$row['note'];
                    $RequestDay=Date($row['RequestDay']);
                    $RequestStatus=$row['RequestStatus'];
            ?>
            <tr>
                <th scope=rowphp><?php echo $STT++?></th>
                <td><?php echo $RequestID?></td>
                <td><?php echo $name?></td>
                <td><?php echo $email?></td>

                <td><?php echo $phone?></td>
                <td><?php echo $note?></td>
                <td><?php echo $RequestDay?></td>
                <td>
                    <?php 
                if($RequestStatus==0)
                echo '<p class="text-danger">Chưa xử lý</p>';
                else 
                echo '<p class="text-success">Đã xử lý</p>';
            ?>
                </td>
                <td>
                    <?php 
                    if($RequestStatus==0){?>
                        <a href="process_request.php?RequestID=<?php echo $RequestID; ?>"
                        onclick="return confirm('Bạn đã xử lý xong yêu cầu này?')"><button type="button"
                            class="btn btn-success">Xử lý ngay</button></a>
                   <?php }
                    ?>
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