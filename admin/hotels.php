<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container my-main">

    <h2 class="text-uppercase my-title-ad">Quản lý các khách sạn</h2>

    <a href="add_hotel.php"><button type="button" class="btn btn-primary">Thêm</button></a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Số điện thoại</th>

                <th scope="col">Ảnh minh họa</th>
                <th scope="col">Tour liên quan</th>
                <th scope="col">Tác vụ</th>

            </tr>
        </thead>
        <?php
            $sql="select * from hotels";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){ 
                while($row=mysqli_fetch_assoc($result)){
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
                    else echo $sql;


        ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $hotelID ?></th>
                <td><?php echo $hotelName ?></td>
                <td><?php echo $hotelDes ?></td>
                <td><?php echo $hotelLocation ?></td>
                <td><?php echo $hotelPhone ?></td>

                <td>
                    <img src="<?php echo  $hotelImg ?>" alt="" width="150px">
                </td>
                <td><?php echo $tourName ?></td>
                <td>
                    <a href="edit_hotel.php?id=<?php echo $hotelID; ?>"><button type="button"
                            class="btn btn-success">Sửa</button></a>
                    <a href="delete_hotel.php?id=<?php echo $hotelID; ?>"
                        onclick="return confirm('Bạn chắc chắn muốn xóa?')"><button type="button"
                            class="btn btn-danger">Xóa</button></a>

                </td>


            </tr>

        </tbody>
        <?php }} ?>
    </table>
</div>



<?php
include('footer.php');
?>