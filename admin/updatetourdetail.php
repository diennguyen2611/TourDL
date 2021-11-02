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
            $sql = "Select * from tourdetails";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){ 
                while($row=mysqli_fetch_assoc($result)){
                    $tourid = $row['TourID'];
                    $tourstday = $row['TourSTDay'];
                    $toureday = $row['TourEDay'];
                    $tourprice = $row['TourPrice'];
                    $tourstatus = $row['TourStatus'];}
        ?>
            <form action="process_edit_tourdetail.php" method="POST">
            <form action="process_edit_tour.php" method="POST">
            <input type="hidden" class="my-title-ad text-success" name="tourid" value="<?php echo $tourid; ?>"> </input>
            <h5 class="my-title-ad text-success">Mã tour: <?php  echo $tourid; ?></h5>
                
                <div class="mb-3">
                    <label for="tourstday"><b>Ngày bắt đầu </b></label>
                    <input type="date" class="form-control" id="tourstday" value="<?php echo $tourstday?>" name="tourstday">
                </div>
                <div class="mb-3">
                    <label for="toureday"><b>Ngày kết thúc </b></label>
                    <input type="date" class="form-control" id="toureday" value="<?php echo $toureday?>" name="toureday">
                </div>
                <div class="mb-3">
                    <label for="tourprice"><b>Gía tour</b></label>
                    <input type="text" class="form-control" id="tourprice" value="<?php echo $tourprice?>"  name="tourprice">
                </div>
                <div class="mb-3">
                    <label for="tourstatus"><b>Trạng thái tour</b></label>
                    <input type="text" class="form-control" id="tourstatus" value="<?php echo $tourstatus?>"  name="tourstatus">
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

