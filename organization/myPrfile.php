
<?php include_once "topHeader.php"; ?>

<div class='container-fluid mt-5'>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-0">
                                <div class="card-body">

                                         <p class="lead text-center font-f">My account</p>

                                         <form action="../app/orgHandler.php" class='px-3' method="post">
                                            <div class="input-group mb-2">
                                                <label class='font-f'>Enter first name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control rounded-1" name="first"   value="<?php echo $profile['firstName']; ?>"/>
                                                <input type="hidden" class="form-control rounded-1" name="id"  value="<?php echo $profile['id']; ?>"/>
                                            </div>
                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter last name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" name="last" class="form-control rounded-1"  value="<?php echo $profile['lastName']; ?>"  />
                                            </div>
               
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter phone number</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="tel" name="phone" class="form-control rounded-1" value="<?php echo $profile['phoneNumber']; ?>"  />
                                            </div>
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter office name</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" name="office" class="form-control rounded-1"  value="<?php echo $profile['officeName']; ?>"  />
                                            </div>
                                            <div class="input-group mb-4">
                                                <input type="submit" name="updateOrg" class="form-control btn bg-info-2 rounded-1" value='Change' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>