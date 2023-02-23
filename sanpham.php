<?php include "../app/libs/add_user.php"?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sản phẩm</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>
    <style>
        table{
            width: 300px;
            height: 100%;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        .tr{
            width: 300px;
        }
        .td{
            border: 2px solid black;
        }
        .nav{
            padding-top: 10px;
            margin-top: 10px;
            background-color: #bfdbff;
        }
    </style>
    <body>
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
                <a href="index.php"><img class="img-fluid" src="../app/img/logo.jpg"></a>
            </div>
            <div class="col-sm-4 d-flex align-items-center justify-content-end  " >
                <input class="form-control " type="search" placeholder="Tìm kiếm sản phẩm">
                <button class="btn btn-outline-pink " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                <div>
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping  nav-icon"></i></a>
                </div>
            </div>
            
            
        </div>
        <table class="table ">
            <div class="nav justify-content-center " ><h1>Trang điểm</h1></div>
                        <tr class="tr">
                        <?php
                        require 'nhomsp.php';
                            for($i=0;$i<count($arr);$i++){
                                if($arr[$i]["GhiChu"]==$dm1){
                                    $line="
                                                <td>
                                                    <table class='td'>
                                                        <tr>
                                                            <td> 
                                                                <img src='./img/".$arr[$i]["Hinh"]."' width='300px' height='300px'>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>".$arr[$i]["TenHH"]."</td>
                                                        </tr>
                                                        <tr>
                                                            <td>".$arr[$i]["Gia"]." VNĐ</td>
                                                        </tr>
                                                        <tr>
                                                            <td><button type='submit' name='sub' >Mua hàng ngay</button></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            ";
                                    echo($line);
                                }
                            } 
                        ?>
                        </tr>
            </table>
            <table class ="table">
            <div class="nav justify-content-center " ><h1>Chăm sóc da</h1></div>
                    <tr class="tr">
                    <?php
                       require 'nhomsp.php';
                        for($i=0;$i<count($arr);$i++){
                            if($arr[$i]["GhiChu"]==$dm2){
                                $line="
                                            <td>
                                                <table class='td'>
                                                    <tr>
														<td> 
															<img src='./img/".$arr[$i]["Hinh"]."' width='300px' height='300px'>
														</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["TenHH"]."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["Gia"]." VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td><button type='submit' name='sub' >Mua hàng ngay</button></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        ";
                                echo($line);
                            }
                        } 
                    ?>
                    </tr>
        </table>
        <table class ="table">
        <div class="nav justify-content-center " ><h1>Chăm sóc tóc</h1></div>
                    <tr class="tr">
                    <?php
                       require 'nhomsp.php';
                        for($i=0;$i<count($arr);$i++){
                            if($arr[$i]["GhiChu"]==$dm3){
                                $line="
                                            <td>
                                                <table class='td'>
                                                    <tr>
														<td> 
															<img src='./img/".$arr[$i]["Hinh"]."' width='300px' height='300px'>
														</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["TenHH"]."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["Gia"]." VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td><button type='submit' name='sub' >Mua hàng ngay</button></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        ";
                                echo($line);
                            }
                        } 
                    ?>
                    </tr>
        </table>
    </div>
</body>
</html>
    