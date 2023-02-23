<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân viên</title>
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
    <?php include"../app/libs/add_user.php" ?>
    <header class="bg-light">
        <article class="welcom">
            <div class="container ">
                <div class="row align-items-center top_header ">
                    <div class="col-lg-8 col-sm-12 ">Chào mừng đến với cửa hàng của chúng tôi</div>
                    <div class="col-lg-4 col-sm-12 d-flex justify-content-end">
                        <ul class="list-unstyled d-flex  mb-0">
                            <b>Xin chào  <i><?php echo $row['username']?></i>! </b>
                            <a href="logout.php"> Đăng xuất</a>
                        </ul>
                    </div>
                </div>
            </div> 
        </article>
    </header>
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
                        <a class="nav-link" href="./list_sp.php">Danh sách sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ql_nhanvien.php">Quản lý nhân viên</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="container">
            <form action="xuly_qlnv.php" method="post" enctype="multipart/form-data">
                <h3 style="text-align:center; padding-top:10px;color:red;">Quản lý nhân viên</h3>
                <div style="text-align:center; padding-bottom:10px;">Vui lòng điền đầy đủ thông tin để sửa thông tin sản phẩm.</div>
                <table style="width:600px;" >
                    <tr>
                        <td>Mã số nhân viên</td>
                        <td><input type="text" name="MSNV"></td>
                    </tr>
                    <tr>
                        <td>Họ tên nhân viên </td>
                        <td><input type="text" name="HoTenNV"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="Password"></td>
                    </tr>
                    <tr>
                        <td>Chức vụ</td>
                        <td><input type="text" name="ChucVu"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="DiaChi"></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td><input type="text" name="SoDienThoai"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class = "but" type = "submit" name = "update" value = "Cập nhật"> 
                            <input class = "but" type = "reset" name = "lamlai" value = "Làm lại">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</div>
</body>
</html>