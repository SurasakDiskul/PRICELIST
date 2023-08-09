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
          <li>
            <a href="./edit.php">
              <i class="now-ui-icons health_ambulance"></i>
              <p>Edit Page - Pricelist 2023</p>
            </a>
          </li>
          <li class="active">
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
                <h4 class="card-title">Suspension Part - เพิ่มจำนวนหน้าในสมุดราคาแยกตามอะไหล่รถยนต์
                <a href="" class="btn btn-outline-success" style="float: right;" data-toggle="modal" data-target="#pdf">เพิ่มหน้ารายการ Suspension Part</a></h4>
              </div>
                                <!-- Modal -->
                                <div id="pdf" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">เพิ่มหน้ารายการ Suspension Part</h4>
                                          </div>
                                          <div class="modal-body">
                                          <form class="row gy-4" action="./partadd_db.php" method="POST" enctype="multipart/form-data">                        
                                                      <div class="row p-5">
                                                      <?php
                                                      $sql2 = "SELECT * FROM `tbsuspension`";
                                                      $res2 = mysqli_query($conn,$sql2);
                                                      ?>
                                                      <label>Suspension Part-Page</label>
                                                      <select class="form-select" name="types" id="types" >
                                                          <option value="" disabled="" selected="">Select-SuspensionPart</option>
                                                          <?php while($row2 = mysqli_fetch_assoc($res2)) : ?>
                                                          <option value="<?php echo $row2['types'] ?>"><?php echo $row2['namethai'] ?> [<?php echo $row2['nameeng'] ?>]</option>
                                                          <?php endwhile ?>
                                                      </select>
                                                            <label>Suspension Part-Page</label>
                                                            <input type="file" class="form-control " id="imgsus" name="imgsus" accept="image/x-png;image/gif;image/jpeg" required>
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
                <?php
                $sql = "SELECT * FROM `tbsuspension`";
                $res = mysqli_query($conn,$sql);
                ?>
                        <span>เลือกยี่ห้อรถที่ต้องการ</span>
                        <div class="row">
                          <div class="col-5">
                        <select class="form-select" name="fetchval" id="fetchval" >
                            <option value="" disabled="" selected="">Select-SuspensionPart</option>
                            <?php while($row = mysqli_fetch_assoc($res)) : ?>
                            <option value="<?php echo $row['types'] ?>"><?php echo $row['namethai'] ?> [<?php echo $row['nameeng'] ?>]</option>
                            <?php endwhile ?>
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
                                                <p class="text-secondary">Please! Select-Suspensionpart</p>
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
                url:"fetch2.php",
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