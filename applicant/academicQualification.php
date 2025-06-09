<?php include_once "topHeader.php"; ?>
 

            <div class='container-fluid mt-5'>
                    <div class="card border-0 shadow-sm rounded-0">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-9">
                            <p class="h4 font-f">Academic Qualifications </p>
                          </div>
                          <div class="col-md-3"> 
                            <a href="addAcc.php" class="btn btn-primary mb-3 text-black border-0 border-2" style="background-color:rgba(255, 93, 69, 0.6);">Add academic qualification</a>
                          </div>
                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th width='1%'>S/N</th>
                              <th >Institute name</th>
                              <th >Education level</th>
                              <th>Program name</th>
                              <th>Start year</th>
                              <th>End year</th>
                              <th>GPA </th>
                              <th>Certificate</th>
                              <th >Edit</th>
                              <th >Delete</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $no =  1;
                              $app = mysqli_query($con,"select * from  academicQualification where applicantEmail = '".$profile['email']."' order by gpa desc;  ");
                              while ($query = mysqli_fetch_array($app)) {
                            ?>
                              <tr>
                                      <td class='text-center'><?php echo $no; ?></td>
                                        <td><?php echo $query['instituteName']; ?> </td>
                                        <td> <?php echo $query['educationLevel']; ?></td>
                                        <td> <?php echo $query['programName']; ?></td>
                                        <td> <?php echo $query['startYear']; ?></td>
                                        <td> <?php echo $query['endYear']; ?></td>
                                        <td><?php echo $query['gpa']; ?></td>
                                        <td>
                                            <a class="btn btn-info border-0" href="cv/<?php echo $query['certificate']; ?>" target="_blank" style="background-color:rgba(255, 93, 69, 0.6);">viewCV</a>
                                        </td>
                                        <td>
                                          <a href="updateAcc.php?id=<?php echo $query['aqId']; ?>&in=<?php echo $query['instituteName']; ?>&ed=<?php echo $query['educationLevel']; ?>&pr=<?php echo $query['programName']; ?>&st=<?php echo $query['startYear']; ?>&en=<?php echo $query['endYear']; ?>&gpa=<?php echo $query['gpa']; ?>" class="btn btn-success ">Edit</a>
                                        </td>
                                        <td>
                                          <a href="../app/qualificationHandler.php?aqDelete=<?php echo $query['aqId']; ?>" class="btn btn-danger" onclick=" return confirm('Are you sure want to delete this..? ')">Delete</a>
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
   


