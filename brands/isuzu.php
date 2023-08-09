<?php
include('../php/connect.php');
$sql = "SELECT * FROM `tbcarbrands` WHERE brands = 'isuzu' ORDER BY `tbcarbrands`.`pages` ASC";
$res = mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
  <head>
	<?php include('./css.php') ?>
	<style>
		.bg-2 {
  background: url("../bg.jpg") no-repeat;
  background-size: cover;
}

.bg-3 {
  background: url("../bg.jpg") no-repeat;
  background-size: cover;
}

.bg-4 {
  background: url("../bg.jpg") no-repeat;
  background-size: cover;
}
	</style>
</head>
<body>
	<?php include('./header.php') ?>

<div class="main-wrapper ">
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
          <ul class="list-inline mb-0">
            <li class="list-inline-item"><a href="" class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Pricelist</a></li>
            <li class="list-inline-item"><span class="text-white">|</span></li>
            <li class="list-inline-item"><a href="#" class="text-color text-uppercase text-sm letter-spacing">2023</a></li>
          </ul>
           <h1 class="text-lg text-white mt-2">ISUZU</h1>
      </div>
    </div>
  </div>
</section>

<!-- Section Course Start -->
<section class="section course bg-gray">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>ISUZU</h2>
					<p></p>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
    <?php while ($row = mysqli_fetch_assoc($res)) : ?>
					<img src="../images/<?php echo $row['img'] ?>" alt="" class="img-fluid">
          <?php endwhile ?>
			</div>

		</div>
	</div>
</section>
<!-- Section Course ENd -->

<?php include('./footer.php') ?>

   <!-- 
    Essential Scripts
    =====================================-->


   <!-- Main jQuery -->
   <script src="../plugins/jquery/jquery.js"></script>
   <!-- Bootstrap 4.3.1 -->
   <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
   <!-- Slick Slider -->
   <script src="../plugins/slick-carousel/slick/slick.min.js"></script>
   <!--  Magnific Popup-->
   <script src="../plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
   <!-- Form Validator -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
   <!-- Google Map -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
   <script src="../plugins/google-map/gmap.js"></script>

   <script src="../js/script.js"></script>

   </body>

   </html>