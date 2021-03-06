<?php
    include('includes/header.php');
    include('includes/navbar.php');
?>
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Tin Tức
            <a href="danh-sach-tin-tuc.php">
              <button type="button" class="btn btn-success">Danh Sách Tin Tức</button>
            </a>
            </h6>
        </div>
        <?php
           

            if(isset($_SESSION['success']) && $_SESSION['success'] !='')
            {
                echo    '<div class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">
                        '.$_SESSION['success'].'
                        </span>
                        </div>';
                unset($_SESSION['success']);
            }

            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
                echo '<div class="btn btn-warning btn-icon-split">
                     <span class="icon text-white-50">
                        <i class="fas fa-exclamation-triangle"></i>
                     </span>
                     <span class="text">
                        '.$_SESSION['status'].'
                     </span>
                     </div>';
                unset($_SESSION['status']);
            }
        ?>
        <form action="code.php" method="POST">

        <div class="modal-body">


            <div class="form-group">
                <label> Tên Tin Tức </label>
                <input type="text" name="TenTinTuc" class="form-control" placeholder="Nhập Tên Tin Tức">
            </div>
            <div class="form-group">
                <label> Mô Tả </label>
                <input type="text" name="MoTa" class="form-control" placeholder="Nhập Mô Tả">
            </div>
            <div class="form-group">
                <label> Chi Tiết </label>
                <!-- <input type="file" name="images" id="images" class="form-control" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"> -->
                <input type="text" name="ChiTiet" class="form-control" placeholder="Nhập Chi Tiết">
            </div>
            <div class="form-group">
                <label> Hình Ảnh </label>
                <input type="text" name="HinhAnh" class="form-control" placeholder="Chọn Ảnh">
            </div>
            <div class="form-group">
                <label> Ngày </label>
                <input type="date" name="Ngay" class="form-control" placeholder="Chọn Ngày">
            </div>
            <div class="form-group">
                <label> Tạo Bởi </label>
                <input type="text" name="TaoBoi" class="form-control" placeholder="Nhập Tác Giả">
            </div>
        </div>

        <div class="modal-footer">
            <button type="reset" value="reset" class="btn btn-warning" data-dismiss="modal">Xoá Trường</button>
            <button type="submit" name="btn_them_tin_tuc" class="btn btn-primary">Lưu</button>
        </div>

        </form>
    </div>

</div>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>