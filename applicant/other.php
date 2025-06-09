<?php include_once "topHeader.php"; ?>
 

            <div class='container-fluid mt-5'>
                    <div class="card border-0 shadow-sm rounded-0">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-9">
                            <p class="h4 font-f">Other attachements </p>
                          </div>
                          <div class="col-md-3"> 
                            <a href="addOther.php" class="btn btn-primary mb-3 text-black border-0 border-2" style="background-color:rgba(255, 93, 69, 0.6);">Add attachement</a>
                          </div>
                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th width='1%'>S/N</th>
                              <th >Category</th>
                              <th >Attanchement </th>
                              <th >Delete</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $no =  1;
                              $app = mysqli_query($con,"select * from  cv where applicantEmail = '".$profile['email']."'  ");

                              while ($query = mysqli_fetch_array($app)) {
                            ?>
                              <tr>
                                      <td class='text-center'><?php echo $no; ?></td>
                                        <td><?php echo $query['category']; ?> </td>
                                        <td>
                                            <a class="btn btn-info border-0" href="cv/<?php echo $query['cv']; ?>" target="_blank" style="background-color:rgba(255, 93, 69, 0.6);">viewCV</a>
                                        </td>
                                        <td>
                                          <a href="../app/qualificationHandler.php?otherDelete=<?php echo $query['cvId']; ?>" class="btn btn-danger" onclick=" return confirm('Are you sure want to delete this..? ')">Delete</a>
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
   


