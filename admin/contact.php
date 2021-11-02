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
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Hotline: </b><?php echo $hotline?></li>
                <li class="list-group-item"><b>Thời gian làm việc: </b><?php echo $contactTime?></li>
                <li class="list-group-item"><b>Địa chỉ: </b><?php echo $location?></li>
                <li class="list-group-item"><b>Link Facebook: </b><?php echo $linkFB?></li>
                <li class="list-group-item"><b>Link Instagram: </b><?php echo  $linkIn?></li>
                <li class="list-group-item"><b>Link Twitter: </b><?php echo  $linkTwitter?></li>
                <li class="list-group-item"><b>Email: </b><?php echo $email?></li>
                <li class="list-group-item">
                    <p><b>Banner:</b></p>
                    <img src="<?php echo  $linkBanner?>" alt="banner" width="300px">
                </li>
                <li class="list-group-item">
                    <a href="edit_contact.php"><button type="button" class="btn btn-success">Sửa</button></a>

                </li>
            </ul>
            <?php }}
        else
        echo $sql; ?>
        </div>
    </div>



</div>



<?php
include('footer.php');
?>