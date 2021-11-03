<?php 

include('header.php');

?>
<div class="container">
    <div class="row ">
        <h3 class="header-moretour">
            Quản lý tài khoản
        </h3>
    </div>
    <?php 
         if(isset($_SESSION['login'])){
         $userEmail = $_SESSION['login'];
          $sql = "select * from users where userEmail = '$userEmail'";
         $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
         while($row = mysqli_fetch_assoc($result)){
        $userID = $row['userID'];
         $userName = $row['userName'];
             }}}
             ?>


    <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Tên đăng nhập: </b><?php echo $userName ?> </li>
        <li class="list-group-item"><b>Email: </b><?php echo $userEmail ?></li>
        <hr></ul>

        <h4 class="text-success my-status-title">Trạng thái các tour đã đặt</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tour</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">Ngày khởi hành</th>
                    <th scope="col">Trạng thái</th>

                </tr>
            </thead>
            <?php 
            $sql1= "select * from `tourorder`, `tours` where `tourorder`.TourID = `tours`.TourID and UserID=$userID";
            $result1= mysqli_query($conn, $sql1);
            if(mysqli_num_rows($result1)>0){
                while($row = mysqli_fetch_assoc($result1)){
                    $tourId = $row['TourID'];
                    $tourImg = $row['TourImg'];
                    $tourName = $row['TourName'];
                    $dateOrder = $row['DateOrder'];
                    $TourSTDay = $row['TourSTDay'];
                    $statusOrder = $row['StatusOrder'];
                
         ?>
            <tbody>
                <tr>

                    <td>
                        <div class="row row-white" style="width:500px">
                            <div class="col-md-5">
                                <a href="tourdetails.php?id=<?php echo $tourId; ?>">
                                    <img class="img-moretour" src="<?php echo $tourImg  ?>"
                                        alt=" <?php echo $tourName ?>">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <a href="tourdetails.php?id=<?php echo $tourId; ?>" class="linkdetail" style="font-size:16px">
                                        <?php echo $tourName ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td><?php echo $dateOrder; ?></td>
                    <td><?php echo $TourSTDay; ?></td>
                    <td><?php 
                        if($statusOrder==0){
                            echo '<p class="text-danger">Chờ xử lý</p>';
                        }
                        else
                        echo '<p class="text-success">Đã hoàn thành</p>';

                     ?></td>
                </tr>

            </tbody>
            <?php
                }} 
                else echo 'Chưa có đơn đặt nào';?>
        </table>

   
</div>


<?php
include('footer.php');
           
?>