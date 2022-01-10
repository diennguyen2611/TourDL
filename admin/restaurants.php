<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container f-header my-main">

    <h2 class="text-uppercase my-title-ad">Quản lý các nhà hàng</h2>

    <a href="add_restaurant.php"><button type="button" class="btn btn-primary">Thêm</button></a>
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
            $sql="select * from restaurants";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){ 
                while($row=mysqli_fetch_assoc($result)){
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
                    else echo $sql1;


        ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $resID ?></th>
                <td><?php echo $resName ?></td>
                <td><?php echo $resDes ?></td>
                <td><?php echo $resLocation ?></td>
                <td><?php echo $resPhone ?></td>

                <td>
                    <img src="<?php echo $ResImg ?>" alt="" width="150px">
                </td>
                <td><?php echo $tourName ?></td>
                <td>
                    <a href="edit_res.php?id=<?php echo $resID; ?>"><button type="button"
                            class="btn btn-success">Sửa</button></a>
                    <a href="delete_res.php?id=<?php echo $resID; ?>"
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