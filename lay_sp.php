<?php
    require '../app/libs/connection.php';
    $sql='select * from hanghoa';
    $arr=array();
    $result=$conn->query($sql);
    while($row=mysqli_fetch_assoc($result)){
        $temp=array("MSHH"=>$row["MSHH"],"TenHH"=>$row["TenHH"],"Gia"=>$row["Gia"],"SoLuongHang"=>$row["SoLuongHang"],"Hinh"=>$row["Hinh"]);
        array_push($arr,$temp);
    }
    
     $conn->close();
?>