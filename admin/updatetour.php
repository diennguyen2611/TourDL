<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container f-header my-main" style="overflow: hidden">
    <div class="row">
       
        <div class="col-md-12">

            <h5 class="my-title-ad">Tour<span class="t-child-2"> > Các Tour<span class="t-child-3"> > Sửa</span></span></h5>
           

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

            <form action="process_edit_tour.php" method="POST" class="edit-tour">
                <input type="hidden" class="my-title-ad text-success" name="tourid" value="<?php echo $tourid; ?>">
                </input>


                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="text-end">Tên tour:</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="tournameE" value="<?php echo $tourname?>"
                                name="tourname">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="text-end">Địa điểm:</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="tourlocationE" value="<?php echo $tourlocation?>"
                                name="tourlocation">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="text-end">Phương tiện:</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="tourvehicleE" value="<?php echo $tourvehicle?>"
                                name="tourvehicle">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="text-end">Mô tả tour:</p>
                        </div>
                        <div class="col-md-6">
                            <textarea style="width: 100%" rows="10" name="tourdes" id="tourdesE"><?php echo $tourdes?></textarea>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="text-end">Lịch trình tour:</p>
                        </div>
                        <div class="col-md-6">
                            <textarea style="width: 100%" rows="10"
                                name="tourschedule" id="tourscheduleE"><?php echo  $tourschedule?></textarea>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="text-end">Ảnh tour:</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="tourimgE" value="<?php echo $tourimg ?>"
                                name="tourimg">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="text-end">Trạng thái tour:</p>
                        </div>
                        <div class="col-md-6">
                            <select type="text" class="form-control" name="tourstatus">
                                <option value="0">Ngưng hoạt động</option>
                                <option value="1">Đang hoạt động</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="text-end">Nhóm tour:</p>
                        </div>
                        
                        <div class="col-md-6">
                            <select type="text" class="form-control" name="groupid">
                            <?php
                            $sql11 = "Select * from toursgroup";
                            $result11 = mysqli_query($conn, $sql11);
                            if(mysqli_num_rows($result11)>0){ 
                            while($row=mysqli_fetch_assoc($result11)){
                            $groupname = $row['GroupName'];                       
                            ?>
                                <option value="<?php echo $groupid ?>"><?php echo $groupname ?></option>
                            <?php }} ?>
                            </select>
                        </div>
                    </div>
                </div>
               
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6 text-end">
                        <button type="submit" class="btn btn-success" name="submit" id="btnEdit">Lưu lại</button>
                    <a type="button" class="btn btn-secondary" href="tours.php">Hủy</a>
                        </div>
                    </div>
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