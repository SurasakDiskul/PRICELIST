<!DOCTYPE html>
<html lang="en">

<head>
<?php 
include('./css.php') ;
include('../php/connect.php');
?>
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
              <p>IMG Frontend - Pricelist 2023</p>
            </a>
          </li>
          <li class="active ">
            <a href="./edit.php">
              <i class="now-ui-icons health_ambulance"></i>
              <p>Carbrands - Pricelist 2023</p>
            </a>
          </li>
          <li>
            <a href="./edit.php">
              <i class="now-ui-icons shopping_delivery-fast"></i>
              <p>CarTypes - Pricelist 2023</p>
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
                <h4 class="card-title">Carbrands - แก้ไขรูปภาพหน้าเมนูสมุดราคาแยกตามยี่ห้อรถยนต์</h4>
              </div>
              <div class="card-body ">

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
                                        <div class="table-responsive">
                          <?php 
                            $sql = "SELECT * FROM `tbfront` where type1 = 'pricelist'";
                            $result = mysqli_query($conn,$sql);
                            $count = mysqli_num_rows($result);
                          ?>
                              <div class="container">
                              <div class="row justify-content-center">
                              <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) : ?>
                              <div class="col-3">
                                <div class="card p-5">
                                  <strong class="text-center"><u> <?php echo $row['types'] ?></u></strong>
                                  <a href="../imgweb/<?php echo $row['img'] ?>" target="_blank"><img src="../imgweb/<?php echo $row['img'] ?>" alt="" width="auto"></a><br>
                                <!-- Trigger the modal with a button -->
                                <?php
                                  $aa = $row['id'];
                                  $sql2 = "SELECT * FROM `tbfront` WHERE id = '$aa'";
                                  $result2 = mysqli_query($conn,$sql2);
                                  $row2 = mysqli_fetch_assoc($result2);
                                ?>
                                <button type="button" class="btn btn-warning text-dark" data-toggle="modal" data-target="#myModal<?php echo $row2['id'] ?>">Edit</button>
                                <a href="delete_db.php?id=<?php echo $row2['id'] ?>" class="btn btn-danger" name onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่?')">Del</a>

                                    <!-- Modal -->
                                    <div id="myModal<?php echo $row2['id'] ?>" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Edit Page <span class="text-warning">|</span> Pricelist <span class="text-warning">2023</span> </h4>
                                          </div>
                                          <div class="modal-body">
                                          <form class="row gy-4" action="./edit_db.php" method="POST" enctype="multipart/form-data">                        
                                                      <div class="row p-5">
                                                            <label>New!! IMG PriceList</label>
                                                            <input type="file" class="form-control " id="images" name="images" accept="image/x-png;image/gif;image/jpeg" required>
                                                            <input type="hidden" id="oldfile" name="oldfile" value="<?php echo $row2["img"];?>">
                                                            <input type="hidden" id="imgid" name="imgid" value="<?php echo $row2["id"];?>">
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
                                      </div>
                                    </div>                          
                                  <?php endwhile; ?>
                                </div>
                              </div>
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

</body>

</html>