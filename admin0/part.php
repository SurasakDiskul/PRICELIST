<!doctype html>
<html class="no-js" lang="en">
<?php include ('../php/connect.php') ?>
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
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-agenda"></i><span>Edit - Pricelist</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="./edit.php">Car Brand</a></li>
                                    <li><a href="index3.html">Suspension Part</a></li>
                                    <li><a href="index3.html">Truck And Other</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-gallery"></i><span>Design Website</span></a>
                                <ul class="collapse">
                                    <li><a href="index.html">IMG FrontEnd</a></li>
                                    <li><a href="index.html">Car Brand</a></li>
                                    <li><a href="index2.html">Type Car</a></li>
                                    <li><a href="index3.html">Suspension Part</a></li>
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
                <h4 class="card-title">Suspension Part - เพิ่มจำนวนหน้าในสมุดราคาแยกตามอะไหล่รถยนต์
              </div>
              <div class="card-body ">
              <div id="filter">
                <?php
                $sql = "SELECT * FROM `tbsuspension`";
                $res = mysqli_query($conn,$sql);
                ?>
                        <span>เลือกอะไหล่รถยนต์ที่ต้องการ</span>
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
                    
                    <div class="container1">
                    <div class="table-responsive">
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
