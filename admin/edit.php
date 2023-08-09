<!DOCTYPE html>
<html lang="en">

<head>
<?php include('./css.php') ;
include('../php/connect.php')?>
</head>

<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <img src="../logo.png" alt="">
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class="now-ui-icons media-1_album"></i>
              <p>Add Page - Pricelist 2023</p>
            </a>
          </li>
          <li  class="active ">
            <a href="./edit.php">
              <i class="now-ui-icons health_ambulance"></i>
              <p>Edit Page - Pricelist 2023</p>
            </a>
          </li>
          <li>
            <a href="./part.php">
              <i class="now-ui-icons shopping_cart-simple"></i>
              <p>Suspension Part - Pricelist 2023</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <?php include('./navbar.php') ?>
      <div class="panel-header-sm py-5 px-5">
        <h3> PriceList 2023</h3>

      </div>
      
      <div class="content">
        
        <div class="row">
          <div class="col-md-12">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h4 class="card-title">Edit Page - เพิ่มจำนวนหน้าในสมุดราคาแยกตามยี่ห้อรถยนต์
                <a href="" class="btn btn-outline-secondary" style="float: right;" data-toggle="modal" data-target="#pdf">ไฟล์ PDF สมุดราคา (แบบเต็ม)</a></h4>
              </div>
                                <!-- Modal -->
                                <div id="pdf" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                                <?php
                                                $sql = "SELECT * FROM `tbpdf`";
                                                $res = mysqli_query($conn,$sql);
                                                $row = mysqli_fetch_assoc($res);
                                                ?>
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">ไฟล์ PDF สมุดราคา (แบบเต็ม)</h4>
                                          </div>
                                          <div class="modal-body">
                                          <form class="row gy-4" action="./editpdf_db.php" method="POST" enctype="multipart/form-data">                        
                                                      <div class="row p-5">
                                                            <label>Pricelist PDF_File</label>
                                                            <input type="file" class="form-control " id="pdf_file" name="pdf_file" accept="image/x-png;image/gif;image/jpeg" required>
                                                            <input type="hidden" id="oldfile" name="oldfile" value="<?php echo $row["pdf_file"];?>">
                                                          </div>
                                              
                                              <div class="modal-footer">
                                                <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('คุณต้องการกดยืนยันใช่หรือไม่?')">ตกลง</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                        </form>
                                        </div>
                                        </div>
                                      </div>
                                    </div>
              <div class="card-body ">
              <div id="filter">
                        <span>เลือกยี่ห้อรถที่ต้องการ</span>
                        <div class="row">
                          <div class="col-5">
                        <select class="form-select" name="fetchval" id="fetchval" >
                            <option value="" disabled="" selected="">Select-CarBrands</option>
                            <option value="chevroletกระบะ">Chevrolet - กระบะ</option>
                            <option value="chevroletเก๋ง">Chevrolet - เก๋ง</option>
                            <option value="daihatsu">Daihatsu</option>
                            <option value="europecar">EuropeCar - รถยุโรป</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="isuzu">Isuzu</option>
                            <option value="kia">KIA</option>
                            <option value="mazdafordกระบะ">Mazda/Ford - กระบะ</option>
                            <option value="mazdafordเก๋ง">Mazda/Ford - เก๋ง</option>
                            <option value="mg">MG</option>
                            <option value="mitsubishiกระบะ">Mitsubishi - กระบะ</option>
                            <option value="mitsubishiเก๋ง">Mitsubishi - เก๋ง</option>
                            <option value="nissanกระบะ">Nissan - กระบะ</option>
                            <option value="nissanเก๋ง">Nissan - เก๋ง</option>
                            <option value="proton">Proton</option>
                            <option value="subaru">Subaru</option>
                            <option value="suzukiกระบะ">Suzuki - กระบะ</option>
                            <option value="suzukiเก๋ง">Suzuki - เก๋ง</option>
                            <option value="tata">TATA</option>
                            <option value="ตงฟง">ตงฟง - DSFK</option>
                            <option value="toyotaกระบะ">Toyota - กระบะ</option>
                            <option value="toyotaเก๋ง">Toyota - เก๋ง</option>
                        </select>
                       
                        </div>
                        </div>
                    </div>
                    

                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                <div class="col-lg-12">
                                    <div class="row ">
                                    <div class="col-12 grid-margin">
                                        <br>
                                        <h4 class="card-title"></h4>
                                    <div class="container1">
                                        <div class="table table-responsive">
                                                <p class="text-secondary">Please! Select-CarBrands</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include('./footer.php') ?>
    </div>
  </div>
 <?php include('./js.php') ?>
 <script type="text/javascript">
        $(document).ready(function(){
            $("#fetchval").on('change',function(){
            var value = $(this).val();
            console.log(value); 

            $.ajax({
                url:"fetch1.php",
                type:"POST",
                data: 'request=' + value ,
                beforeSend:function(){
                    $(".container1").html("<span>Working...</span>");
                },
                success:function(data){
                    $(".container1").html(data);
                }
                });
            });
        });
    </script>
</body>

</html>