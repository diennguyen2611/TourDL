<?php 

include('header.php');

?>

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
<div class="f-header manage-bg">
    <div class="my-manage">
        <div class="row">
            <div class="col-md-2 my-navbar">
                <p class="active"><i class="fas fa-user-circle"></i><?php echo $userName ?></p>
                <hr>
                <ul>
                    <li><a href="manageAccount.php"><i class="fas fa-clipboard-list"></i>Đơn đặt</a>
                        <ul>
                            <li><a href="manageAccount_notSuccess.php" class="active-item">Chờ xử lý</a></li>
                            <li><a href="manageAccount_success.php">Đã hoàn thành</a></li>
                        </ul>
                    </li>
                    <li><a href="request.php"><i class="fas fa-question-circle"></i>Yêu cầu đã gửi</a></li>
                    <li><a href="account.php"><i class="fas fa-user"></i>Tài khoản</a></li>                
                </ul>
            </div>
            <div class="col-md-10 bg-white my-content">
                <h4 class="my-title-content">Đơn đặt <span class="child-nav">> Chờ xử lý</span></h4>
                <div class="container">
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
            $sql1= "select * from `tourorder`, `tours` where `tourorder`.TourID = `tours`.TourID and UserID=$userID and StatusOrder=0";
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
                                                <a href="tourdetails.php?id=<?php echo $tourId; ?>" class="linkdetail"
                                                    style="font-size:16px">
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
            </div>
        </div>
    </div>
</div>
</div>

<?php
include('footer.php');
           
?>