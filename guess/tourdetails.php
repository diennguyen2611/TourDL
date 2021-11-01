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

            <div class="my-tourdes">
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
                                <th scope="col">Ngày khởi hành</th>
                                <th scope="col">Ngày về</th>
                                <th scope="col">Giá</th>
                            </tr>
                        </thead>
                        <tbody>

            <?php 
                $sql1 = "select * from `tourdetails` where TourID = $tourID";
                $result1 = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1)>0){
                    while($row=mysqli_fetch_assoc($result1)){
                        $tourSTDay=$row['TourSTDay'];
                        $tourEDay=$row['TourEDay'];
                        $tourPrice=$row['TourPrice'];?>
                            <tr>
                                <th scope="row"><?php echo $tourSTDay ?></th>
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
         

                <div class="des" id="more-service">
                    <h3>Các dịch vụ khác</h3>
                    <p>- Vé máy bay quốc tế một chiều hạng phổ thông, hành lý xách tay và hành lý ký gửi theo chính sách
                        của từng hãng hàng không.

                        - Khách sạn cách ly 08 ngày 07 đêm theo tiêu chuẩn 02 người/phòng (hạng phòng tiêu chuẩn) có bao
                        gồm ăn sáng và nước suối hàng ngày.

                        - Xe vận chuyển từ sân bay về khách sạn cách ly.

                        - Test Covid-19 trong suốt thời gian cách ly theo quy định của Sở Y Tế.

                        - Ăn uống 3 bữa/ ngày trong các ngày lưu trú tại khách sạn / điểm cách ly

                        - Phí dịch vụ làm hồ sơ nhập cảnh tại Việt Nam.</p>
                </div>


            </div>
        </div>
        <div class="col-md-5">
            <form class="my-orderTour">
                <p><b>Đặt ngay, chỉ 2 phút. Hoặc gọi (028)39338002</b></p>
                <div class="row mb-3 info">
                    <div class="col-md-7">
                        <p>Chọn ngày khởi hành:</p>
                    </div>
                    <div class="col-md-5">
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>1/3/2021</option>
                            <option value="1">3/3/2021</option>
                            <option value="2">4/6/2021</option>
                            <option value="3">5/7/2021</option>
                        </select>
                    </div>

                </div>
                <div class="row mb-3 info">
                    <div class="col-md-7">
                        <p>Số lượng <span>x87.000.000</span></p>
                    </div>
                    <div class="col-md-5">
                        <input type="number" class="form-control" id="quantity" min="1" max="40">
                    </div>
                </div>


                <div class="total mb-3">
                    <h3 class="text-end" id="total">87.900.000<span>VNĐ</span></p>
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
            <a href="moretour.php?id=<?php echo $groupID;?>"  class="float-end">Xem thêm ></a>
        </h6>
    </div>
    <div class="my-tour-connect">
        <div class="row">
            <div class="col-md-4">
                <a href="tourdetails.php">
                    <div class="card">
                        <img src="../img/canada.jpg" class="card-img-top" alt="canada">
                        <div class="card-body">
                            <h6 class="card-title text-uppercase">Combo trọn gói hồi hương từ Anh</h6>
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
                                <h6>87.900.000<span>
                                        VNĐ
                                    </span></h6>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="tourdetails.php">
                    <div class="card">
                        <img src="../img/duc.jpg" class="card-img-top" alt="canada">
                        <div class="card-body">
                            <h6 class="card-title text-uppercase">COMBO TRỌN GÓI HỒI HƯƠNG TỪ ĐỨC</h6>
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
                                <h6>87.900.000<span>
                                        VNĐ
                                    </span></h6>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="tourdetails.php">
                    <div class="card">
                        <img src="../img/phap.jpg" class="card-img-top" alt="canada">
                        <div class="card-body">
                            <h6 class="card-title text-uppercase">Combo trọn gói hồi hương từ PHÁP</h6>
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
                                <h6>87.900.000<span>
                                        VNĐ
                                    </span></h6>

                            </div>
                        </div>
                    </div>
                </a>
            </div>

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