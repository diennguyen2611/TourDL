<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container my-main" style="overflow: hidden">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <h2 class="text-uppercase my-title-ad">Thay đổi thông tin nhóm tour</h2>

            <?php 
            $sql = "Select * from toursgroup";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){ 
                while($row=mysqli_fetch_assoc($result)){
                                $groupid = $row['GroupID'];
                                $groupname = $row['GroupName'];
                                $groupstatus = $row['GroupStatus'];}
        ?>
            <form action="process_edit_toursgroup.php" method="POST">
                <div class="mb-3">
                    <label for="groupid"><b>Mã nhóm</b></label>
                    <input type="text" class="form-control" id="groupid" value="<?php echo $groupid ?>" name="groupid">
                </div>
                <div class="mb-3">
                    <label for="groupname"><b>Tên nhóm </b></label>
                    <input type="text" class="form-control" id="groupname" value="<?php echo $groupname?>" name="groupname">
                </div>
                <div class="mb-3">
                    <label for="groupstatus"><b>Trạng thái tour</b></label>
                    <input type="text" class="form-control" id="groupstatus" value="<?php echo $groupstatus?>"  name="groupstatus">
                </div>

                <hr>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success" name="submit">Lưu lại</button>
                </div>

            </form>
            <?php }
        else
        echo $sql; ?>
        </div>
    </div>



</div>



<?php
include('footer.php');
?>

