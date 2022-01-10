<?php include('header.php') ?>

<main>
    <div class="container f-header">
    <h5 class="my-title-ad">Tour<span class="t-child-2"> > Các Tour<span class="t-child-3"> > Thêm tour</span></span></h5>
        <form action="process_add_tour.php" method="POST" class="form-add">


            <div class="mb-3">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-end">Tên tour:</p>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="tourname" id="tourname">
                    </div>
                </div>

            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-end">Nhóm:</p>
                    </div>
                    <div class="col-md-6">
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
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-end">Địa điểm:</p>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="tourlocation" id="tourlocation">
                    </div>
                </div>

            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-end">Mô tả:</p>
                    </div>
                    <div class="col-md-6">
                        <textarea style="width: 100%" rows="5" name="tourdes" id="tourdes"></textarea>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-end">Lịch trình:</p>
                    </div>
                    <div class="col-md-6">
                        <textarea style="width: 100%" rows="5" name="tourschedule" id="tourschedule"></textarea>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-end">Link ảnh tour:</p>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="tourimg" name="tourimg">
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6 text-end">
                    <button type="submit" class="btn btn-success" name="luulaitour" id="btnSave">Lưu lại</button>
                    <a type="button" class="btn btn-secondary" href="tours.php">Hủy</a>
                    
                    
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

<?php include('footer.php') ?>