<!doctype html>
<html lang="en">
  <head>
  <?php 
	include('./css.php');
	include('./php/connect.php');
	$sql = "SELECT * FROM `tbfront` where types = 'Pricelist (380*350)'";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);

	$sql1 = "SELECT * FROM `tbfront` where types = 'Measurement (380*350)'";
	$res1 = mysqli_query($conn,$sql1);
	$row1 = mysqli_fetch_assoc($res1);

	$sql2 = "SELECT * FROM `tbfront` where types = 'OwnBrand (380*350)'";
	$res2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_assoc($res2);

	$sql3 = "SELECT * FROM `tbfront` where types = 'Ads (160*600)'";
	$res3 = mysqli_query($conn,$sql3);
	$row3 = mysqli_fetch_assoc($res3);
	?>
	<style>
		.slider {
  background: url("./bg.jpg") no-repeat 0% 30%;
  background-size: cover;
  padding: 180px 0px;
}
ul {

  list-style-type: none;
  margin-top: 150px;
  margin-left: 50px;
  padding: 0;
  width: 25%;
  position: fixed;
  height: 100%;
  overflow: auto;
}
	</style>
</head>
<body>
	<?php include('./header.php') ?>

<div class="main-wrapper ">
<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<span class="h6 d-inline-block mb-4 subhead text-uppercase">333CJTHAILAND</span>
				<h1 class="text-uppercase text-white mb-5">The leading manufacturer <br><span class="text-color">of suspension part 333&cj</span><br>price list 2023</h1>
			
			</div>
		</div>
	</div>
</section>
<section class="mt-80px">
<div style='clear:left'></div>

<div class='tw_float_ads_main_Wrap_Both' id='tw_float_ads_main_Wrap' style='float: right; right:1%; z-index: 98765;' >
    <div class='tw_float_ads_close'> 
     <span id='tw_close_button' style='float: right' class='tw_close_button' onclick='document.getElementById("tw_float_ads_main_Wrap").style.display="none"'>
      <i id='TW_Close_Button' class="fa fa-window-close" aria-hidden="true" title='Close The Advertisment'></i>  
     </span>
 </div>
 <div class='Ad2 AdBanner' id='Ad2'>
           
<!-- Paste your Right Advertisement Code Below this Comment-->

<a href="https://www.tiktok.com/@333cjthailand?lang=th-TH" target="_blank"><img src="./imgweb/<?php echo $row3['img'] ?>" alt=""></a>

<!--Paste your Right Advertisement Code Above this Comment -->

 </div>
   <span class='TW_credits' style='float: right; font-size: 12px;'><a style='text-decoration: none!important; color: #000;' href="http://www.trendingwidgets.com/2017/04/how-to-add-floating-rectangular-ads.html"></a></span>
  <div style='clear:right'></div></div>
 
 <div style='clear:both'></div>      
 
 
 <div class="container">
		<div class="row ">
			
			<div class="col-lg-4 col-md-6">
			<a href="./firstpage.php">
				<div class="card border-0 rounded-top border-bottom position-relative">
					<span class="number"></span>
						<img src="./imgweb/<?php echo $row['img'] ?>" alt="">				
					</div>
			</div>
			</a>

			
			<div class="col-lg-4 col-md-6">
			<a href="./measurement.php">
				<div class="card border-0 rounded-top">
					<span class="number"></span>
					<img src="./imgweb/<?php echo $row1['img'] ?>" alt="">	
				</div>
			</div>
			</a>

			
			<div class="col-lg-4 col-md-6">
			<a href="./ownbrands.php">
				<div class="card border-0 rounded-top">
					<span class="number"></span>
					<img src="./imgweb/<?php echo $row2['img'] ?>" alt="">	
				</div>
			</div>
			</a>
		</div>
	</div>
</section>
	<?php include('./pricelist1.php') ?>
	<?php //include('./more.php') ?>
	<?php include('./footer.php') ?>


<!-- Section Footer Scripts -->
   </div>

   <!-- 
    Essential Scripts
    =====================================-->


   <!-- Main jQuery -->
   <script src="plugins/jquery/jquery.js"></script>
   <!-- Bootstrap 4.3.1 -->
   <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!-- Slick Slider -->
   <script src="plugins/slick-carousel/slick/slick.min.js"></script>
   <!--  Magnific Popup-->
   <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
   <!-- Form Validator -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
   <!-- Google Map -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
   <script src="plugins/google-map/gmap.js"></script>

   <script src="js/script.js"></script>

   </body>

   </html>
   
