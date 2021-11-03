<?php include('header.php') ?>

<main>
    <div class="container">
        <h2>Thêm tour</h2>
        <form action="process_add_tourdetail.php" method="POST">
        <div class="mb-3">
                <label for="tourid" class="form-label">Mã tour</label>
                <input type="text" class="form-control" name="tourid">
            </div> 
            <div class="mb-3">
                    <label for="tourstday"><b>Ngày bắt đầu </b></label>
                    <input type="date" class="form-control" id="tourstday"  name="tourstday">
                </div>
                <div class="mb-3">
                    <label for="toureday"><b>Ngày kết thúc </b></label>
                    <input type="date" class="form-control" id="toureday"  name="toureday">
                </div>
                <div class="mb-3">
                    <label for="tourprice"><b>Gía tour</b></label>
                    <input type="text" class="form-control" id="tourprice"  name="tourprice">
                </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success" name="luulai">Lưu lại</button>
            </div>
        </form>
    </div>
</main>

<?php include('footer.php') ?>