<?php include_once "topHeader.php"; ?>

            <div class='container-fluid mt-5'>
            <div class="card my-5 border-0 shadow-sm rounded-0 ">
                <div class="card-body">
                <table class='table table-bordered mb-3'>
                      <thead>
                        <tr>
                          <th class='text-center fw-normal'>Available jobs</th>
                        </tr>
                      </thead>
                    </table>
                    <table class='table table-bordered table-hover' id="pt-table">
                      <thead>
                        <tr>
                          <th class='fw-normal' width='90%'>Description</th>
                          <th class='fw-normal'>Post date</th>
                        </tr> 
                      </thead>

                      <tbody>

                      <?php 
                        $today =date('Y-m-d H:i:s');
                        $post = mysqli_query($con,"select * from post where endDate >= '$today' order by postID desc");
                        while ($query = mysqli_fetch_array($post)) {

                      ?>
                
                        <tr>
                          <td>
                            <p>
                              <span class='fw-bold'>POSITION: </span>
                              <small><?php echo $query['position']; ?></small>
                            </p>
                            <p> 
                              <span>Description: </span>
                              <small> <?php echo $query['description']; ?></small>
                            </p>
                            <p>
                              <span>Employer: </span>
                              <small><?php echo $query['officeName']; ?></small>
                            </p>
                          </td>
                          <td>
                            <p><?php echo $query['postDate']; ?></p>
                            <p>
                                <a href="../app/applicationHandler.php?addApplication=<?php  echo  $query['postID']; ?>" class="btn btn-info border-0 " style="background-color:rgba(255, 93, 69, 0.6);">Apply</a>
                            </p>
                          </td>
                        </tr>
                    
                    <?php } ?>

                      </tbody>
                    </table>
                </div>
              </div>
                </div>
                
            </div>
        </div>
</body>
</html>