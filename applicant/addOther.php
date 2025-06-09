
<?php 
    include_once "topHeader.php"; 
?>



<div class='container-fluid mt-5'>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-0">
                                <div class="card-body">

                                         <p class="lead text-center font-f">Register academic qualification</p>

                                         <form action="../app/qualificationHandler.php" class='px-3' method="post"  enctype="multipart/form-data">
                                            <div class="input-group mb-3">
                                               
                                                <input type="hidden" class="form-control rounded-1" name="email"  value="<?php echo $profile['email']; ?>"/>
                                            </div>

                                            <div class="input-group mb-2">
                                                <label class='font-f'> Select attachement </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <select name="attach" class="form-control rounded-1">
                                                    <option value="null">Select attachement</option>
                                                   <option value="Applicantion Letter">Applicantion Letter</option>
                                                   <option value="CV">CV</option>
                                                    
                                                </select>
                                            </div>

                                            <div class="input-group mb-2">
                                                <label class='font-f'> Upload certificate</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="file" name="certificate" class="form-control rounded-1" accept="application/pdf" />
                                            </div>

                                            <div class="input-group mb-4">
                                                <input type="submit" name="addAttachement" class="form-control btn bg-info-2 rounded-1" value='Save' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>