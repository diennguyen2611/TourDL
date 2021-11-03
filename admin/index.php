<?php 

include('header.php');
include('../config/connect.php');


$sql = "select count(*) as TongTour from tours where TourStatus=0";
$result = mysqli_query($conn, $sql);
$tongTour=0;
if(mysqli_num_rows($result)>0){ 
    while($row=mysqli_fetch_assoc($result)){
        $tongTour = $row['TongTour'];
    }
}
$sql1 = "select count(*) as TongNhom from toursgroup where GroupStatus=0";
$result1 = mysqli_query($conn, $sql1);
$tongNhom=0; 
if(mysqli_num_rows($result1)>0){ 
    while($row=mysqli_fetch_assoc($result1)){
        $tongNhom = $row['TongNhom'];
    }
}
$sql2 = "select count(*) as TongDon from tourorder where DATE(dateOrder) = CURDATE()";
$result2 = mysqli_query($conn, $sql2);
$tongDon = 0;
if(mysqli_num_rows($result2)>0){ 
    while($row=mysqli_fetch_assoc($result2)){
        $tongDon = $row['TongDon'];
    }
}
else echo $sql2;
$sql3 = "select count(*) as TongYC from users_request where  DATE(RequestDay) = CURDATE()";
$result3 = mysqli_query($conn, $sql3);
if(mysqli_num_rows($result3)>0){ 
    while($row=mysqli_fetch_assoc($result3)){
        $tongYC = $row['TongYC'];
    }
}

?>
<div class="index-body">
    <div class="container my-main">
        <div class="my-section">
            <div>
                <h3 class="text-uppercase my-title-ad">Tổng Quan</h3>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 my-info">
                    <h2 class="text-center"><?php echo $tongTour; ?></h2>
                    <h4 class="text-center">Tour Du Lịch</h4>
                </div>
                <div class="col-md-4 my-info">
                    <h2 class="text-center"><?php echo $tongNhom; ?></h2>
                    <h4 class="text-center">Nhóm Tour</h4>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <hr>

        <div class="my-section">
            <div>
                <h3 class="text-uppercase my-title-ad">Hôm nay</h3>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 my-info">
                    <h2 class="text-center"><?php echo $tongDon; ?></h2>
                    <h4 class="text-center">Đơn được đặt</h4>
                </div>
                <div class="col-md-4 my-info">
                    <h2 class="text-center"><?php echo $tongYC; ?></h2>
                    <h4 class="text-center">Yêu cầu được gửi</h4>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>





    </div>
</div>


<?php
include('footer.php');
?>