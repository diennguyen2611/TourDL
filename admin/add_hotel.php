<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container my-main">

    <h2 class="text-uppercase my-title-ad">Thêm một khách sạn</h2>
    <form action="process_add_hotel.php" method="POST">
        <div class="mb-3">
            <label for="hotelName"><b>Tên khách sạn</b></label>
            <input type="text" class="form-control" id="hotline" name="hotelName">
        </div>
        <div class="mb-3">
            <div><label for="hoteldes"><b>Mô tả</b></label></div>
           <textarea class="my-textarea" rows="10" name="hoteldes"></textarea>
        </div>
        <div class="mb-3">
            <label for="hotellocation"><b>Địa chỉ</b></label>
            <input type="text" class="form-control" id="location" name="hotellocation">
        </div>
        <div class="mb-3">
            <label for="hotelphone"><b>Số điện thoại</b></label>
            <input type="text" class="form-control" id="facebook" name="hotelphone">
        </div>
        <div class="mb-3">
            <label for="resimg"><b>Ảnh minh họa</b></label>
            <input type="text" class="form-control" id="ins" name="resimg">
        </div>
        <div class="mb-3">
            <label for="tourid" class="form-label">Tour Liên Quan</label>
            <select name="tourid" id="tourid">
                <?php
       $sql0 = "select * from `tours`";
       $result0 = mysqli_query($conn, $sql0);
       if(mysqli_num_rows($result0)>0){ 
        while($row=mysqli_fetch_assoc($result0)){
            echo '<option value = "'.$row['TourID'].'">'.$row['TourName'].'</option>';
        }}?>
        </select>
        </div>

        <hr>

        <div class="mb-3">
            <button type="submit" class="btn btn-success" name="submit">Lưu lại</button>
        </div>

    </form>

</div>



<?php
include('footer.php');
?>