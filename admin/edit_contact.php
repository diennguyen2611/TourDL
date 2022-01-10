<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container f-header my-main" style="overflow: hidden">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <h2 class="text-uppercase my-title-ad">Thay đổi thông tin cơ sở</h2>

            <?php 
            $sql = "Select * from contact";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){ 
                while($row=mysqli_fetch_assoc($result)){
                    $hotline = $row['Hotline'];
                    $contactTime = $row['ContactTime'];
                    $location = $row['Location'];
                    $linkFB = $row['LinkFaceBook'];
                    $linkIn = $row['LinkInsta'];
                    $linkTwitter = $row['LinkTwitter'];
                    $email = $row['Email'];
                    $linkBanner=$row['banner']; 
        ?>
            <form action="process_edit_contact.php" method="POST">
                <div class="mb-3">
                    <label for="hotline"><b>Hotline</b></label>
                    <input type="text" class="form-control" id="hotline" value="<?php echo $hotline ?>" name="hotline">
                </div>
                <div class="mb-3">
                    <label for="contactTime"><b>Thời gian làm việc</b></label>
                    <input type="text" class="form-control" id="contactTime" value="<?php echo $contactTime?>" name="ctTime">
                </div>
                <div class="mb-3">
                    <label for="location"><b>Địa chỉ</b></label>
                    <input type="text" class="form-control" id="location" value="<?php echo $location?>"  name="location">
                </div>
                <div class="mb-3">
                    <label for="facebook"><b>FaceBook</b></label>
                    <input type="text" class="form-control" id="facebook" value="<?php echo $linkFB?>" name="fb">
                </div>
                <div class="mb-3">
                    <label for="ins"><b>Instagram</b></label>
                    <input type="text" class="form-control" id="ins" value="<?php echo $linkIn?>" name="ins">
                </div>
                <div class="mb-3">
                    <label for="twitter"><b>Twitter</b></label>
                    <input type="text" class="form-control" id="twitter" value="<?php echo $linkTwitter?>" name="tw">
                </div>
                <div class="mb-3">
                    <label for="email"><b>Email</b></label>
                    <input type="text" class="form-control" id="email" value="<?php echo $email?>" name="email">
                </div>
                <div class="mb-3">
                    <label for="banner"><b>Link Banner</b></label>
                    <input type="text" class="form-control" id="banner" value="<?php echo $linkBanner?>" name="banner">
                </div>

                <hr>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success" name="submit">Lưu lại</button>
                </div>

            </form>
            <?php }}
        else
        echo $sql; ?>
        </div>
    </div>



</div>



<?php
include('footer.php');
?>