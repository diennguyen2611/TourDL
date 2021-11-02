<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container my-main" style="overflow: hidden">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <h2 class="text-uppercase my-title-ad">Quản lý thông tin</h2>

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
                <div class="form-group">
                    <label for="hotline">Hotline</label>
                    <input type="text" class="form-control" id="hotline"
                        value="<?php echo $hotline ?>">
                </div>
                <div class="form-group">
                    <label for="contactTime">Thời gian làm việc</label>
                    <input type="text" class="form-control" id="contactTime"
                        value="<?php echo $contactTime?>">
                </div>
                

                <button type="submit" class="btn btn-primary">Submit</button>
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