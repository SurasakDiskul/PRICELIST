<?php
session_start();
include('../php/connect.php');
?>
                    <div class="container1">
                    <div class="table-responsive">
                        <?php 
                        if(isset($_POST['request'])){

                            $request = $_POST['request'];

                            $sql = "SELECT * FROM `tbimgtruck` WHERE types = '$request'";
                            $result = mysqli_query($conn,$sql);
                            $count = mysqli_num_rows($result);

                            if($count){
                              ?>
                              <div class="container">
                              <div class="row justify-content-center">
                              <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) : ?>
                              <div class="col-3 mb-5">
                              <div class="card p-3">
                                  <b class=" text-center">P. <?php echo $i++ ?></b>
                                  <a href="../imgtruck/<?php echo $row['img'] ?>" target="_blank"><img src="../imgtruck/<?php echo $row['img'] ?>" alt="" width="auto"></a><br>
                                <!-- Trigger the modal with a button -->
                                <?php
                                  $aa = $row['id'];
                                  $sql2 = "SELECT * FROM `tbimgtruck` WHERE id = '$aa'";
                                  $result2 = mysqli_query($conn,$sql2);
                                  $row2 = mysqli_fetch_assoc($result2);
                                ?> 
                                 <div class="text-center">
                              <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-warning text-dark" data-toggle="modal" data-target="#myModal<?php echo $row2['id'] ?>">Edit</button>
                                <a href="truckdelete_db.php?id=<?php echo $row2['id'] ?>" class="btn btn-danger" name onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่?')">Del</a>
                              </div>
                                 </div>
                                    <!-- Modal -->
                                    <div id="myModal<?php echo $row2['id'] ?>" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Edit Page <span class="text-warning">|</span> Pricelist <span class="text-warning">2023</span> </h4>
                                          </div>
                                          <div class="modal-body">
                                          <form class="row gy-4" action="./truckedit_db.php" method="POST" enctype="multipart/form-data">                        
                                                      <div class="row p-5">
                                                      
                                                      <div class="col-6">
                                                      <label>CarBrands</label>
                                                      <input type="text" class="form-control" id="carbrand" name="carbrand" value="<?php echo $request ?>" readonly>
                                                      </div>
                                                      <div class="col-6">
                                                      <label>Page</label>
                                                      <input type="text" class="form-control" id="pages" name="pages" value="<?php echo $row2['pages'] ?>" readonly>
                                                      </div>
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
                          
                          <?php endwhile;} } ?>
                          <div class="col-2 align-self-center">
                              <div class="card p-3">

                              <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#myModal"><b>+ Add Page</b></button>

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
                              </div>  
                            </div>
                            </div>
                          </div>
                          </div>
                       
                     