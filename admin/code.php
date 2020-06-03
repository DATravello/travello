<?php
    include("db_config.php");

// * THÊM NHÀ HÀNG *//
if(isset($_POST['btn_them_nh']))
{
    // $anh = $_FILES["images"]['Anh'];
    $tennhahang = $_POST['TenNhaHang'];
    $diachi = $_POST['DiaChi'];
    $sdt = $_POST['SDT'];
    $anh = $_POST['Anh'];
    $gioithieu = $_POST['GioiThieuNH'];
    $gianh = $_POST['GiaNH'];

    $sql_tennh = "SELECT * FROM nhahang WHERE tennhahang = '$tennhahang'";
    $rstennh = mysqli_query($connection,$sql_tennh);
    
    // if(file_exists("img/users/" . $_FILES["images"]["name"]))
    // {
    //     $store = $_FILES["images"]["Anh"];
    //     $_SESSION['status'] = "Ảnh Đã Tồn Tại. '.$store.'";
    //     header('location: them-nha-hang.php');
    // }
    // else
    // {
        if (!$anh || !$tennhahang || !$diachi || !$sdt || !$gioithieu || !$gianh)
        {
            echo "Không thành công!";
            $_SESSION['status'] = "Vui lòng không bỏ trống trường!";
            header('location: them-nha-hang.php');
        }
        else
        {
            if(mysqli_num_rows($rstennh) > 0)
            {
                echo "Không thành công";
                $_SESSION['status'] = "Nhà Hàng Đã Tồn Tại!";
                header('location: them-nha-hang.php');
            }
            else
            {
                        $query = "INSERT INTO nhahang (`TenNhaHang`,`DiaChi`,`Anh`,`SDT`,`GioiThieuNH`,`GiaNH`) VALUES ('$tennhahang','$diachi','$anh','$sdt','$gioithieu','$gianh')";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            // move_uploaded_file($_FILES["images"]["tmp_name"], "img/nha-hang/".$_FILES["images"]["Anh"]);
                            $_SESSION['success'] = "Thêm Thành Công!";
                            header('location: danh-sach-nha-hang.php');
                        }
                        else
                        {
                            $_SESSION['status'] = "Thêm Thất Bại!";
                            header('location: them-nha-hang.php');
                        }
            }
        }
    // }
}

// * THÊM HƯỚNG DẪN VIÊN *//
if(isset($_POST['btn_them_hdv']))
{
    // $anh = $_FILES["images"]['Anh'];
    $tenhdv = $_POST['TenHDV'];
    $ngaysinh = $_POST['NgaySinh'];
    $diachi = $_POST['DiaChi'];
    $anh = $_POST['Anh'];
    $gioitinh = $_POST['GioiTinh'];
    $sdt = $_POST['SDT'];

    $sql_tenhdv = "SELECT * FROM huongdanvien WHERE TenHDV = '$tenhdv'";
    $rstenhdv = mysqli_query($connection,$sql_tenhdv);
    
    // if(file_exists("img/huong-dan-vien/" . $_FILES["images"]["Anh"]))
    // {
    //     $store = $_FILES["images"]["Anh"];
    //     $_SESSION['status'] = "Ảnh Đã Tồn Tại. '.$store.'";
    //     header('location: them-huong-dan-vien.php');
    // }
    // else
    // {
        if (!$tennv || !$ngaysinh || !$diachi || !$anh || !$gioitinh || !$sdt)
        {
            echo "Không thành công!";
            $_SESSION['status'] = "Vui lòng không bỏ trống trường!";
            header('location: them-huong-dan-vien.php');
        }
        else
        {
            if(mysqli_num_rows($rstennv) > 0)
            {
                echo "Không thành công";
                $_SESSION['status'] = "Hướng Dẫn Viên Đã Tồn Tại!";
                header('location: them-huong-dan-vien.php');
            }
            else
            {
                        $query = "INSERT INTO huongdanvien (`TenHDV`,`NgaySinh`,`DiaChi`,`GioiTinh`,`SDT`,`Anh`) VALUES ('$tenhdv','$ngaysinh','$diachi','$gioitinh','$sdt','$anh')";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            // move_uploaded_file($_FILES["images"]["tmp_name"], "img/huong-dan-vien/".$_FILES["images"]["Anh"]);
                            $_SESSION['success'] = "Thêm Thành Công!";
                            header('location: danh-sach-huong-dan-vien.php');
                        }
                        else
                        {
                            $_SESSION['status'] = "Thêm Thất Bại!";
                            header('location: them-huong-dan-vien.php');
                        }
            }
        }
    // }
}

// * THÊM NHÂN VIÊN *//
if(isset($_POST['btn_them_nv']))
{
    // $anh = $_FILES["images"]['Anh'];
    $tenhdv = $_POST['TenNV'];
    $ngaysinh = $_POST['NgaySinh'];
    $diachi = $_POST['DiaChi'];
    $anh = $_POST['Anh'];
    $gioitinh = $_POST['GioiTinh'];
    $sdt = $_POST['SDT'];
    $sdt = $_POST['Quyen'];

    $sql_tennv = "SELECT * FROM nhanvien WHERE ten = '$tennv'";
    $rstennv = mysqli_query($connection,$sql_tennv);
    
    // if(file_exists("img/huong-dan-vien/" . $_FILES["images"]["Anh"]))
    // {
    //     $store = $_FILES["images"]["Anh"];
    //     $_SESSION['status'] = "Ảnh Đã Tồn Tại. '.$store.'";
    //     header('location: them-huong-dan-vien.php');
    // }
    // else
    // {
        if (!$tenhdv || !$ngaysinh || !$diachi || !$anh || !$gioitinh || !$sdt || !$quyen)
        {
            echo "Không thành công!";
            $_SESSION['status'] = "Vui lòng không bỏ trống trường!";
            header('location: them-nhan-vien.php');
        }
        else
        {
            if(mysqli_num_rows($rstennv) > 0)
            {
                echo "Không thành công";
                $_SESSION['status'] = "Hướng Dẫn Viên Đã Tồn Tại!";
                header('location: them-nhan-vien.php');
            }
            else
            {
                        $query = "INSERT INTO nhanvien (`TenNV`,`NgaySinh`,`DiaChi`,`GioiTinh`,`SDT`,`Anh`) VALUES ('$tennv','$ngaysinh','$diachi','$gioitinh','$sdt','$anh')";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            // move_uploaded_file($_FILES["images"]["tmp_name"], "img/huong-dan-vien/".$_FILES["images"]["Anh"]);
                            $_SESSION['success'] = "Thêm Thành Công!";
                            header('location: them-huong-dan-vien.php');
                        }
                        else
                        {
                            $_SESSION['status'] = "Thêm Thất Bại!";
                            header('location: them-huong-dan-vien.php');
                        }
            }
        }
    // }
}

/*SỬA LOẠI KHÁCH SẠN*/

if(isset($_POST['btn_update_loaiks']))
{
    $maloai = $_POST['sua_maloai'];
    $tenloaiphong = $_POST['sua_tenloai'];
    $gia = $_POST['sua_gia'];

    $query = "UPDATE loaiks SET TenLoaiPhong='$tenloaiphong', Gia='$gia' WHERE MaLoaiKS='$maloai'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Cập Nhật Thành Công!";
        header('location: danh-sach-loai-khach-san.php');
    }
    else 
    {
        $_SESSION['status'] = "Cập Nhật Thất Bại!";
        header('location: danh-sach-loai-khach-san.php');
    }
}


?>