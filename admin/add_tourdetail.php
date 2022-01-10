<?php include('header.php') ?>

<main>
    <div class="container f-header">
        <h2>Thêm chi tiết tour</h2>
        <form action="process_add_tourdetail.php" method="POST">
        <div class="mb-3">
                <label for="tourid" class="form-label" style="font-weight: bold">Mã tour</label>
                <select name="tourid" id="tourid">
                    <?php
       $sql0 = "select * from `tours`";
       $result0 = mysqli_query($conn, $sql0);
       if(mysqli_num_rows($result0)>0){ 
        while($row=mysqli_fetch_assoc($result0)){
            echo '<option value = "'.$row['TourID'].'">'.$row['TourID'].'</option>';
        }}?>
                </select>
               
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