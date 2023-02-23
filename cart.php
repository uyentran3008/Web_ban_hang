<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../app/css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <h2 class="text-center">Giỏ hàng</h2>
    <div class="container"> 
    <table id="cart" class="table table-hover table-condensed"> 
    <thead> 
    <tr> 
        <th style="width:50%">Tên sản phẩm</th> 
        <th style="width:10%">Giá</th> 
        <th style="width:8%">Số lượng</th> 
        <th style="width:22%" class="text-center">Thành tiền</th> 
        <th style="width:10%"> </th> 
    </tr> 
    </thead> 
    <tbody><tr> 
    <td data-th="Product"> 
        <div class="row"> 
        <div class="col-sm-2 hidden-xs"><img src="../app/img/botrangdiem.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
        </div> 
        <div class="col-sm-10"> 
        <h4 class="nomargin">Sản phẩm 1</h4> 
        <p>Mô tả của sản phẩm 1</p> 
        </div> 
        </div> 
    </td> 
    <td data-th="Price">673.000 đ</td> 
    <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
    </td> 
    <td data-th="Subtotal" class="text-center">670.000 đ</td> 
    <td class="actions" data-th="">
        <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>
        </button>
    </td> 
    </tr> 
    <tr> 
    <td data-th="Product"> 
        <div class="row"> 
        <div class="col-sm-2 hidden-xs"><img src="../app/img/daugoi.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
        </div> 
        <div class="col-sm-10"> 
        <h4 class="nomargin">Sản phẩm 2</h4> 
        <p>Mô tả của sản phẩm 2</p> 
        </div> 
        </div> 
    </td> 
    <td data-th="Price">330.000 đ</td> 
    <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
    </td> 
    <td data-th="Subtotal" class="text-center">330.000 đ</td> 
    <td class="actions" data-th="">
        <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>
        </button>
    </td> 
    </tr> 
    </tbody><tfoot> 
    <tr class="visible-xs"> 
        <td class="text-center"><strong>Tổng 1.000.000 đ</strong>
        </td> 
    </tr> 
    <tr> 
        <td><a href="sanpham.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
        </td> 
        <td colspan="2" class="hidden-xs"> </td> 
        <td class="hidden-xs text-center"><strong>Tổng tiền 1.000.000 đ</strong>
        </td> 
        <td><a href="" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
        </td> 
    </tr> 
    </tfoot> 
    </table>
    </div>
</body>
</html>