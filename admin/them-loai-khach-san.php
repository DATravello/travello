<?php
include('security.php');
    include('includes/header.php');
    include('includes/navbar.php');
?>
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Loại Khách Sạn
            <a href="danh-sach-loai-khach-san.php">
              <button type="button" class="btn btn-success">Danh Sách Loại Khác Sạn</button>
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
                <label> Tên Loại Khách Sạn </label>
                <input type="text" name="TenLoaiPhong" class="form-control" placeholder="Nhập Tên Loại Phòng">
            </div>
            <div class="form-group">
                <label> Giá </label>
                <input type="number" name="Gia" class="form-control" placeholder="Nhập Giá Loại Phòng">
            </div>
                <label> Tên Loại Phòng </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label> </label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>

        </div>

        <div class="modal-footer">
            <button type="reset" value="reset" class="btn btn-warning" data-dismiss="modal">Xoá Trường</button>
            <button type="submit" name="btn_them_loai_ks" class="btn btn-primary">Lưu</button>
        </div>

        </form>
    </div>

</div>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>