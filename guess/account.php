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
                    <li><a href="request.php"><i class="fas fa-question-circle"></i>Yêu cầu đã gửi</a></li>
                    <li><a href="account.php" class="active-item"><i class="fas fa-user"></i>Tài khoản</a></li>
                </ul>
            </div>
            <div class="col-md-10 bg-white my-content">
                <h4 class="my-title-content">Tài khoản của tôi</h4>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 my-avt">
                            <img src="../img/avt.jpg" alt="avatar" width="150px">
                            <button type="button" class="btn my-btn-img bg-white text-dark">Chọn Ảnh</button>
                        </div>
                        <div class="col-md-9">
                            <form>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-end">Tên Đăng Nhập</p>
                                    </div>
                                    <div class="col-md-9">
                                        <p><?php echo $userName ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-end">Họ và tên</p>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-end">Email</p>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-end">Số điện thoại</p>
                                    </div>
                                    <div class="col-md-9">
                                        <p>********09</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-end">Ngày sinh</p>
                                    </div>
                                    <div class="col-md-1">
                                        <select class="my-selected">
                                            <option selected>01</option>
                                            <option value="1">02</option>
                                            <option value="2">03</option>
                                            <option value="3">04</option>
                                            <option value="4">05</option>
                                            <option value="5">06</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">
                                        <select class="my-selected">
                                            <option selected>01</option>
                                            <option value="1">02</option>
                                            <option value="2">03</option>
                                            <option value="3">04</option>
                                            <option value="4">05</option>
                                            <option value="5">06</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">

                                        <select class="my-selected">
                                            <option selected>2001</option>
                                            <option value="1">2021</option>
                                            <option value="2">2020</option>
                                            <option value="3">2019</option>
                                            <option value="4">2018</option>
                                            <option value="5">2017</option>
                                        </select>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-9">
                                <button type="button" class="btn my-btn-save-infor">Lưu</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include('footer.php');
           
?>