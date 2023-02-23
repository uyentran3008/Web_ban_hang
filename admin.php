
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
    <?php include "../app/libs/add_user.php"?>
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
                        <a class="nav-link" href="index.php">Trang chủ</a>
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
            <form action="./themsp.php" method="post" enctype="multipart/form-data">
                 <h3 style="text-align:center; padding-top:10px;color:red;">Thêm sản phẩm</h3>
                    
                <table style="width:600px;" >
                    <tr>
                        <td>Mã số hàng hóa</td>
                        <td><input type="text" name="MSHH"></td>
                    </tr>
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
                            <input class = "but" type = "submit" name = "themsp" value = "Thêm sản phẩm"> 
                            <input class = "but" type = "reset" name = "lamlai" value = "Làm lại">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
     </div>
    
</body>
</html>