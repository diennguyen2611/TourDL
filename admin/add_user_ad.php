<?php include('header.php') ?>

<main>
    <div class="container">
        <h2>Thêm Admin</h2>
        <form action = "process_add_users_ad.php" method="POST">
            <div class="mb-3">
                <label for="user_adName" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" name='user_adName'>
            </div>
           
            <div class="mb-3">
                <label for="user_adPass" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" name = "user_adPass">
            </div>
            <div class="mb-3">
                <label for="user_adEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="user_adEmail">
            </div>
            <!-- <div class="mb-3">
                <label for="user_adName" class="form-label">Trạng thái</label>
                <input type="text" class="form-control" name='user_adName'>
            </div> -->
            <div class="mb-3">
            <button type="submit" class="btn btn-success" name="luulai">Lưu lại</button>
            </div>
        </form>
    </div>
</main>

<?php include('footer.php') ?>