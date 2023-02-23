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
<body>
<?php include "../app/libs/add_user.php" ?>
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
                    <li class="nav-item">
                        <a class="nav-link" href="./list_sp.php">Danh sách sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ql_nhanvien.php">Quản lý nhân viên</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div>
            <table class="table table-bordered">
                <tr>
                    <th>MSSP</th>
                    <th>Tên SP</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Ảnh minh họa</th>
                    <th colspan="2" style="text-align:center;">Ghi chú</th>
                </tr>
                <?php
                    include "./lay_sp.php";
                    for($i=0;$i<count($arr);$i++){
                        $line="<tr>
                                    <td>".$arr[$i]["MSHH"]."</td>
                                    <td>".$arr[$i]["TenHH"]."</td>
                                    <td>".$arr[$i]["Gia"]."</td>
                                    <td>".$arr[$i]["SoLuongHang"]."</td>
                                    <th><img src='./img/".$arr[$i]["Hinh"]."' width='100px' height='100px'></th>
                                    <td>
                                        <button type='submit' name='s_submit' method='post'><a href='./xoa.php?id=".$arr[$i]["MSHH"]."'>Xóa</a></button>
                                    </td>
                                    <td>
                                        <button type='submit' name='s_submit'><a href='./suasp.php?id=".$arr[$i]["MSHH"]."'>Sửa</a></button>
                                    </td>
                                </tr>";
                        echo($line);
                    } 
                ?>
            </table>
        </div>
    </div>
</body>
</html>