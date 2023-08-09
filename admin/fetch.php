<?php
session_start();
include('../php/connect.php');
?>
                    <div class="container1">
                    <div class="table-responsive">
                        <?php 
                        if(isset($_POST['request'])){

                            $request = $_POST['request'];

                            $sql = "SELECT * FROM `tbcarbrands` WHERE brands = '$request'";
                            $result = mysqli_query($conn,$sql);
                            $count = mysqli_num_rows($result);
                        ?>
                         
                      <table id="myTABLE1" class="table table-responsive" width="100%">

                            <?php

                            if($count){

                            ?>

                        <thead class="text-warning">
                          <tr>
                            <th width="5%"></th>
                            <th width="50%"> Brands </th>
                            <th width="25%"> Pages </th>
                          </tr>

                          <?php
                            }else{
                                echo "Sorry! no record Found";
                            };
                          ?>
                        </thead>
                        <tbody>
                          
                        <?php 
                        
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) : ?>
                          <tr>
                          <td></td>
                          <td><?php echo $row['brands'] ?></td>
                          <td class="text-right"><?php echo $row['pages'] ?></td>
                          <td><a href="../images/<?php echo $row['img'] ?>" target="_blank"><i class="now-ui-icons ui-1_zoom-bold"></i></a></td>
                          </tr>
                          <?php endwhile;} ?>
                        </tbody>
                      </table>
                      <?php
                       $sql1 = "SELECT * FROM `tbcarbrands` WHERE brands = '$request'";
                       $result1 = mysqli_query($conn,$sql1);
                       $row1 = mysqli_num_rows($result1);
                       $pages = $row1 + 1;
                      ?>
                      <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Page</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Page <span class="text-warning">|</span> Pricelist <span class="text-warning">2023</span> </h4>
      </div>
      <div class="modal-body">
      <form class="row gy-4" action="./add_db.php" method="POST" enctype="multipart/form-data">                        
                  <div class="row p-5">
                   
                        <label>CarBrands</label>
                        <input type="text" class="form-control" id="carbrand" name="carbrand" value="<?php echo $request ?>" readonly>
                        
                        <label>IMG PriceList</label>
                        <input type="file" class="form-control " id="images" name="images" accept="image/x-png;image/gif;image/jpeg" required>
                        <input type="hidden" class="form-control"  id="pages" name="pages" value="<?php echo $pages ?>" readonly>
                  </div>
          
          <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('คุณต้องการกดยืนยันใช่หรือไม่?')">ตกลง</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
    </form>
</div>
  </div>
</div>