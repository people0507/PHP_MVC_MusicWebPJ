<?php
include ("views/includes/header_admin.php");
?>

<main class="container mt-5 mb-5">

    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Sửa thông tin người dùng</h3>
            <form action="./index.php?controller=user&action=update" method="post">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatId">Mã người dùng</span>
                    <input type="text" class="form-control" name="txt_nguoidung" readonly value=" <?php echo $id_users[0] -> getIdUser() ?>">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tài khoản</span>
                    <input type="text" class="form-control" name="txt_taikhoan" value=" <?php echo $id_users[0] -> getTkUser() ?>">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Mật Khẩu</span>
                    <input type="text" class="form-control" name="txt_matkhau" value=" <?php echo $id_users[0] -> getMkUser() ?>">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Quyền</span>
                    <input type="text" class="form-control" name="txt_quyen" value=" <?php echo $id_users[0] -> getQuyenUser() ?>">
                </div>
                <div class="form-group  float-end ">
                    <input type="submit" value="Lưu lại" class="btn btn-success">
                    <a href="index.php?controller=user" class="btn btn-warning ">Quay lại</a>
                </div>

            </form>
        </div>
    </div>
</main>

<?php
include("views/includes/footer_admin.php");
?>