
<?php include_once "topHeader.php"; ?>

<div class='container-fluid mt-5'>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-0">
                                <div class="card-body">

                                         <p class="lead text-center font-f">Jop application</p>

                                         <form  action="../app/applicationHandler.php"  class='px-3' method="post" enctype="multipart/form-data">
                                            <div class="input-group mb-3">
                                                <input type="hidden" class="form-control rounded-1" name="email"   value="<?php echo $profile['email']; ?>"/>
                                                <input type="hidden" class="form-control rounded-1" name="postId"  value="<?php echo $_GET['id']; ?>"/>
                                            </div>
                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Select education level </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <select name="edu"  class="form-control rounded-1" >
                                                    <option value="null">Select level</option>
                                                    <option value="Under graduated">Under graduated</option>
                                                    <option value="Post graduated">Post graduated</option>
                                                    <option value="Diploma">Diploma</option>
                                                </select>
                                            </div>
               
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter GPA</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="tel" name="gpa" class="form-control rounded-1" placeholder="Enter GPA" required />
                                            </div>

                                            <div class="input-group mb-2">
                                                <label class='font-f'> Upload your CV</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="file" name="cv" class="form-control rounded-1" accept="application/pdf" />
                                            </div>
                                            <div class="input-group mb-4">
                                                <input type="submit" name="addApplication" class="form-control btn bg-info-2 rounded-1" value='Apply' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div> 

  