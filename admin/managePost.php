<?php include_once "topHeader.php"; ?>

            <div class='container-fluid mt-5'>
                    <div class="card border-0 shadow-sm rounded-0">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="h4 font-f">Manage post </p>
                          </div>
                        </div>
                        
                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th width='1%'>S/N</th>
                              <th >Position</th>
                              <th width='2%'>Amount</th>
                              <th width='50%'>Description</th>
                              <th>Office name</th>
                              <th>Date</th>
                              <!-- <th width='8%'>Edit</th>
                              <th width='8%'>Delete</th> -->
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $no =  1;
                              $post = mysqli_query($con,"select * from post  order by postID desc");
                              while ($query = mysqli_fetch_array($post)) {
                            ?>
                              <tr>
                                      <td class='text-center'><?php echo $no; ?></td>
                                        <td><?php echo $query['position']; ?> </td>
                                        <td> <?php echo $query['amount']; ?></td>
                                        <td> <?php echo $query['description']; ?></td>
                                        <td><?php echo $query['officeName']; ?></td>
                                        <td> <?php echo $query['postDate']; ?></td>
                                        <!-- <td class='text-center'>
                                          <button class='btn btn-success' >Edit</button>

                                        </td>
                                        <td class='text-center'>
                                          <button class='btn btn-danger' >Delete</button>
                                        </td> -->
                              </tr>
                            <?php $no +=1; }?>

                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
                
            </div>
        </div>
</body>
</html>