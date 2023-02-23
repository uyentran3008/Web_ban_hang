<?php
    require_once("../app/libs/connection.php");
    if(isset($_POST["update"])){
        $msnv = $_POST["MSNV"];
        $hotennv = $_POST["HoTenNV"];
        $mknv = $_POST["Password"];
        $chucvu = $_POST["ChucVu"];
        $diachi = $_POST["DiaChi"];
        $sdt = $_POST["SoDienThoai"];
        if($msnv == "" || $hotennv =="" || $mknv == "" || $chucvu == "" || $diachi == "" || $sdt == ""){
            echo "<script type='text/javascript'>alert('Bạn vui lòng nhập đủ thông tin!');</script>";
        }else{
            $sql = "INSERT INTO nhanvien (MSNV, HoTenNV, Password,ChucVu, DiaChi, SoDienThoai) 
            VALUES ('$msnv','$hotennv','$mknv','$chucvu','$diachi','$sdt')";
            mysqli_query($conn,$sql);
            header("location:ql_nhanvien.php");
            
        }
    }
?>