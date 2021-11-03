<?php 

include('header.php');
include('../config/connect.php');

$hotelID= $_GET['id'];

$sql = "select * from hotels where hotelID=$hotelID";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        $hotelID = $row['hotelID'];
        $hotelName = $row['hotelName'];
        $hotelLocation = $row['hotelLocation'];
        $hotelImg = $row['Hotelimg'];
        $hotelPhone = $row['hotelPhone'];
        $hotelDes = $row['hotelDes'];
        $tourID = $row['TourID'];
        $sql1 = "select TourName from tours where TourID = $tourID";
        $result1 = mysqli_query($conn, $sql1);
        $tourName='';
        if(mysqli_num_rows($result1)>0){ 
            while($row=mysqli_fetch_assoc($result1)){
                $tourName = $row['TourName'];
            }}
        else echo $sql1;
       
}}

?>
<div class="container my-main">

    <h2 class="text-uppercase my-title-ad">Sửa thông tin của khách sạn</h2>
    <form action="process_edit_hotel.php" method="POST">
    <input type="hidden" class="form-control" id="hotline" name="hotelID" value="<?php echo $hotelID ?>">
        <div class="mb-3">
            <label for="hotelName"><b>Tên khách sạn</b></label>
            <input type="text" class="form-control" id="hotline" name="hotelName" value="<?php echo $hotelName?>">
        </div>
        <div class="mb-3">
            <div><label for="hoteldes"><b>Mô tả</b></label></div>
            <textarea class="my-textarea" rows="10" name="hoteldes"><?php echo $hotelDes ?></textarea>
        </div>
        <div class="mb-3">
            <label for="hotellocation"><b>Địa chỉ</b></label>
            <input type="text" class="form-control" id="hotellocation" name="hotellocation" value="<?php echo $hotelLocation?>">
        </div>
        <div class="mb-3">
            <label for="hotelphone"><b>Số điện thoại</b></label>
            <input type="text" class="form-control" id="hotelphone" name="hotelphone" value="<?php echo $hotelPhone?>">
        </div>
        <div class="mb-3">
            <label for="hotelimg"><b>Ảnh minh họa</b></label>
            <input type="text" class="form-control" id="ins" name="hotelimg" value="<?php echo $hotelImg?>">
        </div>
        <div class="mb-3">
            <div><label for="tourid" class="form-label"><b>Tour Liên Quan: </b><?php echo $tourName ?></label></div>
            <label  class="form-label"><b>Thay đổi</b></label>
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