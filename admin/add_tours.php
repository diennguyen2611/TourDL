<?php include('header.php') ?>

<main>
    <div class="container">
        <h2>Thêm tour</h2>
        <form action="process_add_tour.php" method="POST">


            <div class="mb-3">
                <label for="tourname" class="form-label">Tên tour</label>
                <input type="text" class="form-control" name="tourname">
            </div>
            <div class="mb-3">
                <label for="tourlocation" class="form-label">Địa điểm</label>
                <input type="text" class="form-control" name="tourlocation">
            </div>
            <div class="mb-3">
                <label for="tourvehicle" class="form-label">Phương tiện</label>
                <input type="text" class="form-control" name='tourvehicle'>
            </div>
            <div class="mb-3">
                <label for="tourdes"><b>Mô tả</b></label>
            </div>
            <div class="mb-3">

                <textarea style="width: 100%" rows="10" name="tourdes"></textarea>

            </div>
            <div class="mb-3">
                <label for="tourschedule"><b>Lịch trình</b></label>
            </div>
            <div class="mb-3">

                <textarea style="width: 100%" rows="10" name="tourschedule"></textarea>

            </div>
            <div class="mb-3">
                <label for="tourimg"><b>Ảnh tour </b></label>
                <input type="text" class="form-control" id="tourimg" name="tourimg">

            </div>
            <div class="mb-3">
                <label for="groupid" class="form-label" style="font-weight: bold">Mã nhóm</label>
                <select name="groupid" id="groupid">
                    <?php
       $sql0 = "select * from `toursgroup`";
       $result0 = mysqli_query($conn, $sql0);
       if(mysqli_num_rows($result0)>0){ 
        while($row=mysqli_fetch_assoc($result0)){
            echo '<option value = "'.$row['GroupID'].'">'.$row['GroupName'].'</option>';
        }}?>
                </select>
               
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success" name="luulaitour">Lưu lại</button>
            </div>
        </form>
    </div>
</main>

<?php include('footer.php') ?>