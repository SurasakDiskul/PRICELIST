<!doctype html>
<html class="no-js" lang="en">

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
                            <li class="active">
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
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-gallery"></i><span>Design Website</span></a>
                                <ul class="collapse">
                                    <li><a href="./imgfront.php">IMG FrontEnd</a></li>
                                    <li><a href="./carbrand.php">Car Brand</a></li>
                                    <li><a href="./suspension.php">Suspension Part</a></li>
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
          
          
            <iframe src="https://cjlinfo.com/pricelist/" width="100%" height="976px" border="0" frameborder="0" style = "border:0px;overflow:hidden;"></iframe>
         
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
