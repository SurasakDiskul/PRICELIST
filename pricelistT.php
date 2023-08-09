<!-- Section Services Start -->
<?php
include('./php/connect.php');
$sql = "SELECT * FROM `tbtruck`";
$res = mysqli_query($conn,$sql);
?>
<section class="section services" id="pricelist">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Price List 2023</h2>
					<p>You can choose to view car suspension parts by brand and type of car as below.</p>
					<div class="row justify-content-center">
					<a href="./index.php#pricelist" class="btn btn-outline-secondary">ยี่ห้อรถยนต์</a>
					&nbsp;<a href="./index1.php#pricelist" class="btn btn-outline-secondary">ประเภทสินค้า</a>
					&nbsp;<a href="./indexT.php#pricelist" class="btn btn-secondary">รถบรรทุกและอื่นๆ</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row no-gutters justify-content-center">
			
				<?php while($row = mysqli_fetch_assoc($res)): ?>
			<div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./truck/truck.php?id=<?php echo $row['id'] ?>">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;">-->
				    <div class="text-center card px-1 py-2 hover-style-1 border-1 rounded-top border-bottom position-relative hover-style-1">
						<img src="./imgweb/<?php echo $row['img'] ?>" alt="">
						<h4><?php echo $row['brand'] ?></h4>
				</div>
            </a>
			</div>
				<?php endwhile ?>

            
			
		</div>
	</div>
</section>
<!-- Section Services End -->