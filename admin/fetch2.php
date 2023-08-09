<?php
session_start();
include('../php/connect.php');
?>
                    <div class="container1">
                    <div class="table-responsive">
                        <?php 
                        if(isset($_POST['request'])){

                            $request = $_POST['request'];

                            $sql = "SELECT * FROM `tbimgsus` WHERE types = '$request'";
                            $result = mysqli_query($conn,$sql);
                            $count = mysqli_num_rows($result);

                            if($count){
                              ?>
                              <div class="container">
                              <div class="row justify-content-center">
                              <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) : ?>
                              <div class="col-3">
                                <div class="card p-5">
                                  <span class="text-center">P. <?php echo $i++ ?></span>
                                  <a href="../imgsus/<?php echo $row['img'] ?>" target="_blank"><img src="../imgsus/<?php echo $row['img'] ?>" alt="" width="auto"></a><br>
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-warning text-dark" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">Edit</button>
                                <a href="partdelete_db.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" name onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่?')">Del</a>

                                    <!-- Modal -->
                                    <div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Suspension Part - Pricelist 2023</h4>
                                          </div>
                                        <div class="modal-body">
                                          <form class="row gy-4" action="./part_db.php" method="POST" enctype="multipart/form-data">                        
                                            <div class="row p-5">
                                                <label>New!! IMG PriceList</label>
                                                  <input type="file" class="form-control" id="imgsus" name="imgsus" accept="image/x-png;image/gif;image/jpeg" required>
                                                  <input type="hidden" id="oldfile" name="oldfile" value="<?php echo $row["img"];?>">
                                                  <input type="hidden" id="imgid" name="imgid" value="<?php echo $row["id"];?>">
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
                      </div>
                    </div>
                       
                     