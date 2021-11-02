<?php include('header.php') ?>

<main>
    <div class="container">
        <h2>Thêm nhóm tour</h2>
        <form action = "process_add_tour.php" method="POST">
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
            <div class="mb-3">
                <label for="user_adStatus" class="form-label" style="font-weight: bold">Trạng thái</label>
                <select type="text" class="form-control" name="user_adStatus">
                    <option value="0">Chưa kích hoạt</option>
                    <option value="1">Kích hoạt</option>
                </select>
                
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-success" name="luulai">Lưu lại</button>
            </div>
        </form>
    </div>
</main>

<?php include('footer.php') ?>
