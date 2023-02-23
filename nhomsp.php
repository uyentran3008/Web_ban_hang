<?php
    require '../app/libs/connection.php';
    $sql='select * from hanghoa';
    $arr=array();
    $result=$conn->query($sql);
    while($row=mysqli_fetch_assoc($result)){
        $temp=array("MSHH"=>$row["MSHH"],"TenHH"=>$row["TenHH"],"MoTaHH"=>$row["MoTaHH"],"Gia"=>$row["Gia"],"SoLuongHang"=>$row["SoLuongHang"],"GhiChu"=>$row["GhiChu"],"Hinh"=>$row["Hinh"]);
        array_push($arr,$temp);
    }
     $conn->close();

    $dm1='dm1';
    $dm2='dm2';
    $dm3='dm3';
?>