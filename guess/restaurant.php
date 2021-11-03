<?php

include('header.php');
include('../config/connect.php');
?>

<?php
 
     $sql = "select * from `restaurants`";
     $title = "Tất cả các nhà hàng được đề xuất";
?>
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
                
            $resID = $row['resID'];
            $resName = $row['resName'];
            $resLocation = $row['resLocation'];
            $ResImg = $row['ResImg'];
            $resPhone = $row['resPhone'];
            $resDes = $row['resDes'];
            ?>

            <div class="row row-white">
                <div class="col-md-3">
                    <a href="restaurantdetails.php?id=<?php echo $resID; ?>">
                        <img class="img-moretour" src="<?php echo  $ResImg ?>" alt=" <?php echo $resName ?>">
                    </a>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <a href="hoteldetails.php?id=<?php echo  $resID; ?>" class="linkdetail">
                            <?php echo $resName ?>
                        </a>
                    </div>
                    
                    <div class="row ">
                        <div class="col-md-4">Mã: <?php echo $resID ?></div>
                        <div class="col-md-6"><i class="fas fa-map-marker-alt"></i><?php echo $resLocation?></div>
                        
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
                    <h4 class=" price-moretour"><?php echo $resPhone ?></h4>
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