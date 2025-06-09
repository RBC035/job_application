
<?php 
    include_once "topHeader.php"; 

    $languages = [
        "Very good", "Good", "Fair"
    ]
?>



<div class='container-fluid mt-5'>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-0">
                                <div class="card-body">

                                         <p class="lead text-center font-f">Register language</p>

                                         <form action="../app/qualificationHandler.php" class='px-3' method="post"  enctype="multipart/form-data">
                                            <div class="input-group mb-3">
                                                <input type="hidden" class="form-control rounded-1" name="email"  value="<?php echo $profile['email']; ?>"/>
                                            </div>

                                            <div class="input-group mb-2">
                                                <label class='font-f'> Select language </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                              
                                                <select name="lang" class="form-control rounded-1 me-2">
                                                    <option value="null">Select language</option>
                                                    <option value="Swahili">Swahili</option>
                                                    <option value="English">English</option>
                                                   
                                                </select>
                                            </div>

                                            <div class="input-group mb-3">
                                               <span class="me-2 mt-2"> Read: </span>
                                                <select name="read" class="form-control rounded-1 me-2">
                                                    <option value="null">Select here ..</option>
                                                    <?php
                                                        foreach ($languages as $language) 
                                                        {

                                                          echo '<option value="' . $language . '">' . $language . '</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="input-group mb-3">
                                               <span class="me-2 mt-2"> Write: </span>
                                                <select name="write" class="form-control rounded-1 me-2">
                                                    <option value="null">Select here ..</option>
                                                    <?php
                                                        foreach ($languages as $language) 
                                                        {

                                                          echo '<option value="' . $language . '">' . $language . '</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>


                                            <div class="input-group mb-3">
                                               <span class="me-2 mt-2"> Speak: </span>
                                                <select name="speak" class="form-control rounded-1 me-2">
                                                    <option value="null">Select here ..</option>
                                                    <?php
                                                        foreach ($languages as $language) 
                                                        {

                                                          echo '<option value="' . $language . '">' . $language . '</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            
                                            <div class="input-group mb-4">
                                                <input type="submit" name="addLanguage" class="form-control btn bg-info-2 rounded-1" value='Save' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>