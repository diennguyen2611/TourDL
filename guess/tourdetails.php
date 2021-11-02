<?php
include('header.php');
include('../config/connect.php');
?>

<div class="my-tourdetails">
    <div class="row my-relative">

        <?php

    $tourID = $_GET['id'];

    $sql = "select * from `tours` where TourID = $tourID";
    $result = mysqli_query($conn,$sql);

    $groupID = 0;
    
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $tourName=$row['TourName'];
            $groupID=$row['GroupID'];
            $tourLocation = $row['TourLocation'];
            $tourVehicle = $row['TourVehicle'];
            $tourDes = $row['TourDes'];
            $tourSchedule = $row['TourSchedule'];
            $tourImg = $row['TourImg'];
         ?>

        <h1 class="text-uppercase"><?php echo $tourName ?></h1>

        <div class="col-md-7">
            <div class="my-tour">

                <div class="bg" style="background-image: url(<?php echo $tourImg?>);">
                </div>
                <div class="my-intro">
                    <span class=""><i class="fas fa-map-marker-alt"></i><span><?php echo $tourLocation?></span></span>
                    <span class=""><i class="far fa-clock"></i><span>2 Ngày 1 Đêm</span></span>
                    <span class="">Phương tiện: <span><i class="fas fa-plane"></i></span></span>
                    <span class="float-end">Mã Tour: <span class="text-primary"><?php echo $tourID?></span></span>
                </div>
            </div>

            <div class="my-tourdes" style="text-align: justify;">
                <h2>
                    <?php echo $tourName?>
                </h2>
                <p>
                    <?php echo $tourDes?>
                </p>

                <div class="my-tourSchedule my-test des" id="tourSchedule">
                    <h3>Chương trình tour</h3>
                    <?php echo $tourSchedule?>
                </div>
                <div class="des" id="calendar">
                    <h3>Lịch khởi hành</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Ngày khởi hành</th>
                                <th scope="col">Ngày về</th>
                                <th scope="col">Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
           
                $sql1 = "select * from `tourdetails` where TourID = $tourID";
                $result1 = mysqli_query($conn,$sql1);
                $STT = 1;
                if(mysqli_num_rows($result1)>0){
                    while($row=mysqli_fetch_assoc($result1)){
                        $tourSTDay=$row['TourSTDay'];
                        $tourEDay=$row['TourEDay'];
                        $tourPrice=$row['TourPrice'];?>
                            <tr>
                                <th scope="row"><?php echo $STT++ ?></th>
                                <td><?php echo $tourSTDay?></td>
                                <td><?php echo $tourEDay?></td>
                                <td><?php echo $tourPrice?></td>
                            </tr>
                            <?php
                    }
                }
                else echo $sql1;
            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <?php $Hotline ='';
                $sql2 = "select * from `contact`";
                $result2 =mysqli_query($conn,$sql2);
                if(mysqli_num_rows($result2)>0){
                    while($row=mysqli_fetch_assoc($result2)){
                        $Hotline=$row['Hotline'];
                    }
                }
                else echo $sql2;
        ?>
        <div class="col-md-5">
            <form class="my-orderTour">
                <p><b>Đặt ngay, chỉ 2 phút. Hoặc gọi <?php echo $Hotline?></b></p>
                <div class="row mb-3 info">
                    <div class="col-md-7">
                        <p>Chọn ngày khởi hành:</p>
                    </div>
                    <div class="col-md-5">
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected><?php echo $tourSTDay?></option>
                        </select>
                    </div>

                </div>
                <div class="row mb-3 info">
                    <div class="col-md-7">
                        <p>Số lượng x <span><?php echo $tourPrice?></span></p>
                    </div>
                    <div class="col-md-5">
                        <input type="number" class="form-control" id="quantity" min="1" max="40">
                    </div>
                </div>
                <div class="total mb-3">
                    <h3 class="text-end" id="total"><?php echo $tourPrice?><span>VNĐ</span></p>
                </div>
                <div class="mb-3 order-btn">
                    <a class="dropdown-item order text-center" href="#order" data-bs-toggle="modal">Yêu cầu đặt</a>
                </div>
            </form>

            <div class="my-list-option">
                <div class="list-group">
                    <a href="#tourSchedule" class="list-group-item list-group-item-action">Chương trình tour</a>
                    <a href="#calendar" class="list-group-item list-group-item-action">Lịch khởi hành</a>
                    <a href="#more-service" class="list-group-item list-group-item-action">Các dịch vụ khác</a>
                </div>
            </div>

            <div class="more-ser">
                <h4>Các dịch vụ liên quan</h4>
                <div class="hotel">
                    <?php 
                        $sql0 = "select * from hotels where TourID = $tourID LIMIT 0,1";
                        $result0 = mysqli_query($conn, $sql0);
                        if(mysqli_num_rows($result0)>0){
                            while($row=mysqli_fetch_assoc($result0)){
                               $hotelName = $row['hotelName'];
                               $hotelLocation = $row['hotelLocation'];
                               $hotelImg = $row['Hotelimg'];
                               $hotelPhone = $row['hotelPhone'];
                           ?>
                    <div class="card my-ser">
                        <img class="card-img-top" src="<?php echo $hotelImg ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $hotelName ?></h5>
                            <p class="card-text"><?php $hotelLocation ?></p>
                            <a href="#" class="btn btn-success">Chi tiết</a>
                        </div>
                    </div>
                    <?php }}
                    else
                    echo '';

                    ?>
                </div>

                <div class="restaurant">
                    <?php 
                        $sql0 = "select * from restaurants where TourID = $tourID LIMIT 0,1";
                        $result0 = mysqli_query($conn, $sql0);
                        if(mysqli_num_rows($result0)>0){
                            while($row=mysqli_fetch_assoc($result0)){
                               $resName = $row['resName'];
                               $resLocation = $row['resLocation'];
                               $ResImg = $row['ResImg'];
                               $resPhone = $row['resPhone'];
                           ?>
                    <div class="card my-ser">
                        <img class="card-img-top" src="<?php echo $ResImg ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $resName ?></h5>
                            <p class="card-text"><?php $resLocation ?></p>
                            <a href="#" class="btn btn-success">Chi tiết</a>
                        </div>
                    </div>
                    <?php }}
                    else
                    echo '';

                    ?>

                </div>

            </div>
        </div>
    </div>
    <?php }}
