<?php 

include('header.php');
include('../config/connect.php');
?>
<div class="container my-main">

    <h2 class="text-uppercase my-title-ad">Quản lý nhóm tours</h2>
    <!-- Button to Add group Tour -->
    <a href="add_tourgroup.php" class="btn-primary " style="border-radius:4px; padding:8px;text-decoration: none;">Add Tours</a>
    <br /><br />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S.N</th>
                <th>GroupID</th>
                <th>GroupName</th>
                <th>GroupStatus</th>
                <th>Action</th>

            </tr>
        </thead>
        <?php 
                    
                        $sql = "SELECT * FROM toursgroup";
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result)>0){ 
                            $sn=1;
                            while($row=mysqli_fetch_assoc($result)){

                                $groupid = $row['GroupID'];
                                $groupname = $row['GroupName'];
                                $groupstatus = $row['GroupStatus'];
                                ?>

        <tr>
            <th scope="row"><?php echo $sn++; ?></th>
            <td><?php echo $groupid; ?></td>
            <td><?php echo  $groupname; ?></td>
            <td><?php echo $groupstatus; ?></td>
            <td>
                <a href="updategrouptour.php?groupid=<?php echo $groupid; ?>"><button type="button"
                        class="btn btn-success">Update </button></a>
                <a href="deletegrouptour.php?groupid=<?php echo $groupid; ?>"
                    onclick="return confirm('Bạn chắc chắn muốn xóa?')"><button type="button"
                        class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        <?php
                        }
                    }
                    else{
                        echo $sql;
                    }
                ?>
    </table>
    <!--  -->
</div>
<?php
include('footer.php');
?>