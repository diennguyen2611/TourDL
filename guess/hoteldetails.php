<?php
include('header.php');
include('../config/connect.php');
?>

<div class="my-tourdetails">
    <div class="row my-relative">

        <?php

    $hotelID = $_GET['id'];

    $sql = "select * from `hotels` where hotelID=$hotelID";
    $result = mysqli_query($conn,$sql);

  
    
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $hotelID = $row['hotelID'];
            $hotelName = $row['hotelName'];
            $hotelLocation = $row['hotelLocation'];
            $hotelImg = $row['Hotelimg'];
            $hotelPhone = $row['hotelPhone'];
            $hotelDes = $row['hotelDes'];
         ?>

        <h1 class="text-uppercase"><?php echo $hotelName ?></h1>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="my-tour">

                <div class="bg" style="background-image: url(<?php echo $hotelImg?>);">
                </div>
                <div class="my-intro">
                    
                    <span class="float-end">Mã Khách sạn: <span class="text-primary"><?php echo $hotelID?></span></span>
                </div>
            </div>

            <div class="my-tourdes" style="text-align: justify;">
                <h2>
                    <?php echo $hotelName?>
                </h2>
                <p>
                    <?php echo $hotelDes?>
                </p>
              

                <div class="my-tourSchedule my-test des" id="tourSchedule">
                    <h3>Liên hệ</h3>
                   <div> <?php echo $hotelPhone?></div>
                    <span class=""><i class="fas fa-map-marker-alt"></i><span><?php echo $hotelLocation?></span></span>
                </div>
                <?php 
         
                    }
                }
                else echo $sql;
            ?>

            </div>

        </div>
    </div>
</div>

<?php 
    include('footer.php');
?>