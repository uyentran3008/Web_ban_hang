 <?php include "../app/libs/connection.php"; ?>
 <?php include "../app/lay_sp.php"; ?>
 <?php
    
    $mshh = $_GET['id'];
    echo $mshh;
    $sql =  "Delete from hanghoa where MSHH = $mshh";
    mysqli_query($conn, $sql);
    header('location: list_sp.php');
?>

