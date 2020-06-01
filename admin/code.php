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
                            header('location: them-nha-hang.php');
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

?>