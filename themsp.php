<?php
    require '../app/libs/connection.php';
    $mshh = $_POST['MSHH'];
    $tenhh = $_POST['TenHH'];
	$motahh = $_POST['MoTaHH'];
	$gia = $_POST['Gia'];
	$soluong = $_POST['SoLuongHang'];
	$ghichu = $_POST['GhiChu'];
	$file = $_FILES['Hinh'];
	$file_name = $file['name'];
	move_uploaded_file($file['tmp_name'],'./img/'.$file_name);
	
    $sql = "INSERT INTO hanghoa VALUES ('$mshh', '$tenhh','$motahh', '$gia', '$soluong', '$ghichu', '$file_name')";
	//if($conn -> query($sql)){
		
		header("location:sanpham.php");
	//} else{
	//	echo "Ket noi that bai";
	//}
	//Dong ket noi
	//$conn -> close();
?>