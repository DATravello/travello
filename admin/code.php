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

    $sql_tennh = "SELECT * FROM nhahang WHERE TenNhaHang = '$tennhahang'";
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
// * THÊM LOẠI KHÁCH SẠN *//
if(isset($_POST['btn_them_loai_ks']))
{
    // $anh = $_FILES["images"]['Anh'];
    $tenloaiphong = $_POST['TenLoaiPhong'];
    $gialoaiphong = $_POST['Gia'];
   

    $sql_tenloaiphong = "SELECT * FROM loaiks WHERE TenLoaiPhong = '$tenloaiphong'";
    $rstenloaiphong = mysqli_query($connection,$sql_tenloaiphong);
    
    // if(file_exists("img/users/" . $_FILES["images"]["name"]))
    // {
    //     $store = $_FILES["images"]["Anh"];
    //     $_SESSION['status'] = "Ảnh Đã Tồn Tại. '.$store.'";
    //     header('location: them-nha-hang.php');
    // }
    // else
    // {
        if (!$tenloaiphong || !$gialoaiphong)
        {
            echo "Không thành công!";
            $_SESSION['status'] = "Vui lòng không bỏ trống trường!";
            header('location: them-loai-khach-san.php');
        }
        else
        {
            if(mysqli_num_rows($rstenloaiphong) > 0)
            {
                echo "Không thành công";
                $_SESSION['status'] = "Loại Phòng Đã Tồn Tại!";
                header('location: them-loai-khach-san.php');
            }
            else
            {
                        $query = "INSERT INTO loaiks (`TenLoaiPhong`,`Gia`) VALUES ('$tenloaiphong','$gialoaiphong')";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            // move_uploaded_file($_FILES["images"]["tmp_name"], "img/nha-hang/".$_FILES["images"]["Anh"]);
                            $_SESSION['success'] = "Thêm Thành Công!";
                            header('location: danh-sach-loai-khach-san.php');
                        }
                        else
                        {
                            $_SESSION['status'] = "Thêm Thất Bại!";
                            header('location: them-loai-khach-san.php');
                        }
            }
        }
    // }
}
// * THÊM KhÁCH SẠN *//
if(isset($_POST['btn_them_khach_san']))
{
    // $anh = $_FILES["images"]['Anh'];
    $tenkhachsan = $_POST['TenKS'];
    $hangsao = $_POST['HangSao'];
    $diachi = $_POST['DiaChi'];
    $dienthoai = $_POST['DienThoai'];
    $sophong = $_POST['SoPhong'];
    $website = $_POST['WebSite'];
    $anhks = $_POST['Anh'];

    $sql_tenkhachsan = "SELECT * FROM khachsan WHERE TenKS = '$tenkhachsan'";
    $rstenks = mysqli_query($connection,$sql_tenkhachsan);
    
    // if(file_exists("img/users/" . $_FILES["images"]["name"]))
    // {
    //     $store = $_FILES["images"]["Anh"];
    //     $_SESSION['status'] = "Ảnh Đã Tồn Tại. '.$store.'";
    //     header('location: them-nha-hang.php');
    // }
    // else
    // {
        if (!$tenkhachsan || !$hangsao || !$diachi || !$dienthoai || !$sophong || !$website ||!$anhks  )
        {
            echo "Không thành công!";
            $_SESSION['status'] = "Vui lòng không bỏ trống trường!";
            header('location: them-khach-san.php');
        }
        else
        {
            if(mysqli_num_rows($rstenks) > 0)
            {
                echo "Không thành công";
                $_SESSION['status'] = "Khách Sạn Đã Tồn Tại!";
                header('location: them-khach-san.php');
            }
            else
            {
                        $query = "INSERT INTO khachsan (`TenKS`,`HangSao`,`DiaChi`,`DienThoai`,`SoPhong`,`WebSite`,`Anh`) VALUES ('$tenkhachsan','$hangsao','$diachi','$dienthoai','$sophong','$website','$anhks')";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            // move_uploaded_file($_FILES["images"]["tmp_name"], "img/nha-hang/".$_FILES["images"]["Anh"]);
                            $_SESSION['success'] = "Thêm Thành Công!";
                            header('location: danh-sach-khach-san.php');
                        }
                        else
                        {
                            $_SESSION['status'] = "Thêm Thất Bại!";
                            header('location: them-khach-san.php');
                        }
            }
        }
    // }
}
// * THÊM THỂ LOẠI TIN TỨC *//
if(isset($_POST['btn_them_loai_tin']))
{
    // $anh = $_FILES["images"]['Anh'];
    $tentheloai = $_POST['TenTheLoai'];

    $sql_tentheloai = "SELECT * FROM theloai WHERE TenTheLoai = '$tentheloai'";
    $rstentheloai = mysqli_query($connection,$sql_tentheloai);
        if (!$tentheloai)
        {
            echo "Không thành công!";
            $_SESSION['status'] = "Vui lòng không bỏ trống trường!";
            header('location: them-loai-tin-tuc.php');
        }
        else
        {
            if(mysqli_num_rows($rstentheloai) > 0)
            {
                echo "Không thành công";
                $_SESSION['status'] = "Thể Loại Tin Đã Tồn Tại!";
                header('location: them-loai-tin-tuc.php');
            }
            else
            {
                        $query = "INSERT INTO theloai (`TenTheLoai`) VALUES ('$tentheloai')";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            // move_uploaded_file($_FILES["images"]["tmp_name"], "img/nha-hang/".$_FILES["images"]["Anh"]);
                            $_SESSION['success'] = "Thêm Thành Công!";
                            header('location: danh-sach-the-loai.php');
                        }
                        else
                        {
                            $_SESSION['status'] = "Thêm Thất Bại!";
                            header('location: them-loai-khach-san.php');
                        }
            }
        }
    // }
}
// * THÊM Tin Tức *//
if(isset($_POST['btn_them_tin_tuc']))
{
    // $anh = $_FILES["images"]['Anh'];
    $tentintuc = $_POST['TenTinTuc'];
    $mota = $_POST['MoTa'];
    $chitiet = $_POST['ChiTiet'];
    $hinhanh = $_POST['HinhAnh'];
    $ngay = $_POST['Ngay'];
    $taoboi = $_POST['TaoBoi'];

    $sql_tentintuc = "SELECT * FROM tintuc WHERE TenTinTuc = '$tentintuc'";
    $rstentintuc = mysqli_query($connection,$sql_tentintuc);
        if (!$tentintuc || !$mota || !$chitiet || !$hinhanh || !$ngay || !$taoboi  )
        {
            echo "Không thành công!";
            $_SESSION['status'] = "Vui lòng không bỏ trống trường!";
            header('location: them-tin-tuc.php');
        }
        else
        {
            if(mysqli_num_rows($rstentintuc) > 0)
            {
                echo "Không thành công";
                $_SESSION['status'] = "Khách Sạn Đã Tồn Tại!";
                header('location: them-tin-tuc.php');
            }
            else
            {
                        $query = "INSERT INTO tintuc (`TenTinTuc`,`MoTa`,`ChiTiet`,`HinhAnh`,`Ngay`,`TaoBoi`) VALUES ('$tentintuc','$mota','$chitiet','$hinhanh','$ngay','$taoboi')";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            // move_uploaded_file($_FILES["images"]["tmp_name"], "img/nha-hang/".$_FILES["images"]["Anh"]);
                            $_SESSION['success'] = "Thêm Thành Công!";
                            header('location: danh-sach-tin-tuc.php');
                        }
                        else
                        {
                            $_SESSION['status'] = "Thêm Thất Bại!";
                            header('location: them-khach-san.php');
                        }
            }
        }
    // }
}
// * THÊM DỊCH VỤ ĐI KÈM *//
if(isset($_POST['btn_them_dich_vu']))
{
    // $anh = $_FILES["images"]['Anh'];
    $tendichvu = $_POST['TenDV'];
    $giadichvu = $_POST['GiaDichVu'];
    $ghichu = $_POST['GhiChu'];

    $sql_tendichvu = "SELECT * FROM dichvudikem WHERE TenDV = '$tendichvu'";
    $rstendichvu = mysqli_query($connection,$sql_tendichvu);
        if (!$tendichvu || !$giadichvu || !$ghichu)
        {
            echo "Không thành công!";
            $_SESSION['status'] = "Vui lòng không bỏ trống trường!";
            header('location: them-dich-vu-di-kem.php');
        }
        else
        {
            if(mysqli_num_rows($rstendichvu) > 0)
            {
                echo "Không thành công";
                $_SESSION['status'] = "Dịch Vụ Đã Tồn Tại!";
                header('location: them-dich-vu-di-kem.php');
            }
            else
            {
                        $query = "INSERT INTO dichvudikem (`TenDV`, `GiaDichVu`,`GhiChu`) VALUES ('$tendichvu','$giadichvu','$ghichu')";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            // move_uploaded_file($_FILES["images"]["tmp_name"], "img/nha-hang/".$_FILES["images"]["Anh"]);
                            $_SESSION['success'] = "Thêm Thành Công!";
                            header('location: danh-sach-dich-vu-di-kem.php');
                        }
                        else
                        {
                            $_SESSION['status'] = "Thêm Thất Bại!";
                            header('location: them-dich-vu-di-kem.php');
                        }
            }
        }
    // }
}
// * THÊM TOUR DU LỊCH *//
if(isset($_POST['btn_them_tour']))
{
    $tentour = $_POST['TenTour'];
    $noikhoihanh = $_POST['NoiKhoiHanh'];
    $noiden = $_POST['NoiDen'];
    $thoigian = $_POST['ThoiGian'];
    $giatien = $_POST['GiaTien'];
    $hanhtrinh = $_POST['HanhTrinh'];
    $songay = $_POST['SoNgay'];
    $anhtour = $_POST['Anh'];

    $sql_tentour = "SELECT * FROM tourdulich WHERE TenTour = '$tentour'";
    $rstentour = mysqli_query($connection,$sql_tentour);
        if (!$tentour || !$noikhoihanh || !$noiden || !$thoigian || !$giatien || !$hanhtrinh || !$songay || !$anhtour)
        {
            echo "Không thành công!";
            $_SESSION['status'] = "Vui lòng không bỏ trống trường!";
            header('location: them-tour-du-lich.php');
        }
        else
        {
            if(mysqli_num_rows($rstentour) > 0)
            {
                echo "Không thành công";
                $_SESSION['status'] = "Tour Đã Tồn Tại!";
                header('location: them-tour-du-lich.php');
            }
            else
            {
                        $query = "INSERT INTO tourdulich (`TenTour`,`NoiKhoiHanh`,`NoiDen`,`ThoiGian`,`GiaTien`,`HanhTrinh`,`SoNgay`,`Anh`) VALUES ('$tentour','$noikhoihanh','$noiden','$thoigian','$giatien','$hanhtrinh', '$songay' ,'$anhtour')";
                        $query_run = mysqli_query($connection, $query);

                        if($query_run)
                        {
                            // move_uploaded_file($_FILES["images"]["tmp_name"], "img/nha-hang/".$_FILES["images"]["Anh"]);
                            $_SESSION['success'] = "Thêm Thành Công!";
                            header('location: danh-sach-tour-du-lich.php');
                        }
                        else
                        {
                            $_SESSION['status'] = "Thêm Thất Bại!";
                            header('location: them-tour-du-lich.php');
                        }
            }
        }
    // }
}

//sửa nhà hàng
if(isset($_POST['btn_capnhat_nh']))
{
    $manh = $_POST['sua_mnh'];
    $tennh = $_POST['sua_tennh'];
    $diachi = $_POST['sua_diachinh'];
    $anhnh = $_POST['sua_anhnh'];
    $dtnh = $_POST['sua_sdtnh'];
    $gtnh = $_POST['sua_gtnh'];
    $gianh = $_POST['sua_gianh'];

    $query = "UPDATE nhahang SET TenNhaHang='$tennh', DiaChi='$diachi', Anh='$anhnh', SDT='$dtnh', GioiThieuNH='$gtnh', GiaNh='$gianh' WHERE MaNH='$manh'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Update Successed!";
        header('location: danh-sach-nha-hang.php');
    }
    else 
    {
        $_SESSION['status'] = "Update Failed!";
        header('location: sua-nha-hang.php');
    }
}
?>