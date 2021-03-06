<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Nhân Viên
                <a href="danh-sach-huong-dan-vien.php">
                    <button type="button" class="btn btn-success">Danh Sách Nhân Viên</button>
                </a>
            </h6>
        </div>
        <?php


        if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
            echo    '<div class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">
                        ' . $_SESSION['success'] . '
                        </span>
                        </div>';
            unset($_SESSION['success']);
        }

        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
            echo '<div class="btn btn-warning btn-icon-split">
                     <span class="icon text-white-50">
                        <i class="fas fa-exclamation-triangle"></i>
                     </span>
                     <span class="text">
                        ' . $_SESSION['status'] . '
                     </span>
                     </div>';
            unset($_SESSION['status']);
        }
        ?>
        <form action="code.php" method="POST">

            <div class="modal-body">


                <div class="form-group">
                    <label> Tên Nhân Viên </label>
                    <input type="text" name="TenNV" class="form-control" placeholder="Nhập Tên Nhân Viên">
                </div>
                <div class="form-group">
                    <label> Ngày Sinh </label>
                    <input type="Date" name="NgaySinh" class="form-control" placeholder="Chọn Ngày Sinh">
                </div>

                <div class="form-group">
                    <label> Ảnh </label>
                    <!-- <input type="file" name="images" id="images" class="form-control" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"> -->
                    <!-- <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="Anh" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div> -->
                    <input type="Text" name="Anh" class="form-control" placeholder="Chọn Ảnh">

                </div>
                
                <div class="form-group">
                    <label> Địa Chỉ </label>
                    <input type="text" name="DiaChi" class="form-control" placeholder="Nhập Địa Chỉ">
                </div>
                <div class="form-group">
                    <label> Giới Tính </label>
                    <input type="text" name="GioiTinh" class="form-control" placeholder="Nhập Giới Tính">
                </div>
                <div class="form-group">
                    <label> Số Điện Thoại </label>
                    <input type="number" name="SDT" class="form-control" placeholder="Nhập Số Điện Thoại">
                </div>
                <div class="form-group">
                    <label> Quyền </label>
                    <input type="text" name="Quyen" class="form-control" placeholder="Nhập Quyền">
                </div>
            </div>

            <div class="modal-footer">
                <button type="reset" value="reset" class="btn btn-warning" data-dismiss="modal">Xoá Trường</button>
                <button type="submit" name="btn_them_nv" class="btn btn-primary">Lưu</button>
            </div>

        </form>
    </div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>