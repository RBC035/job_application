
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
                                         <p class="lead text-center font-f">Change post</p>

                                         <form action="../app/postHandler.php" class='px-3' method="post">
                                            <div class="input-group mb-2">
                                                <label class='font-f'>Enter position </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                             <input type="text" class="form-control rounded-1" name="position"  value="<?php echo $_GET['pos']; ?>"/> 
                                                <input type="hidden" class="form-control rounded-1" name="id"  value="<?php echo $_GET['edit']; ?>"/>
                                            </div>
                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter amount </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                 <input type="number" name="amount" class="form-control rounded-1"  value="<?php echo $_GET['am']; ?>"  />

                                            </div>

                                            <!-- <div class="input-group mb-2">
                                                <label class='font-f'> Enter end date</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="datetime" name="end" class="form-control rounded-1" value="<?php echo $_GET['en']; ?>"  />
                                            </div> -->
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter post description</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <textarea name="desc" class="form-control rounded-1" rows="4">
                                                    <?php echo $_GET['desc']; ?>
                                                </textarea>
                                            </div>
                                            <div class="input-group mb-4">
                                                <input type="submit" name="updatePost" class="form-control btn bg-info-2 rounded-1" value='Change' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                    <?php
                                        } else {

                                    ?>
                                    <p class="lead text-center font-f">Register post</p>
                                        
                                        <form action="../app/postHandler.php" class='px-3' method="post">
                                            <div class="input-group mb-2">
                                                <label class='font-f'>Enter position </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control rounded-1" name="position"  placeholder="position"/>
                                            </div>
                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter amount </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="number" name="amount" class="form-control rounded-1" placeholder="amount"  />

                                                <input type="hidden" name="office" class="form-control rounded-1" value="<?php echo $profile['officeName']; ?>"  />
                                            </div>

                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter end date</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="date" name="end" class="form-control rounded-1"  />
                                            </div>

                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter post description</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <textarea name="desc" class="form-control rounded-1" rows="4"></textarea>
                                            </div>

                                            <div class="input-group mb-4">
                                                <input type="submit" name="addPost" class="form-control btn bg-info-2 rounded-1" value='Register' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                        <?php     }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>