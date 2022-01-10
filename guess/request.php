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
                            <li><a href="manageAccount_notSuccess.php">Chờ xử lý</a></li>
                            <li><a href="manageAccount_success.php">Đã hoàn thành</a></li>
                        </ul>
                    </li>
                    <li><a href="request.php"  class="active-item"><i class="fas fa-question-circle"></i>Yêu cầu đã gửi</a></li>
                    <li><a href="account.php"><i class="fas fa-user"></i>Tài khoản</a></li>                    
                </ul>
            </div>
            <div class="col-md-10 bg-white my-content">
                <h4 class="my-title-content">Các yêu cầu đã gửi</h4>
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Ngày gửi</th>
                                <th scope="col">Email nhận phản hồi</th>
                                <th scope="col">SĐT</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Trạng thái</th>
                            </tr>
                        </thead>
                        <?php 
            $sql1= "select * from `users_request`";
            $result1= mysqli_query($conn, $sql1);
            if(mysqli_num_rows($result1)>0){
                while($row = mysqli_fetch_assoc($result1)){
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $note = $row['note'];
                    $requestDay = $row['RequestDay'];
                    $requestStatus = $row['RequestStatus'];             
         ?>
                        <tbody>
                            <tr>
                                <td><?php echo $requestDay; ?></td>
                                <td><?php echo  $email; ?></td>
                                <td><?php echo $phone; ?></td>
                                <td><?php echo  $note; ?></td>
                                <td><?php 
                        if($requestStatus==0){
                            echo '<p class="text-danger">Chờ xử lý</p>';
                        }
                        else
                        echo '<p class="text-success">Đã được phản hồi</p>';

                     ?></td>
                            </tr>

                        </tbody>
                        <?php
                }} 
                else echo 'Chưa có yêu cầu nào được gửi đi';?>
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