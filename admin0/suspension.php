<!doctype html>
<html class="no-js" lang="en">
<?php include('../php/connect.php')?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AdminPanel - Pricelist</title>
<?php include('./css.php'); ?>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
            <div class="logo">
                    <img src="../T-11.png" alt="logo" width="100px">
                    <h4 class="user-name dropdown-toggle">AdminPanel - Pricelist</h4>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav> 
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="index.php" aria-expanded="true"><i class="ti-desktop"></i><span>Pricelist 2023</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-agenda"></i><span>Edit - Pricelist</span></a>
                                <ul class="collapse">
                                    <li><a href="./edit.php">Car Brand</a></li>
                                    <li><a href="./part.php">Suspension Part</a></li>
                                    <li><a href="./truck.php">Truck And Other</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-gallery"></i><span>Design Website</span></a>
                                <ul class="collapse">
                                    <li><a href="./imgfront.php">IMG FrontEnd</a></li>
                                    <li><a href="./carbrand.php">Car Brand</a></li>
                                    <li class="active"><a href="./suspension.php">Suspension Part</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header-area">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Pricelist 333</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Pricelist 333</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="../T-11.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle text-dark" data-toggle="dropdown">Admin Chowjung<i class="fa fa-angle-down text-dark"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- overview area start -->
                <div class="row p-3">
        <div class="col-12">
          
          
       
        <div class="content">
        
        <div class="row">
          <div class="col-md-12">
            <div class="card card-tasks">
              <div class="card-header ">
                <h4 class="card-title">Suspension Part - แก้ไขรูปภาพหน้าเมนูสมุดราคาแยกตามอะไหล่รถยนต์</h4>
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
$sql = "SELECT * FROM `tbsuspension`";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
?>
<div class="container">
<div class="row justify-content-center">
<?php
$i = 1;
while ($row = mysqli_fetch_assoc($result)) : ?>
<div class="col-3 mb-5">
  <div class="card p-5">
    <strong class="text-center"><u> <?php echo $row['namethai'] ?></u></strong>
    <a href="../imgweb/<?php echo $row['img'] ?>" target="_blank"><img src="../imgweb/<?php echo $row['img'] ?>" alt="" width="auto"></a><br>
  <!-- Trigger the modal with a button -->
  <?php
    $aa = $row['id'];
    $sql2 = "SELECT * FROM `tbsuspension` WHERE id = '$aa'";
    $result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($result2);
  ?>
  <button type="button" class="btn btn-warning text-dark" data-toggle="modal" data-target="#myModal<?php echo $row2['id'] ?>">Edit</button>

      <!-- Modal -->
      <div id="myModal<?php echo $row2['id'] ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Page <span class="text-warning">|</span> Pricelist <span class="text-warning">2023</span> </h4>
            </div>
            <div class="modal-body">
            <form class="row gy-4" action="./partedit_db.php" method="POST" enctype="multipart/form-data">                        
                        <div class="row p-5">
                              <label>New!! IMG PriceList</label>
                              <input type="file" class="form-control " id="imgweb" name="imgweb" accept="image/x-png;image/gif;image/jpeg" required>
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
        <footer>
            <div class="footer-area">
                <p>© Copyright 2023. All right reserved. Create  by Team IT & ERP.</p>
            </div>
        </footer>
    </div>
<?php include('./js.php'); ?>

</body>

</html>
