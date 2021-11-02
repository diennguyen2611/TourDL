<?php
include('header.php');
include('../config/connect.php');?>
<!--  -->
<?php 
    $sql0 = "select * from contact";
    $result0 = mysqli_query($conn, $sql0);
    if(mysqli_num_rows($result0)>0){
        while($row=mysqli_fetch_assoc($result0)){
          $banner = $row['banner'];}}


?>
<div class="my-banner" style="overflow: hidden; background-image: url(<?php echo $banner?>);">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="my-banner-content col-md-6 rounded">
            <h1 class="text-white">Du lịch theo phong cách riêng</h1>
            <h5 class="text-white"><i>Du lịch trọn vẹn, giá cả phải chăng</i></h5>
            <div class="my-search">
                <div class="input-group mb-3">

                    <input type="text" class="form-control" placeholder="Bạn muốn đi đâu"
                        aria-label="Recipient's username" aria-describedby="btn-search" id="search-data">
                    <a href="" class="btn my-btn-search btn-lg" type="button" id="btn-search">Tìm Kiếm</a>
                </div>
            </div>
            Tailor tour - Trải nghiệm theo cách riêng của bạn -
            <a href="tailor-tour.php" class="btn btn-outline-light">Đặt tour riêng</a>
        </div>
    </div>
</div>
<div class="my-description" style="overflow: hidden">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="far fa-check-circle text-success"></i>
            Tour chọn lọc <b>chất lượng nhất</b>
        </div>
        <div class="col-md-4 text-center">
            <i class="far fa-check-circle text-success"></i>
            Tour chọn lọc <b>chất lượng nhất</b>
        </div>
        <div class="col-md-4 text-center">
            <i class="far fa-check-circle text-success"></i>
            Tour chọn lọc <b>chất lượng nhất</b>
        </div>
    </div>
</div>
<!--  -->
<div class="my_map" style="overflow: hidden">
<div class="container">
    <?php 

$sql = "select * from toursgroup where GroupStatus=0";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $groupID = $row['GroupID'];
        $groupName = $row['GroupName'];?>

        <div class="row huyen_row">
            <div>
                <h3 class="headline">
                    <span>
                        <?php echo $groupName ?>
                    </span>
                    <a href="moretour.php?id=<?php echo $groupID ?>"><span class="float-end">Xem thêm ></span></a>
                </h3>
            </div>
            <?php
        $sql1 = "SELECT * from `tours` where TourStatus=0 and GroupID=$groupID LIMIT 0,3";
        $result1 = mysqli_query($conn, $sql1);
        if(mysqli_num_rows($result1)>0){
            while($row=mysqli_fetch_assoc($result1)){
                $tourName = $row['TourName'];
                $tourLocation = $row['TourLocation'];
                $tourVehicle = $row['TourVehicle'];
                $tourImg = $row['TourImg'];
                $tourId = $row["TourID"];
                $tourPrice = 0;
                $sql2 = "select min(TourPrice) as TourPrice from tourdetails where TourID = $tourId and TourStatus=0";
                $result2 = mysqli_query($conn, $sql2);
                if(mysqli_num_rows($result2)>0){
                    while($row=mysqli_fetch_assoc($result2)){ $tourPrice = $row['TourPrice']; }}
                else echo $sql2;
                ?>

            <div class="col col-huyen">
                <a href="tourdetails.php?id=<?php echo $tourId ?>">
                    <div class="card" style="width: 22rem;">
                        <div class="huyen-img">
                            <img src="<?php echo $tourImg ?>" class="card-img-top" alt="<?echo $tourName ?>">
                            <div class="huyen-card">
                                <i class="fas fa-map-marker-alt "></i>
                                <?php echo $tourLocation ?>
                            </div>
                        </div>

                        <div class="card-body my-card-body">
                            <h5 class="card-title"><?php echo $tourName; ?></h5>
                            <p class="card-text">
                            <div class="row">
                                <div class="col-md-2 score" style="max-width:50px">9.6</div>
                                <div class="col-md-4 score-des">Tuyệt vời</div>
                                <div class="col-md comment"> | 5 đánh giá</div>
                            </div>
                            <div class="row ">
                                <div class="col-md-10"><i class="far fa-clock"></i> 2 ngày 1 đêm </div>
                                <div class="col-md-2"><i class="fas fa-plane"></i></div>
                            </div>
                            </p>
                            <a href="#" class="col price"><?php echo $tourPrice ?></a>
                        </div>

                    </div>
                </a>
            </div> 
            <?php } } ?>

                 </div>
        <?php }}?>
    </div> 
   
</div>
<!--  -->

<?php
include('footer.php');
?>