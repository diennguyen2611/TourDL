<?php 
include('header.php');
include('../config/connect.php');
?>

    <div class="container">
    <h2>Thêm Admin</h2>
    <form action = "process_add_users.php" method="POST">
        <div class="mb-3">
            <label for="pName" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" name='pName'>
        </div>
        <div class="mb-3">
            <label for="pSex" class="form-label">Giới tính</label>
            <select name="pSex" id = "pSex">
            <option value = "1">Nam</option>
            <option value = "0">Nữ</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="pYear" class="form-label">Năm sinh</label>
            <input type="text" class="form-control" name = "pYear">
        </div>
        <div class="mb-3">
            <label for="pGroup" class="form-label">Nhóm máu</label>
            <input type="text" class="form-control" name="pGroup">
        </div>
        <div class="mb-3">
            <label for="pPhone" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="pPhone">
        </div>
    
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-success">Lưu lại</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

