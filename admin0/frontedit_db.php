<?php 
if (isset($_POST['submit'])) {
     include ('../php/connect.php');
     //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ใหม่
      echo '
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
      $date1 = date("Ymd_His");
    //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
    $numrand = (mt_rand());
    $doc_file = (isset($_POST['images']) ? $_POST['images'] : '');
    $upload=$_FILES['images']['name'];
    //ตัดขื่อเอาเฉพาะนามสกุล
    $typefile = strrchr($_FILES['images']['name'],".");
    //มีการอัพโหลดไฟล์
    if($upload !='') {
    //โฟลเดอร์ที่เก็บไฟล์
    $path="../imgweb/";
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname = $numrand.$date1.$typefile;
    $path_copy=$path.$newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    if(move_uploaded_file($_FILES['images']['tmp_name'],$path_copy)){
                			//*** Delete Old File ***//	
			@unlink("../imgweb/".$_POST["oldfile"]);
            
    //sql insert
    $sql1 = "UPDATE `tbfront` SET 
        `img`='".$newname."'
        WHERE id = '".mysqli_real_escape_string($conn, $_POST['imgid'])."' ";
        if (mysqli_query($conn, $sql1)) {
            echo '<script>alert("แก้ไขข้อมูลสำเร็จ")</script>';
            header('Refresh:0; url=edit.php');
            
        } else {
            echo '<script>alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
            header('Refresh:0; url=edit.php');
        }
        }
    $conn = null; //close connect db
    } //isset
}
?>