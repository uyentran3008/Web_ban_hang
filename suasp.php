<?php
	include "../app/libs/connection.php";
	session_start();
    if(isset($_GET['MSHH'])){
        $id =$_GET['id'];
        $product =mysqli_query($conn,"select * from hanghoa where MSHH = $id");
        $pro = mysqli_fetch_assoc($product);
    }
    if(isset($_POST['TenHH'])){
        $TenHH = $_POST['TenHH'];
        $Gia = $_POST['Gia'];
        $SoLuongHang = $_POST['SoLuongHang'];
        $GhiChu = $_POST['GhiChu'];
        $MoTaHH = $_POST['MoTaHH'];
        //var_dump($_FILES['Hinh']);
        $file = $_FILES['Hinh'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'],'./img/'.$file_name);
        //$image = $file_name;
        $sql = "UPDATE hanghoa SET TenHH = '$TenHH', Gia = '$Gia', SoLuongHang = '$SoLuongHang', GhiChu = '$GhiChu', MoTaHH = '$MoTaHH', Hinh='$file_name' where id = $id  ";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('location: list_sp.php');
        }else{
            echo "Lỗi cập nhật!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    table,td,tr{
        background-color: #e7e7e7e3;
        text-align: center;
        margin: auto;
        padding: 10px;
    }
</style>
<body>
    <div class="container-fluid">
        <div class="row d-flex align-items-center" style="background-color: #fcedea; height:100px">
            <div class="col-4">
                <img class="img-fluid" src="../app/img/logo.jpg">
            </div>
            <div class="col-8"><h1>Quản lý cửa hàng</h1></div>
        </div>
        
        <div class="row d-flex">
            <nav class="navbar navbar-expand-sm bg-light justify-content-center d-flex">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin.php">Thêm sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Danh sách sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quản lý nhân viên</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <form action="suasp.php" method="post" enctype="multipart/form-data">
                <h3 style="text-align:center; padding-top:10px;color:red;">Sửa sản phẩm</h3>
                <div style="text-align:center; padding-bottom:10px;">Vui lòng điền đầy đủ thông tin để sửa thông tin sản phẩm.</div>
                <table style="width:600px;" >
                    <!-- <tr>
                        <td>Mã số hàng hóa</td>
                        <td><input type="text" name="MSHH"></td>
                    </tr> -->
                    <tr>
                        <td>Tên hàng hóa</td>
                        <td><input type="text" name="TenHH"></td>
                    </tr>
                    <tr>
                        <td>Giá hàng hóa</td>
                        <td><input type="text" name="Gia"> (VNĐ)</td>
                    </tr>
                    <tr>
                        <td>Số lượng hàng hóa</td>
                        <td><input type="text" name="SoLuongHang"></td>
                    </tr>
                    <tr>
                        <td>Loại nhóm</td>
                        <td><input type="text" name="GhiChu"></td>
                    </tr>
                    <tr>
                        <td>Hình</td>
                        <td><input type="file" name="Hinh"></td>
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td><textarea name="MoTaHH" id="" cols="40" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class = "but" type = "submit" name = "themsp" value = "Cập nhật"> 
                            <input class = "but" type = "reset" name = "lamlai" value = "Làm lại">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
     </div>
    
</body>
</html>