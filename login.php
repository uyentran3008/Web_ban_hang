<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../app/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		session_start();
		require_once('../app/libs/connection.php');
		
		if(isset($_POST["btn_submit"])){
			$user = $_POST["username"];
			$pass = $_POST["pass"];
			$_SESSION['username'] = $user;
			$sql = "SELECT * FROM khachhang WHERE username= '$user' && password = '$pass'";
			$kt=mysqli_query($conn, $sql);
			if($user =='admin' && $pass == '123'){
				header("location: admin.php");
			}else{
				if(mysqli_num_rows($kt)  > 0){
					$_SESSION['username'] = $user;	
					header("location: sanpham.php");
				}
			}
		}
	?>

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
			<div class="card-img-left d-none d-md-flex">
				<!-- Background image for card set in CSS! -->
			</div>
			<div class="card-body p-4 p-sm-5">
				<h1 class="card-title text-center mb-5 fw-light fs-5 ">Đăng Nhập</h1>
				<form action="login.php" method="post">

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInputUsername" name="username" placeholder="username">
						<label for="floatingInputUsername">Username</label>
					</div>

					<div class="form-floating mb-3">
						<input type="password" class="form-control" id="floatingInputPassword" name="pass" placeholder="Password">
						<label for="floatingInputPassword">Password</label>
					</div>

					<hr>

					<div class="d-grid mb-2">
						<button class="btn btn-lg btn-primary btn-submit fw-bold text-uppercase" name="btn_submit" type="submit">Đăng nhập</button>
					</div>

					<a class="d-block text-center mt-2 small" href="../app/register.php">Bạn chưa có tài khoản? Đăng Ký</a>
				</form>
			</div>
		</div>
	  </div>
    </div>
</body>
</html>