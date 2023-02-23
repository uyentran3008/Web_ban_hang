<html>
	<head>
		<title>Đăng ký</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../app/css/reg.css">
	</head>
	<body>
	<?php
		require_once("../app/libs/connection.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			$address = $_POST["address"];
  			$email = $_POST["email"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $address == "" || $email == "") {
				   echo "<script type='text/javascript'>alert('Bạn vui lòng nhập đủ thông tin!');</script>";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from khachhang where username='$username'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo "<script type='text/javascript'>alert('Tài khoản đã tồn tại!');</script>";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO khachhang(
	    					username,
	    					password,
	    					address,
						    email
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$address',
	    					'$email'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
						header("location:login.php");
				   		echo "<script type='text/javascript'>alert('Chúc mừng bạn đã đăng ký thành công!');</script>";
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
				<h1 class="card-title text-center mb-5 fw-light fs-5">Đăng Ký</h1>
				<form action="register.php" method="post">

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInputUsername" name="username" placeholder="username">
						<label for="floatingInputUsername">Username</label>
					</div>

					<div class="form-floating mb-3">
						<input type="password" class="form-control" id="floatingInputPassword" name="pass" placeholder="Password">
						<label for="floatingInputPassword">Password</label>
					</div>

					<hr>

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingAddress" name="address" placeholder="Địa chỉ">
						<label for="floatingAddress">Địa chỉ</label>
					</div>

					<div class="form-floating mb-3">
						<input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Email">
						<label for="floatingEmail">Email</label>
					</div>

					<div class="d-grid mb-2">
						<button class="btn btn-lg btn-primary btn-submit fw-bold text-uppercase" name="btn_submit" type="submit">Đăng ký</button>
					</div>

					<a class="d-block text-center mt-2 small" href="login.php">Bạn đã có tài khoản? Đăng nhập</a>
				</form>
			</div>
		</div>
	  </div>
	</div>
	</body>
	</html>