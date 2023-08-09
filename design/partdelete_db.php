<?php 
    include('../php/connect.php');
    if(!isset($_GET['id'])){
        header("location: ./");
        exit();
    }else{
        $sql = "DELETE FROM `tbcarbrands` WHERE id = '".mysqli_real_escape_string($conn, $_GET['id'])."' ";
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("ลบข้อมูลเสร็จเรียบร้อย")</script>';
            header('Refresh:0; url= ./part.php');
        } else {
            echo '<script> alert("ลบข้อมูลไม่สำเร็จ")</script>';
            header('Refresh:0; url= ./part.php');
        }
    }
    mysqli_close($conn);
?>