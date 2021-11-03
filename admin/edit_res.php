<?php 

include('header.php');
include('../config/connect.php');

$resID= $_GET['id'];

$sql = "select * from restaurants where resID=$resID";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        $resID = $row['resID'];
        $resName = $row['resName'];
        $resLocation = $row['resLocation'];
        $ResImg = $row['ResImg'];
        $resPhone = $row['resPhone'];
        $resDes = $row['resDes'];
        $tourID = $row['TourID'];
        $sql1 = "select TourName from tours where TourID = $tourID";
        $result1 = mysqli_query($conn, $sql1);
        $tourName='';
        if(mysqli_num_rows($result1)>0){ 
            while($row=mysqli_fetch_assoc($result1)){
                $tourName = $row['TourName'];
            }}
        else echo $sql;
       
}}

?>
<div class="container my-main">

    <h2 class="text-uppercase my-title-ad">Sửa thông tin của nhà hàng</h2>
    <form action="process_edit_res.php" method="POST">
    <input type="hidden" class="form-control" id="hotline" name="resID" value="<?php echo $resID ?>">
        <div class="mb-3">
            <label for="resName"><b>Tên nhà hàng</b></label>
            <input type="text" class="form-control" id="hotline" name="resName" value="<?php echo $resName?>">
        </div>
        <div class="mb-3">
            <div><label for="resdes"><b>Mô tả</b></label></div>
            <textarea class="my-textarea" rows="10" name="resdes"><?php echo $resDes ?></textarea>
        </div>
        <div class="mb-3">
            <label for="reslocation"><b>Địa chỉ</b></label>
            <input type="text" class="form-control" id="location" name="reslocation" value="<?php echo $resLocation?>">
        </div>
        <div class="mb-3">
            <label for="resphone"><b>Số điện thoại</b></label>
            <input type="text" class="form-control" id="facebook" name="resphone" value="<?php echo $resPhone?>">
        </div>
        <div class="mb-3">
            <label for="resimg"><b>Ảnh minh họa</b></label>
            <input type="text" class="form-control" id="ins" name="resimg" value="<?php echo $ResImg?>">
        </div>
        <div class="mb-3">
            <label for="tourid" class="form-label">Tour Liên Quan: <?php echo $tourName ?></label>
            <label  class="form-label">Thay đổi</label>
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