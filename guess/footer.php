<?php
include('../config/connect.php');?>
<?php 
    $sql0 = "select * from contact";
    $result0 = mysqli_query($conn, $sql0);
    if(mysqli_num_rows($result0)>0){
        while($row=mysqli_fetch_assoc($result0)){
            $hotline = $row['Hotline'];
            $contactTime = $row['ContactTime'];
            $location = $row['Location'];
            $email = $row['Email'];
           }}?>

<div class="my-footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col">
                <h5 style="margin-bottom: 16px">Về chúng tôi</h5>
                <a class="text-decoration-none text-dark" href="#">
                    <p>Blog</p>
                </a>
                <a class="text-decoration-none text-dark" href="#">
                    <p>PMS - Miễn phí</p>
                </a>
            </div>
            <div class="col">
                <h5 style="margin-bottom: 16px">Thông Tin Cần Biết</h5>
                <a class="text-decoration-none text-dark" href="#">
                    <p>Điều kiện & Điều khoản</p>
                </a>
                <a class="text-decoration-none text-dark" href="#">
                    <p>Quy chế hoạt động</p>
                </a>
                <a class="text-decoration-none text-dark" href="#">
                    <p>Câu hỏi thường gặp</p>
                </a>
            </div>
            <div class="col">
                <h5 style="margin-bottom: 16px">Đối tác & Liên Kết</h5>
                <a class="text-decoration-none text-dark" href="#">
                    <p>Vietnam Airlines</p>
                </a>
                <a class="text-decoration-none text-dark" href="#">
                    <p>VNExpress</p>
                </a>

            </div>
            <div class="col">
                <h5 style="margin-bottom: 16px">Được chứng nhận</h5>
                <a href="#"><img style="width:50%" src="../img/footer.png" alt=""></a>
            </div>
        </div>
        <div class="row" style="margin-top: 32px">
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <p>
                    <i class="fas fa-map-marker-alt text-secondary"></i>
                    <b> Địa chỉ: </b>
                    <?php echo $location ?>
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <b style="color: #1e3799">Like để cập nhật cẩm nang du lịch</b>
                        <a class="btn btn-primary" style="padding: 0 8px" href="#" role="button">
                            <i class="far fa-thumbs-up"></i>
                            Like
                        </a>
                    </div>
                    <div class="col-md-5 col-huyen" style="margin-right: 10px">
                        <div>
                            <i class="far fa-envelope"></i>
                            <a href="#"> <?php echo $email ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <p>Bạn cần trợ giúp? <b>Hãy gọi ngay</b></p>
                <div class="col-huyen">
                    <i class="fas fa-phone-alt text-secondary" style="font-size:13px"></i>
                    <b>CSKH: </b><a href="#">(028) 3933 8002</a>
                </div>
                <div class="col-huyen" style="margin-top:5px">
                    <i class="fas fa-phone-alt text-secondary" style="font-size:13px"></i>
                    <b>Hotline: </b><a href="#"> <?php echo $hotline ?></a>

                </div>
                <div class="col-huyen" style="margin-top:5px">
                    <i class="far fa-clock text-gray-dark" style="font-size:15px"> <?php echo $contactTime ?></i>
                    <p></p>
                </div>
                <div class="container">
                    <a style="margin-right: 8px;" href="#">
                        <img style="width:15%" src="https://img.icons8.com/color/48/000000/facebook-new.png" /></a>
                    <a style="margin-right: 8px;" href="#"><img style="width:15%"
                            src="https://img.icons8.com/fluency/48/000000/instagram-new.png" /></a>
                    <a style="margin-right: 8px;" href="#"><img style="width:15%"
                            src="https://img.icons8.com/color/48/000000/twitter--v1.png" /></a>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="../js/myscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </body>

    </html>