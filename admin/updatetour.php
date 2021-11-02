<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container my-main" style="overflow: hidden">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <h2 class="text-uppercase my-title-ad">Thay đổi thông tin chi tiết tour</h2>

            <?php 
            $tourid = $_GET['tourid']; 
          
            $sql = "Select * from tours where TourID=$tourid ";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){ 
                while($row=mysqli_fetch_assoc($result)){
                                $tourname = $row['TourName'];
                                $tourlocation = $row['TourLocation'];
                                $tourvehicle = $row['TourVehicle'];
                                $tourdes = $row['TourDes'];
                                $tourschedule = $row['TourSchedule'];
                                $tourimg = $row['TourImg'];
                                $tourstatus = $row['TourStatus'];
                                $groupid = $row['GroupID'];}
        ?>
            <form action="process_edit_tour.php" method="POST">
            <input type="hidden" class="my-title-ad text-success" name="tourid" value="<?php echo $tourid; ?>"> </input>
            <h5 class="my-title-ad text-success">Mã tour: <?php  echo $tourid; ?></h5>
                
                <div class="mb-3">
                    <label for="tourname"><b>Tên tour </b></label>
                    <input type="text" class="form-control" id="tourname" value="<?php echo $tourname?>"
                        name="tourname">
                </div>
                <div class="mb-3">
                    <label for="tourlocation"><b>Địa điểm </b></label>
                    <input type="text" class="form-control" id="tourlocation" value="<?php echo $tourlocation?>"
                        name="tourlocation">
                </div>
                <div class="mb-3">
                    <label for="tourvehicle"><b>Phương tiện</b></label>
                    <input type="text" class="form-control" id="tourvehicle" value="<?php echo $tourvehicle?>"
                        name="tourvehicle">
                </div>
                <div class="mb-3">
                <label for="tourdes"><b>Mô tả tour</b></label>
                </div>
                <div class="mb-3">
                    
                    <textarea style="width: 100%" rows="10" placeholder="<?php echo $tourdes?>" name="tourdes"></textarea>
                    
                </div>
                <div class="mb-3">
                <label for="tourschedule"><b>Lịch trình tour</b></label>
                </div>
                <div class="mb-3">
                    
                    <textarea style="width: 100%" rows="10" placeholder="<?php echo $tourschedule?>" name="tourschedule"></textarea>
                    
                </div>
                <div class="mb-3">
                    <label for="tourimg"><b>Ảnh tour </b></label>
                    <input type="text" class="form-control" id="tourimg" value="<?php echo $tourimg ?>" name="tourimg">
            
                </div>
                
                <div class="mb-3">
                    <label for="tourstatus"><b>Trạng thái tour</b></label>
                    <input type="text" class="form-control" id="tourstatus" value="<?php echo $tourstatus?>"  name="tourstatus">
                </div>
                <div class="mb-3">
                    <label for="groupid"><b>Mã nhóm</b></label>
                    <input type="text" class="form-control" id="groupid" value="<?php echo $groupid ?>" name="groupid">
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