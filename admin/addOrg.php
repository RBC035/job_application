
<?php include_once "topHeader.php"; ?>

<div class='container-fluid mt-5'>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-0">
                                <div class="card-body">
                                    <?php
                                        if (@$_GET['edit']) {
                                    ?>
                                         <p class="lead text-center font-f">Change organization</p>

                                         <form action="../app/orgHandler.php" class='px-3' method="post">
                                            <div class="input-group mb-2">
                                                <label class='font-f'>Enter first name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control rounded-1" name="first"   value="<?php echo $_GET['fn']; ?>"/>
                                                <input type="hidden" class="form-control rounded-1" name="id"  value="<?php echo $_GET['edit']; ?>"/>
                                            </div>
                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter last name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" name="last" class="form-control rounded-1"  value="<?php echo $_GET['ln']; ?>"  />
                                            </div>

                                            <!-- <div class="input-group mb-2">
                                                <label  class='font-f'> Enter email address </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="email" name="email" class="form-control rounded-1"  value="<?php echo $_GET['em']; ?>"  />
                                            </div> -->
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter phone number</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="tel" name="phone" class="form-control rounded-1" value="<?php echo $_GET['pn']; ?>"  />
                                            </div>
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter office name</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" name="office" class="form-control rounded-1"  value="<?php echo $_GET['of']; ?>"  />
                                            </div>
                                            <div class="input-group mb-4">
                                                <input type="submit" name="updateOrg" class="form-control btn bg-info-2 rounded-1" value='Change' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                    <?php
                                        } else {

                                    ?>
                                    <p class="lead text-center font-f">Register organization</p>
                                        
                                        <form action="../app/orgHandler.php" class='px-3' method="post">
                                            <div class="input-group mb-2">
                                                <label class='font-f'>Enter first name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control rounded-1" name="first"  placeholder="first name"/>
                                            </div>
                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter last name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" name="last" class="form-control rounded-1" placeholder="last name"  />
                                            </div>

                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter email address </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="email" name="email" class="form-control rounded-1" placeholder="email address"  />
                                            </div>
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter phone number</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="tel" name="phone" class="form-control rounded-1" placeholder="phone number"  />
                                            </div>
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter office name</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" name="office" class="form-control rounded-1" placeholder="office name"  />
                                            </div>
                                            <div class="input-group mb-4">
                                                <input type="submit" name="addOrg" class="form-control btn bg-info-2 rounded-1" value='Register' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                        <?php     }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>