<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container f-header my-main" style="overflow: hidden">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <h2 class="text-uppercase my-title-ad">Thay đổi thông tin nhóm tour</h2>

            <?php 
            $groupid = $_GET['groupid']; 
            $sql = "Select * from toursgroup where GroupID=$groupid ";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){ 
                while($row=mysqli_fetch_assoc($result)){
                    $groupname = $row['GroupName'];
                    $groupstatus = $row['GroupStatus'];}
        ?>
            <form action="process_edit_toursgroup.php" method="POST">
            <form action="process_edit_grouptour.php" method="POST">
            <input type="hidden" class="my-title-ad text-success" name="groupid" value="<?php echo $groupid; ?>"> </input>
            <h5 class="my-title-ad text-success">Mã nhóm: <?php  echo $groupid; ?></h5>
                
                <div class="mb-3">
                    <label for="groupname"><b>Tên nhóm </b></label>
                    <input type="text" class="form-control" id="groupname" value="<?php echo $groupname?>" name="groupname">
                </div>
                <div class="mb-3">
                <label for="groupstatus" class="form-label" style="font-weight: bold">Trạng thái tour</label>
                <select type="text" class="form-control" name="groupstatus">
                    <option value="0">Đã hủy</option>
                    <option value="1"></option>
                </select>

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

