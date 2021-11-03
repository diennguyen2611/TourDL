<?php include('header.php') ?>

<main>
    <div class="container">
        <h2>Thêm nhóm tour</h2>
        <form action="process_add_tourgroup.php" method="POST">
            
            <div class="mb-3">
                <label for="groupname" class="form-label">Tên nhóm</label>
                <input type="text" class="form-control" name='groupname'>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success" name="luulai">Lưu lại</button>
            </div>
        </form>
    </div>
</main>

<?php include('footer.php') ?>