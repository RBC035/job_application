<?php include_once "topHeader.php"; ?>
 

            <div class='container-fluid mt-5'>
                    <div class="card border-0 shadow-sm rounded-0">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="h4 font-f">Referees</p>
                          </div>
                          <div class="col-md-2"> 
                            <a href="addReferee.php" class="btn btn-primary mb-3 text-black border-0 border-2" style="background-color:rgba(255, 93, 69, 0.6);">Add referee</a>
                          </div>
                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th width='1%'>S/N</th>
                              <th >Full name</th>
                              <th>Office name</th>
                              <th>Phone number </th>
                              
                              <th >Email address</th>
                              <th >Delete</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $no =  1;
                              $app = mysqli_query($con,"select * from  referee where applicantEmail = '".$profile['email']."'  ");
                              while ($query = mysqli_fetch_array($app)) {
                            ?>
                              <tr>
                                <td class='text-center'><?php echo $no; ?></td>
                                <td><?php echo $query['fullName']; ?> </td>
                                <td><?php echo $query['organizationName']; ?> </td>
                                <td> <?php echo $query['phoneNumber']; ?></td>
                                <td> <?php echo $query['email']; ?></td>
                                <!-- <td> Edit</td> -->
                                <td>
                                  <a href="../app/qualificationHandler.php?refeDelete=<?php echo $query['reId']; ?>" class="btn btn-danger" onclick=" return confirm('Are you sure want to delete this..? ')">Delete</a>
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
   

