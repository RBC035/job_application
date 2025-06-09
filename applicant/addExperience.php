
<?php 
    include_once "topHeader.php"; 

?>



<div class='container-fluid mt-5'>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-0">
                                <div class="card-body">

                                         <p class="lead text-center font-f">Register working experience</p>

                                         <form action="../app/qualificationHandler.php" class='px-3' method="post"  >
                                            <div class="input-group mb-2">
                                                <label class='font-f'>Enter institute / organization name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control rounded-1" name="institute"  />
                                                <input type="hidden" class="form-control rounded-1" name="email"  value="<?php echo $profile['email']; ?>"/>
                                            </div>

                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter supervisor  name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" name="superName" class="form-control rounded-1"  placeholder="Enter full name" />
                                            </div>

                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter supervisor  phone nmber </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="tel" name="superPhone" class="form-control rounded-1"   />
                                            </div>

                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter supervisor email address </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="email" name="superEmail" class="form-control rounded-1"   />
                                            </div>

                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter date </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                               <span class="me-1 mt-2"> Start: </span> <input required type="date"  class="form-control rounded-1" name="start" >
                                                <span class="m-2">End : </span> <input required type="date"  class="form-control rounded-1" name="end" >
                                            
                                            </div>
               
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter job title</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" name="job" class="form-control rounded-1"  />
                                            </div>

                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter duties </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <textarea name="duty" rows="3" class="form-control rounded-1" >

                                                </textarea>
                                                
                                            </div>

                                            <div class="input-group mb-4">
                                                <input type="submit" name="addWorking" class="form-control btn bg-info-2 rounded-1" value='Save' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>