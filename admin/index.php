<!DOCTYPE html>
<html lang="en">

<head>
<?php include('./css.php') ?>
</head>

<body class="">
  <div class="wrapper ">
    <?php include('./sidebar.php') ?>
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
                <h4 class="card-title">Add Page - เพิ่มจำนวนหน้าในสมุดราคาแยกตามยี่ห้อรถยนต์</h4>
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
                url:"fetch.php",
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