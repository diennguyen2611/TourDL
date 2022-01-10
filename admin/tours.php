<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="f-header my-main add-tour">

    <h5 class="text-uppercase my-title-ad">Quản lý tours</h5>
    <!-- Button to Add Tour -->
    <a href="add_tours.php" class="btn-success" style="border-radius:4px; padding:8px;text-decoration: none; margin-left:16px"><i
            class="fas fa-plus"></i> Thêm
        Tour</a>
    </br>

    <div class="row table-tour">
        <div class="col-md-12">
            <div class="dataTables_scroll">
                <div class="dataTables_scrollHead"
                    style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                    <div class="dataTables_scrollHeadInner"
                        style="box-sizing: content-box; width: 2748px; padding-right: 0px;">
                        <table class="table table-striped table-bordered table-sm table-full nowrap dataTable no-footer"
                            data-scrolly="auto" data-rightcolumns="0" data-leftcolumns="0" role="grid"
                            style="margin-left: 0px; width: 2748px;">
                            <thead>

                            </thead>
                        </table>
                    </div>
                </div>
                <div class="dataTables_scrollBody"
                    style="position: relative; overflow: auto; width: 100%; max-height: 409px;">
                    <table class="table table-striped table-bordered table-sm table-full nowrap dataTable no-footer"
                        data-scrolly="auto" data-rightcolumns="0" data-leftcolumns="0" id="DataTables_Table_0"
                        role="grid" style="width: 2739px;">
                        <thead class="head">
                            <th>STT</th>
                            <th>Mã Tour</th>
                            <th>Tên Tour</th>
                            <th>Địa điểm</th>
                            <th>Phương tiện</th>
                            <th>Chi tiết</th>
                            <th>Lịch trình</th>
                            <th>Ảnh minh họa</th>
                            <th>Trạng thái</th>
                            <th>Nhóm Tour</th>
                            <th>Tác vụ</th>
                        </thead>

                        <tbody>
                            <?php 
                    
                    $sql = "SELECT * FROM tours";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result)>0){ 
                        $sn=1;
                        while($row=mysqli_fetch_assoc($result)){
                            $tourid = $row['TourID'];
                            $tourname = $row['TourName'];
                            $tourlocation = $row['TourLocation'];
                            $tourvehicle = $row['TourVehicle'];
                            $tourdes = $row['TourDes'];
                            $tourschedule = $row['TourSchedule'];
                            $tourimg = $row['TourImg'];
                            $tourstatus = $row['TourStatus'];
                            $groupid = $row['GroupID'];
                            ?>
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $tourid; ?></td>
                            <td><?php echo  $tourname; ?></td>
                            <td><?php echo $tourlocation; ?></td>
                            <td><?php echo $tourvehicle; ?></td>
                            <td><?php echo $tourdes; ?></td>
                            <td><?php echo $tourschedule; ?></td>
                            <td><img src="<?php echo $tourimg ?>" alt="<?echo $tourName ?>" width="100px"> </td>

                            <td>
                                <?php 
                                    if($tourstatus==0)
                                    echo '<p class="text-success">Đang hoạt động</p>';
                                    else 
                                    echo '<p class="text-danger">Ngừng hoạt động</p>';
                                ?>
                            </td>
                            <td><?php echo $groupid; ?></td>
                            <td>
                                <?php
                                     if($tourstatus==0){?>
                                <a href="updatetour.php?tourid=<?php echo $tourid; ?>"><button type="button"
                                        class="btn btn-warning"><i class="fas fa-edit"></i> Sửa</button></a>
                                <p></p>
                                <a href="deletetour.php?tourid=<?php echo $tourid; ?>"
                                    onclick="return confirm('Bạn chắc chắn muốn xóa?')"><button type="button"
                                        class="btn btn-danger"><i class="fas fa-trash-alt"></i> Xóa</button></a>
                                <?php } ?>

                            </td>


                        </tbody>

                        <?php
                                 
                    }
                }
                else{
                    echo $sql;
                }
            ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>