else echo $sql;
 ?>

    <div class="my-headline">
        <h6>
            <span>
                Các tour du lịch liên quan
            </span>
            <a href="moretour.php?id=<?php echo $groupID;?>" class="float-end">Xem thêm ></a>
        </h6>
    </div>
    <div class="my-tour-connect">
        <div class="row">
            <?php
        $sql4 = "SELECT * from `tours` where GroupID=$groupID LIMIT 0,3";
        $result4 = mysqli_query($conn, $sql4);
        if(mysqli_num_rows($result4)>0){
            while($row=mysqli_fetch_assoc($result4)){
                $tourName = $row['TourName'];
                $tourLocation = $row['TourLocation'];
                $tourVehicle = $row['TourVehicle'];
                $tourImg = $row['TourImg'];
                $tourId = $row["TourID"];
                $tourPrice = 0;
                $sql5 = "select min(TourPrice) as TourPrice from tourdetails where TourID = $tourId";
                $result5 = mysqli_query($conn, $sql5);
                if(mysqli_num_rows($result5)>0){
                    while($row=mysqli_fetch_assoc($result5)){ $tourPrice = $row['TourPrice']; }}
                else echo $sql5;
                ?>

            <div class="col-md-4">
                <a href="tourdetails.php?id=<?php echo $tourId?>">
                    <div class="card">
                        <img src="<?php echo $tourImg ?>" class="card-img-top" alt="canada">
                        <div class="card-body">
                            <h6 class="card-title text-uppercase"><?php echo $tourName?></h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text">
                                        <span><i class="far fa-clock"></i></span>
                                        2 Ngày 1 Đêm
                                    </p>
                                </div>
                                <div class="col-md-6 float-end">
                                    <i class="fas fa-plane float-end"></i>
                                </div>
                            </div>
                            <div class="price float-end">
                                <h6><?php echo $tourPrice?><span>
                                        VNĐ
                                    </span></h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


            <?php }}
else echo $sql4;
?>

        </div>
    </div>


    <!--form đặt -->
    <div class="modal fade" id="order" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Yêu cầu đặt tour</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <div class="modal-body">
                    <p class="">Quý khách vui lòng điền thông tin bên dưới</p>
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="hoten" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="hoten" name="hoten">
                        </div>
                        <div class="mb-3">
                            <label for="dienthoai" class="form-label">Điện thoại</label>
                            <input type="text" class="form-control" id="dienthoai" name="dienthoai">

                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                name="email">
                        </div>
                        <div class="mb-3">
                            <label for="khac" class="form-label">Yêu cầu khác</label>
                            <input type="text" class="form-control" id="khac" name="khac">

                        </div>

                        <button type="submit" class="btn text-center btn-th" style="width: 100%; max-height: 60px">Gửi
                            yêu cầu
                            <p style="font-size:13px">Chúng tôi sẽ liên hệ lại sau ít phút</p>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>


</div>


<?php 
include('footer.php');
?>