<!doctype html>
<html lang="en">
  <head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/global.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;1,400;1,600&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top  navbar-bg px-5">
          <div class="container-fluid ">
  
            <a class="navbar-brand " href="index.php"><img src="./img/logo.webp" width="60" height="40" alt=""></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Trang chủ </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Danh mục sản phẩm</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Trang điểm</a></li>
                    <li><a class="dropdown-item" href="">Chăm sóc da</a></li>
                    <li><a class="dropdown-item" href="">Chăm sóc tóc</a></li>
                    <li><a class="dropdown-item" href="">Khác</a></li>
                   </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="sanpham.php">Sản phẩm mới</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Khuyến mãi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Liên hệ</a>
                </li>
            
                
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                    <div class="input-group-append">
                      <button class="fa-solid fa-magnifying-glass nav-icon" type="submit"></button>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping  nav-icon"></i></a>
                </li>
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fa-solid fa-user  nav-icon"></i></a>
                   <ul class="dropdown-menu"  style="font-family: Arial, sans-serif;">
                    <li><a class="dropdown-item" href="login.php">Đăng nhập</a></li>
                    <li><a class="dropdown-item" href="register.php">Đăng ký</a></li>
                    <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                   </ul>
                  
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./img/slider-2webp.webp" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="animated bounceInLeft" style="animated-deplay:1s">Chào mừng bạn đến với cửa hàng của chúng tôi </h5>
                  <p  class="animated fadeInUp" style="animation-deplay:2s">
                    <p class="animated bounceInRight" style="animation-deplay:3s">
                      <a href="">Xem thêm</a>
                    </p>
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./img/slider-3.webp" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="animated bounceInLeft" style="animated-deplay:1s">Sản phẩm chất lượng, giá cả hợp lý</h5>
                  <p  class="animated fadeInUp" style="animation-deplay:2s">
                    <p class="animated bounceInRight" style="animation-deplay:3s">
                      <a href="">Xem thêm</a>
                    </p>
                  </p>
                </div>
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        </header>
        <main>
            <div class="product-top">
                  <h3>Các sản phẩm của chúng tôi</h3>
            </div>
          <section class="product">
            <div class="container">
              <div class="row">
                
                <div class="card col-lg-3">
                  <img class="card-img-top" src="./img/Kem_nen.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Kem Nền Catrice HD Liquid Coverage Foundation</a>
                    <h5 class="product-price">210.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                <div class="card col-lg-3" >
                  <img class="card-img-top" src="./img/son.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Son Kem Romand Milk Tea Velvet Tint Ver.2 - 4.4gr</a>
                    <h5 class="product-price">180.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                <div class="card col-lg-3" >
                  <img class="card-img-top" src="./img/phanmat.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Phấn Mắt Sivanna Colors Streamer Symphony Velvet </a>
                    <h5 class="product-price">90.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                <div class="card col-lg-3">
                  <img class="card-img-top" src="./img/ruamat.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Gel Bí Đao Rửa Mặt Cocoon Winter Melon Cleanser 310ml</a>
                    <h5 class="product-price">295.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                <div class="card col-lg-3">
                  <img class="card-img-top" src="./img/matnadatset.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Mặt Nạ Đất Sét Kiehl's Rare Earth Deep Pore</a>
                    <h5 class="product-price">800.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                <div class="card col-lg-3">
                  <img class="card-img-top" src="./img/daugoi.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Bộ Gội Xả Kích Thích Mọc Tóc HairBurst</a>
                    <h5 class="product-price">580.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                <div class="card col-lg-3">
                  <img class="card-img-top" src="./img/bongmut.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Bông Mút Nee Ni Coo Set Kitten Puff</a>
                    <h5 class="product-price">110.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                <div class="card col-lg-3">
                  <img class="card-img-top" src="./img/xitthom.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Xịt Thơm Victoria's Secret Fragrance Body Mist</a>
                    <h5 class="product-price">270.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                <div class="card col-lg-3">
                  <img class="card-img-top" src="./img/duongthe.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Dưỡng Thể Bath&Body Works Cherry Blossom</a>
                    <h5 class="product-price">290.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                <div class="card col-lg-3">
                  <img class="card-img-top" src="./img/kemduong.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Kem Dưỡng Bioderma Cicabio Soothing Repairing Cream </a>
                    <h5 class="product-price">270.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                <div class="card col-lg-3">
                  <img class="card-img-top" src="./img/chammun.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Dung Dịch Chấm Mụn Neogen Dermalogy A-Clear </a>
                    <h5 class="product-price">270.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                <div class="card col-lg-3">
                  <img class="card-img-top" src="./img/vienuong.jpg" alt="Card image cap">
                  <div class="card-body">
                    <a class="card-title"  href="#">Viên Uống Vitamin C DHC 120 Viên</a>
                    <h5 class="product-price">130.000đ</h5>
                    <a href="#" class="btn btn-white">Thêm vào giỏ hàng</a>
                  </div>
                </div>
    
                
    
              </div>
            </div>
          </section>
        
        </main>
        <footer class="bg-light">
            <div class="container">
                <p>Hệ thống phân phối mỹ phẩm chính hãng tốt nhất</p>
            </div>
        </footer>
        
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          </body>
        </html>