
<?php include_once "topHeader.php"; ?>
 

            <div class='container-fluid mt-5'>
                    <div class="card border-0 shadow-sm rounded-0">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="h4 font-f">Working experiences</p>
                          </div>
                          <div class="col-md-2"> 
                            <a href="addExperience.php" class="btn btn-primary mb-3 text-black border-0 border-2" style="background-color:rgba(255, 93, 69, 0.6);">Add experience</a>
                          </div>
                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th width='1%'>S/N</th>
                              <th >Organization / Institute name </th>
                              <th >Job title</th>
                              <th>Start date</th>
                              <th>End date  </th>
                              
                              <th >Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $no =  1;
                              $app = mysqli_query($con,"select * from  workingExperience where applicantEmail = '".$profile['email']."'  ");
                              while ($query = mysqli_fetch_array($app)) {
                            ?>
                              <tr>
                                <td class='text-center'><?php echo $no; ?></td>
                                <td><?php echo $query['organizationName']; ?> </td>
                                <td> <?php echo $query['jobTitle']; ?></td>
                                <td> <?php echo $query['startDate']; ?></td>
                                <td> <?php echo $query['endDate']; ?></td>
                                <td>
                                     <a href="updateWorking.php?id=<?php echo $query['workId']; ?>&in=<?php echo $query['organizationName']; ?>&spn=<?php echo $query['supervisorName']; ?>&spe=<?php echo $query['supervisorEmail']; ?>&spp=<?php echo $query['supervisorPhone']; ?>&st=<?php echo $query['startDate']; ?>&en=<?php echo $query['endDate']; ?>&job=<?php echo $query['jobTitle']; ?>&duty=<?php echo $query['duty']; ?>" class="btn btn-success ">Edit</a>
                                </td>
                                <td>
                                   <a href="../app/qualificationHandler.php?workDelete=<?php echo $query['workId']; ?>" class="btn btn-danger" onclick=" return confirm('Are you sure want to delete this..? ')">Delete</a>
                                </td>
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
   