<?php 
	include('./php/connect.php');
	$sql = "SELECT * FROM `tbfront` where types = 'Pricelist'";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);

	$sql1 = "SELECT * FROM `tbfront` where types = 'Toyota'";
	$res1 = mysqli_query($conn,$sql1);
	$row1 = mysqli_fetch_assoc($res1);

	$sql2 = "SELECT * FROM `tbfront` where types = 'Isuzu'";
	$res2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_assoc($res2);

	$sql3 = "SELECT * FROM `tbfront` where types = 'Mitsubishi'";
	$res3 = mysqli_query($conn,$sql3);
	$row3 = mysqli_fetch_assoc($res3);

	$sql4 = "SELECT * FROM `tbfront` where types = 'Nissan'";
	$res4 = mysqli_query($conn,$sql4);
	$row4 = mysqli_fetch_assoc($res4);

	$sql5 = "SELECT * FROM `tbfront` where types = 'Mazda'";
	$res5 = mysqli_query($conn,$sql5);
	$row5 = mysqli_fetch_assoc($res5);

	$sql6 = "SELECT * FROM `tbfront` where types = 'Hyundai'";
	$res6 = mysqli_query($conn,$sql6);
	$row6 = mysqli_fetch_assoc($res6);

	$sql7 = "SELECT * FROM `tbfront` where types = 'Chevrolet'";
	$res7 = mysqli_query($conn,$sql7);
	$row7 = mysqli_fetch_assoc($res7);

	$sql8 = "SELECT * FROM `tbfront` where types = 'Suzuki'";
	$res8 = mysqli_query($conn,$sql8);
	$row8 = mysqli_fetch_assoc($res8);

	$sql9 = "SELECT * FROM `tbfront` where types = 'Daihatsu'";
	$res9 = mysqli_query($conn,$sql9);
	$row9 = mysqli_fetch_assoc($res9);

	$sql10 = "SELECT * FROM `tbfront` where types = 'Tata'";
	$res10 = mysqli_query($conn,$sql10);
	$row10 = mysqli_fetch_assoc($res10);

	$sql11 = "SELECT * FROM `tbfront` where types = 'KIA'";
	$res11 = mysqli_query($conn,$sql11);
	$row11 = mysqli_fetch_assoc($res11);

	$sql12 = "SELECT * FROM `tbfront` where types = 'Proton'";
	$res12 = mysqli_query($conn,$sql12);
	$row12 = mysqli_fetch_assoc($res12);

	$sql13 = "SELECT * FROM `tbfront` where types = 'MG'";
	$res13 = mysqli_query($conn,$sql13);
	$row13 = mysqli_fetch_assoc($res13);

	$sql14 = "SELECT * FROM `tbfront` where types = 'DFSK'";
	$res14 = mysqli_query($conn,$sql14);
	$row14 = mysqli_fetch_assoc($res14);

	$sql15 = "SELECT * FROM `tbfront` where types = 'Subaru'";
	$res15 = mysqli_query($conn,$sql15);
	$row15 = mysqli_fetch_assoc($res15);

	$sql16 = "SELECT * FROM `tbfront` where types = 'Honda'";
	$res16 = mysqli_query($conn,$sql16);
	$row16 = mysqli_fetch_assoc($res16);

	$sql17 = "SELECT * FROM `tbfront` where types = 'Ford'";
	$res17 = mysqli_query($conn,$sql17);
	$row17 = mysqli_fetch_assoc($res17);

	$sql18 = "SELECT * FROM `tbfront` where types = 'Europe'";
	$res18 = mysqli_query($conn,$sql18);
	$row18 = mysqli_fetch_assoc($res18);

	$sql19 = "SELECT * FROM `tbpdf`";
	$res19 = mysqli_query($conn,$sql19);
	$row19 = mysqli_fetch_assoc($res19);
	?>

<section class="section services" id="pricelist">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Price List 2023</h2>
					<p>You can choose to view car suspension parts by brand as below.</p>
					<div class="row justify-content-center">
					<a href="./index.php#pricelist" class="btn btn-secondary">ยี่ห้อรถยนต์</a>
					&nbsp;<a href="./index1.php#pricelist" class="btn btn-outline-secondary">ประเภทสินค้า</a>
					&nbsp;<a href="./indexT.php#pricelist" class="btn btn-outline-secondary">รถบรรทุกและอื่นๆ</a>
					</div>
				</div>
				
			</div>
		</div>

		<div class="row no-gutters justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./pdf_file/<?php echo $row19['pdf_file'] ?>" target="_blank">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;">-->
				    <div class="text-center card px-1 py-2 hover-style-1 border-1 rounded-top border-bottom position-relative hover-style-1">
						<img src="./imgweb/<?php echo $row['img'] ?>" alt="">
						<h4>PriceList 2023</h4>
				</div>
            </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./toyota.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					    <img src="./imgweb/<?php echo $row1['img'] ?>" alt="">
						<h4>Toyota</h4>
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./brands/isuzu.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row2['img'] ?>" alt="">
					<h4>Isuzu</h4>
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./nissan.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row4['img'] ?>" alt="">	
					<h4>Nissan</h4>			
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./mitsubishi.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row3['img'] ?>" alt="">
					<h4>Mitsubishi</h4>
					</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./brands/honda.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row16['img'] ?>" alt="">
					<h4>Honda</h4>
							</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./mazda-ford.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row5['img'] ?>" alt="">
					<h4>Mazda</h4>
				</div>
                </a>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./mazda-ford.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row17['img'] ?>" alt="">
					<h4>Ford</h4>
				</div>
                </a>
			</div>

            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./brands/hyundai.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row6['img'] ?>" alt="">
					<h4>Hyundai</h4>
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./chevrolet.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row7['img'] ?>" alt="">
					<h4>Chevrolet</h4>
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./suzuki.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row8['img'] ?>" alt="">
					<h4>Suzuki</h4>
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./brands/daihatsu.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row9['img'] ?>" alt="">
					<h4>Daihatsu</h4>
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./brands/tata.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row10['img'] ?>" alt="">
					<h4>Tata</h4>
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./brands/kia.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row11['img'] ?>" alt="">
					<h4>KIA</h4>
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./brands/proton.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row12['img'] ?>" alt="">
					<h4>Proton</h4>
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./brands/mg.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row13['img'] ?>" alt="">
					<h4>MG</h4>
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./brands/dfsk.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row14['img'] ?>" alt="">
					<h4>DFSK</h4>
				</div>
                </a>
			</div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./brands/subaru.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row15['img'] ?>" alt="">
					<h4>Subaru</h4>
				</div>
                </a>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 p-3">
            <a href="./brands/europe.php">
                <!--<img src="./logo.png" alt="" class="img-fluid" style="width:100%;height:150px;">-->
				    <div class="text-center  card px-1 py-2 hover-style-1">
					<img src="./imgweb/<?php echo $row18['img'] ?>" alt="">
					<h4>Europe Car</h4>
				</div>
                </a>
			</div>
			
		</div>
	</div>
</section>
<!-- Section Services End -->