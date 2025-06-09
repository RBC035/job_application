
<?php 
    include_once "topHeader.php"; 

?>



<div class='container-fluid mt-5'>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-0">
                                <div class="card-body">

                                         <p class="lead text-center font-f">Register referee</p>

                                         <form action="../app/qualificationHandler.php" class='px-3' method="post"  enctype="multipart/form-data">
                                            <div class="input-group mb-2">
                                                <label class='font-f'>Enter organization name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control rounded-1" name="institute"  />
                                                <input type="hidden" class="form-control rounded-1" name="email"  value="<?php echo $profile['email']; ?>"/>
                                            </div>
                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter phone number </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="tel" name="phone" class="form-control rounded-1"   />
                                            </div>
                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter full name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="tel" name="full" class="form-control rounded-1"   />
                                            </div>

                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter email address </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="email" name="rEmail" class="form-control rounded-1"   />
                                            </div>

                                            <div class="input-group mb-4">
                                                <input type="submit" name="addReferee" class="form-control btn bg-info-2 rounded-1" value='Save' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>