<?php
    session_start();
	if (isset($_SESSION['username'])) {
		$tenkh = $_SESSION['username'];
	} else {
		header("location:login.php");
	}
    require "../app/libs/connection.php";
    $sql = "SELECT * FROM khachhang WHERE username = '$tenkh'";
	//Truy van
	$result = $conn -> query($sql);
	//Xu ly ket qua
	$row = $result -> fetch_assoc();
?>