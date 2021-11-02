<?php
include('header.php');
include('../config/connect.php');
?>

<div class="my-tourdetails">
    <div class="row my-relative">

        <?php

    $resID = $_GET['id'];

    $sql = "select * from `restaurants` where resID=$resID";
    $result = mysqli_query($conn,$sql);

  
    
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $resID = $row['resID'];
            $resName = $row['resName'];
            $resLocation = $row['resLocation'];
            $ResImg = $row['ResImg'];
            $resPhone = $row['resPhone'];
            $resDes = $row['resDes'];
         ?>

        <h1 class="text-uppercase"><?php echo $resName ?></h1>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="my-tour">

                <div class="bg" style="background-image: url(<?php echo $ResImg?>);">
                </div>
                <div class="my-intro">
                    
                    <span class="float-end">Mã Khách sạn: <span class="text-primary"><?php echo $resID?></span></span>
                </div>
            </div>

            <div class="my-tourdes" style="text-align: justify;">
                <h2>
                    <?php echo $resName?>
                </h2>
                <p>
                    <?php echo $resDes?>
                </p>
              

                <div class="my-tourSchedule my-test des" id="tourSchedule">
                    <h3>Liên hệ</h3>
                   <div> <?php echo $resPhone?></div>
                    <span class=""><i class="fas fa-map-marker-alt"></i><span><?php echo $resLocation?></span></span>
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