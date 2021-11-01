<?php

include('header.php');
include('../config/connect.php');
?>

<?php
 
 $id = $_GET['id'];
 $sql="";
 $title = "";
 if($id==0){
     $sql = "select * from `tours`";
     $title = "Tất cả các tour du lịch hiện có";
 }

 else{ 
     $sql0 = "select GroupName from toursgroup where GroupID=$id";
     $result0 = mysqli_query($conn, $sql0);
     if(mysqli_num_rows($result0)>0){
        
         while($row=mysqli_fetch_assoc($result0)){
            $title = $row['GroupName'];}}
     $sql = "select * from `tours` where GroupID=$id";
    }?>

<div class="my_moretour" style="overflow: hidden">
    <div class="container">

        <div class="row ">
            <h3 class="header-moretour">
                <?php echo $title ?>
            </h3>
        </div>
        <div class="container">

            <?php $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
    
        while($row=mysqli_fetch_assoc($result)){
                
                $tourId= $row['TourID'];
                 $tourName = $row['TourName'];
                $tourLocation = $row['TourLocation'];
                $tourVehicle = $row['TourVehicle'];
                $tourImg = $row['TourImg'];
                $tourId = $row["TourID"];
                $tourPrice = 0;
                $sql2 = "select min(TourPrice) as TourPrice from tourdetails where TourID = $tourId";
                $result2 = mysqli_query($conn, $sql2);
                if(mysqli_num_rows($result2)>0){
                    while($row=mysqli_fetch_assoc($result2)){ $tourPrice = $row['TourPrice']; }
                }
                else echo $sql2;
         
           //2 ngoặc
            ?>

            <!--  -->




            <div class="row row-white">
                <div class="col-md-3">
                    <a href="tourdetails.php">
                        <img class="img-moretour" src="<?php echo $tourImg  ?>" alt=" <?php echo $tourName ?>">
                    </a>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <a href="tourdetails.php" class="linkdetail">
                            <?php echo $tourName ?>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-2 score" style="max-width:50px">9.6</div>
                        <div class="col-md-3 score-des">Tuyệt vời</div>
                        <div class="col-md comment"> | 5 đánh giá</div>
                    </div>
                    <div class="row ">
                        <div class="col-md-4">Mã: <?php echo $tourId ?></div>
                        <div class="col-md-6"><i class="far fa-clock"></i>2 ngày 1 đêm</div>
                        <div class="col-md-1"><i class="fas fa-car-alt"></i></div>
                        <div class="col-md-1"><i class="fas fa-plane"></i></div>
                    </div>
                    <!-- <div class="row  list_moretour">
                        <ul>
                            <li>Bữa Trưa Hải Sản</li>
                            <li>Bãi đá Thảo Nguyên</li>
                            <li>Ngọn Hải Đăng 120 tuổi</li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-md-4 text-end">
                    <h4 class=" price-moretour"><?php echo $tourPrice ?></h4>
                </div>
            </div>

            <?php } ?>
        </div>
   

 <?php } 
 else echo '<h2>Không có kết quả để hiển thị</h2>'; ?>
 </div>
 </div>
<?php
include('footer.php');
?>