
<?php 
    include_once "topHeader.php"; 
?>



<div class='container-fluid mt-5'>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-0">
                                <div class="card-body">

                                         <p class="lead text-center font-f">Change professional qualification</p>

                                         <form action="../app/qualificationHandler.php" class='px-3' method="post"  enctype="multipart/form-data">
                                            <div class="input-group mb-2">
                                                <label class='font-f'>Enter institute name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control rounded-1" name="institute"  value="<?php echo $_GET['in']; ?>" />
                                                <input type="hidden" class="form-control rounded-1" name="id"  value="<?php echo $_GET['id']; ?>"/>
                                            </div>
                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter course name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" name="course" class="form-control rounded-1" value="<?php echo $_GET['co']; ?>"  />
                                            </div>

                                           
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter date </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                               <span class="me-1 mt-2"> Start: </span> <input required type="date"  class="form-control rounded-1" value="<?php echo $_GET['st']; ?>" name="start" >
                                                <span class="m-2">End : </span> <input required type="date"  class="form-control rounded-1" name="end"  value="<?php echo $_GET['en']; ?>">
                                            
                                            </div>
               
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Upload certificate</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="file" name="certificate" class="form-control rounded-1" accept="application/pdf" />
                                            </div>

                                            <div class="input-group mb-4">
                                                <input type="submit" name="updateProfessional" class="form-control btn bg-info-2 rounded-1" value='Save' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>