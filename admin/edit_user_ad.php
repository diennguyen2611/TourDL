<?php 
include('header.php');
include('../config/connect.php');

$user_adID = $_GET['user_adID'];

$sql = "select * from users_ad where user_adID=$user_adID";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $user_adID=$row['user_adID'];
        $user_adName=$row['user_adName'];
        $user_adPass=$row['user_adPass'];
        $user_adEmail=$row['user_adEmail'];
        $user_adStatus=$row['user_adStatus'];
        }
}
?>

<main>
    <div class="container">
        <h2 class="my-main my-title-ad">Cập nhật thông tin admin</h2>
        <form action="process_update_user.php" method="POST">
            <h5 class="my-title-ad text-danger" for="">user_adID: <?php echo $user_adID; ?></h5>
            <div class="mb-3">
                <label for="empName" class="form-label" style="font-weight: bold">Họ và tên</label>
                <input type="text" class="form-control" name='empName' value="<?php echo $user_adName; ?>">
            </div>
            <div class="mb-3">
                <label for="empPosition" class="form-label" style="font-weight: bold">Mật khẩu</label>
                <input type="text" class="form-control" name="empPosition" value="<?php echo $user_adPass; ?>">
            </div>
            <div class="mb-3">
                <label for="empPhone" class="form-label" style="font-weight: bold">Email</label>
                <input type="text" class="form-control" name="empPhone" value="<?php echo $user_adEmail; ?>">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Lưu lại</button>
            </div>
        </form>
    </div>
</main>

<?php include('footer.php') ?>