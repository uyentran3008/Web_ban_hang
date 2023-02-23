<?php
	session_start();
	unset($_SESSION['HoTenKH']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng xuất</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<style>
    body, html {
    height: 100%;
    margin: 0;
    }

    .bg {
    /* The image used */
    background-image: url("../app/img/back.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    h2,h4{
        text-align: center;
        
    }
</style>
</head>
<body>

<div class="bg">
    <h2 style="padding-top: 30vh;">Bạn đã đăng xuất</h2><br>
	<h4 style="padding-top: 50px;">Bấm vào <a href = "login.php">ĐĂNG NHẬP</a> để đăng nhập lại. 
    Hoặc về <a href = "index.php">TRANG CHỦ</a></h4>
    <marquee style="padding-top: 20px; font-size: 30px; color: rgb(228, 105, 245);" >Cảm ơn quý khách đã ghé cửa hàng của chúng tôi.</marquee>
</div>

</body>
</html>
