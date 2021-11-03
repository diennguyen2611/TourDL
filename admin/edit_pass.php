<?php 
session_start(); //dịch vụ bảo vệ
if(!isset($_SESSION['success'])){
    header("Location:login.php");
}
include('../config/connect.php');

?>
<div class="modal fade" id="login-guess" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thay đổi pasword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="process_edit_pass.php" method="POST">
                    <div class="mb-3">
                            <label for="pass" class="form-label">Mật khẩu cũ</label>
                            <input readonly type="password" class="form-control" id="pass" name="pass" value= <?php $_SESSION['pass']?>>

                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Mật khẩu mới</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Mật khẩu">

                        </div>
                        <button type="submit" class="btn btn-th" name="login" style="width: 100%;">Đăng nhập</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php
include('footer.php');
?>