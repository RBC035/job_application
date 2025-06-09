<?php include_once "topHeader.php"; ?>
 

            <div class='container-fluid mt-5'>
                    <div class="card mb-2 border-0 shadow-sm rounded-0">
                      <div class="card-body">
                      <div class="row">
                          <div class="col-md-9">
                            <p class="h4 font-f">Preview cv </p>
                          </div>
                      </div>
                      </div>
                    </div>


                    <div class="card border-0 shadow-sm rounded-0 mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-9">
                            <p class="h4 font-f fw-bold">Personal  information </p>
                          </div>

                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th >Full name</th>
                              <th >Email address</th>
                              <th>Phone number</th>
                            </tr>
                          </thead>

                          <tbody>
                              <tr>
                                        <td><?php echo $profile['firstName']." ".$profile['lastName']; ?> </td>
                                        <td> <?php echo $profile['email']; ?></td>
                                        <td> <?php echo $profile['phoneNumber']; ?></td>
                              </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm rounded-0 mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-9">
                            <p class="h4 font-f fw-bold">ACADEMIC QUALIFICATIONS </p>
                          </div>

                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th >Level</th>
                              <th >Institute</th>
                              <th>Program</th>
                              <th>Year</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $app = mysqli_query($con,"select * from  academicQualification where applicantEmail = '".$profile['email']."' order by gpa desc;  ");
                              while ($query = mysqli_fetch_array($app)) {
                            ?>
                              <tr>
                                        
                                        <td> <?php echo $query['educationLevel']; ?></td>
                                        <td><?php echo $query['instituteName']; ?> </td>
                                        <td> <?php echo $query['programName']; ?></td>
                                        <td> <?php echo $query['startYear']; ?></td>
                                      
                              </tr>
                            <?php  }?>

                            
                          </tbody>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>


                <div class="card border-0 shadow-sm rounded-0 mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-9">
                            <p class="h4 font-f fw-bold">LANGUAGE PROFICIENCY </p>
                          </div>

                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th >Language</th>
                              <th >Speak </th>
                              <th>Write </th>
                              <th>Read </th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $app = mysqli_query($con,"select * from  language where applicantEmail = '".$profile['email']."' ");
                              while ($query = mysqli_fetch_array($app)) {
                            ?>
                              <tr>
                                        <td><?php echo $query['language']; ?> </td>
                                        <td> <?php echo $query['speak']; ?></td>
                                        <td> <?php echo $query['lWrite']; ?></td>
                                        <td><?php echo $query['lRead']; ?></td>  
                                       
                              </tr>
                            <?php  }?>

                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm rounded-0 mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-9">
                            <p class="h4 font-f fw-bold">WORKING EXPERIENCE </p>
                          </div>

                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th >Institution / Organization</th>
                              <th >	Position </th>
                              <th>Start </th>
                              <th>End </th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $app = mysqli_query($con,"select * from  workingExperience where applicantEmail = '".$profile['email']."'  ");
                              while ($query = mysqli_fetch_array($app)) {
                            ?>
                              <tr>
                                <td><?php echo $query['organizationName']; ?> </td>
                                <td> <?php echo $query['jobTitle']; ?></td>
                                <td> <?php echo $query['startDate']; ?></td>
                                <td> <?php echo $query['endDate']; ?></td>
                              </tr>
                            <?php  }?>

                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>


                <div class="card border-0 shadow-sm rounded-0 mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-9">
                            <p class="h4 font-f fw-bold">REFEREES</p>
                          </div>

                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th >Full name</th>
                              <th >Institution / Organization</th>
                              <th >	Position </th>
                              <th>Contact </th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $app = mysqli_query($con,"select * from  referee where applicantEmail = '".$profile['email']."'  ");
                              while ($query = mysqli_fetch_array($app)) {
                            ?>
                              <tr>
                                <td><?php echo $query['fullName']; ?> </td>
                                <td><?php echo $query['organizationName']; ?> </td>
                                <td>  Head of depertment</td>
                                <td> <?php echo $query['email']; ?></td>
                              
                              </tr>
                            <?php  }?>

                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>

                


                
            </div>
        </div>
</body>
</html>  
   


