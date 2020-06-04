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
                            header('location: them-loai-tin-tuc.php');
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
                            $_SESSION['success'] = "Thêm Thành Công!";
                            header('location: danh-sach-the-loai.php');
                        }
                        else
                        {
                            $_SESSION['status'] = "Thêm Thất Bại!";
                            header('location: them-loai-tin-tuc.php');
                        }
            }
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

//SỬA NHÀ HÀNG
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
//SỬA KHÁCH SẠN
if(isset($_POST['btn_capnhat_ks']))
{
    $maks = $_POST['sua_maks'];
    $tenks = $_POST['sua_tenks'];
    $hangsao = $_POST['sua_hangsao'];
    $diachiks = $_POST['sua_diachiks'];
    $dtks = $_POST['sua_sdtks'];
    $sophong = $_POST['sua_sophong'];
    $website = $_POST['sua_web'];
    $anhks = $_POST['sua_anhks'];

    $query = "UPDATE khachsan SET TenKS='$tenks', HangSao='$hangsao', DiaChi='$diachiks', DienThoai='$dtks', SoPhong='$sophong', WebSite='$website', Anh='$anhks' WHERE MaKS='$maks'";
=======
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
        $_SESSION['success'] = "Update Successed!";
        header('location: danh-sach-khach-san.php');
    }
    else 
    {
        $_SESSION['status'] = "Update Failed!";
        header('location: sua-khach-san.php');
    }
}
//SỬA THỂ LOẠI TIN TỨC
if(isset($_POST['btn_capnhat_tl']))
{
    $matl = $_POST['sua_matl'];
    $tentl = $_POST['sua_tentl'];

    $query = "UPDATE theloai SET TenTheLoai='$tentl' WHERE MaTheLoai='$matl'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Update Successed!";
        header('location: danh-sach-the-loai.php');
    }
    else 
    {
        $_SESSION['status'] = "Update Failed!";
        header('location: sua-loai-tin-tuc.php');
    }
}
//SỬA TIN TỨC
if(isset($_POST['btn_capnhat_tt']))
{
    $matt = $_POST['sua_matt'];
    $tentt = $_POST['sua_tentt'];
    $mota = $_POST['sua_mota'];
    $chitiet = $_POST['sua_chitiet'];
    $hinhanhtt = $_POST['sua_hinhanh'];
    $ngay = $_POST['sua_ngay'];
    $taoboi = $_POST['sua_tacgia'];

    $query = "UPDATE tintuc SET TenTinTuc ='$tentt', MoTa ='$mota', ChiTiet ='$chitiet', HinhAnh ='$hinhanhtt', Ngay='$ngay', TaoBoi='$taoboi' WHERE MaTinTuc='$matt'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Update Successed!";
        header('location: danh-sach-tin-tuc.php');
    }
    else 
    {
        $_SESSION['status'] = "Update Failed!";
        header('location: sua-tin-tuc.php');
    }
}
//SỬA TOUR DU LỊCH
if(isset($_POST['btn_capnhat_tour']))
{
    $matour = $_POST['sua_matour'];
    $tentour = $_POST['sua_tentour'];
    $noikhoihanh = $_POST['sua_noikhoihanh'];
    $noiden = $_POST['sua_noiden'];
    $thoigian = $_POST['sua_thoigian'];
    $giatien = $_POST['sua_giatien'];
    $hanhtrinh = $_POST['sua_hanhtrinh'];
    $songay = $_POST['sua_songay'];
    $anhtour = $_POST['sua_anh'];

    $query = "UPDATE tourdulich SET TenTour='$tentour', NoiKhoiHanh='$noikhoihanh', NoiDen='$noiden', ThoiGian='$thoigian', GiaTien='$giatien', HanhTrinh='$hanhtrinh', SoNgay='$songay', Anh='$anhtour' WHERE MaTour='$matour'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Update Successed!";
        header('location: danh-sach-tour-du-lich.php');
    }
    else 
    {
        $_SESSION['status'] = "Update Failed!";
        header('location: sua-tour-du-lich.php');
    }
}
//SỬA DỊCH VỤ ĐI KÈM
if(isset($_POST['btn_capnhat_dv']))
{
    $madv = $_POST['sua_madv'];
    $tendv = $_POST['sua_tendv'];
    $giadv = $_POST['sua_giadv'];
    $ghichu = $_POST['sua_ghichu'];

    $query = "UPDATE dichvudikem SET TenDV='$tendv', GiaDichVu='$giadv', GhiChu='$ghichu' WHERE MaDV='$madv'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Update Successed!";
        header('location: danh-sach-dich-vu-di-kem.php');
    }
    else 
    {
        $_SESSION['status'] = "Update Failed!";
        header('location: sua-dich-vu-di-kem.php');
    }
}
// XÓA THỂ LOẠI TIN TỨC
if(isset($_POST['btn_xoa_theloai']))
{
    $matheloai = $_POST['xoa_theloai'];

    $query = " DELETE FROM theloai WHERE MaTheLoai='$matheloai' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Delete Successed!";
        header('location: danh-sach-the-loai.php');
    }
    else 
    {
        $_SESSION['status'] = "Delete Failed!";
        header('location: danh-sach-the-loai.php');
    }
}
// XÓA THỂ TIN TỨC
if(isset($_POST['btn_xoa_tintuc']))
{
    $matintuc = $_POST['xoa_tintuc'];

    $query = " DELETE FROM tintuc WHERE MaTinTuc='$matintuc' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Delete Successed!";
        header('location: danh-sach-tin-tuc.php');
    }
    else 
    {
        $_SESSION['status'] = "Delete Failed!";
        header('location: danh-sach-tin-tuc.php');
    }
}
// XÓA TOUR DU LỊCH
if(isset($_POST['btn_xoa_tour']))
{
    $matour = $_POST['xoa_tour'];

    $query = " DELETE FROM tourdulich WHERE MaTour ='$matour' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Delete Successed!";
        header('location: danh-sach-tour-du-lich.php');
    }
    else 
    {
        $_SESSION['status'] = "Delete Failed!";
        header('location: danh-sach-tour-du-lich.php');
    }
}
// XÓA NHÀ HÀNG
if(isset($_POST['btn_xoa_nh']))
{
    $manh = $_POST['xoa_nhahang'];

    $query = " DELETE FROM nhahang WHERE MaNH ='$manh' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Delete Successed!";
        header('location: danh-sach-nha-hang.php');
    }
    else 
    {
        $_SESSION['status'] = "Delete Failed!";
        header('location: danh-sach-nha-hang.php');
    }
}
// XÓA KHÁCH SẠN
if(isset($_POST['btn_xoa_ks']))
{
    $maks = $_POST['xoa_khachsan'];

    $query = " DELETE FROM khachsan WHERE MaKS ='$maks' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Delete Successed!";
        header('location: danh-sach-khach-san.php');
    }
    else 
    {
        $_SESSION['status'] = "Delete Failed!";
        header('location: danh-sach-khach-san.php');
    }
}
// XÓA LOẠI KHÁCH SẠN
if(isset($_POST['btn_xoa_loaiks']))
{
    $malks = $_POST['xoa_loaikhachsan'];

    $query = " DELETE FROM loaiks WHERE MaLoaiKS ='$malks' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Delete Successed!";
        $_SESSION['success'] = "Cập Nhật Thành Công!";
        header('location: danh-sach-loai-khach-san.php');
    }
    else 
    {
        $_SESSION['status'] = "Delete Failed!";
        header('location: danh-sach-loai-khach-san.php');
    }
}
// XÓA DỊCH VỤ ĐI KÈM
if(isset($_POST['btn_xoa_dv']))
{
    $madv = $_POST['xoa_dv'];

    $query = " DELETE FROM dichvudikem WHERE MaDV ='$madv' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Delete Successed!";
        header('location: danh-sach-dich-vu-di-kem.php');
    }
    else 
    {
        $_SESSION['status'] = "Delete Failed!";
        header('location: danh-sach-dich-vu-di-kem.php');
    }
}
// XÓA NHÂN VIÊN
if(isset($_POST['btn_xoa_nv']))
{
    $manv = $_POST['xoa_nhanvien'];

    $query = " DELETE FROM nhanvien WHERE MaNV ='$manv' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Delete Successed!";
        header('location: danh-sach-nhan-vien.php');
    }
    else 
    {
        $_SESSION['status'] = "Delete Failed!";
        header('location: danh-sach-nhan-vien.php');
    }
}
// XÓA HƯỚNG DẪN VIÊN
if(isset($_POST['btn_xoa_hdv']))
{
    $mahdv = $_POST['xoa_huongdanvien'];

    $query = " DELETE FROM huongdanvien WHERE MaHDV ='$mahdv' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Delete Successed!";
        header('location: danh-sach-huong-dan-vien.php');
    }
    else 
    {
        $_SESSION['status'] = "Delete Failed!";
        header('location: danh-sach-huong-dan-vien.php');
    }
}
        $_SESSION['status'] = "Cập Nhật Thất Bại!";
        header('location: danh-sach-loai-khach-san.php');
    }
}

?>