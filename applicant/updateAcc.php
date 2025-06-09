
<?php 
    include_once "topHeader.php"; 

    $years = [
        2024, 2023, 2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014,2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 200
    ];

    $educations = [
        "Master degree", "Advance diploma", "Degree", "Certificate", "PHD", "Ordinary level (CSE)", "Technician certificate", "Advance level (ACSE)"
    ]
?>



<div class='container-fluid mt-5'>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-0">
                                <div class="card-body">

                                         <p class="lead text-center font-f">Change academic qualification</p>

                                         <form action="../app/qualificationHandler.php" class='px-3' method="post"  enctype="multipart/form-data">
                                            <div class="input-group mb-2">
                                                <label class='font-f'>Enter institute name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control rounded-1" name="institute" value="<?php echo $_GET['in']; ?>" />
                                                <input type="hidden" class="form-control rounded-1" name="id"  value="<?php echo $_GET['id']; ?>"/>
                                            </div>
                                            <div class="input-group mb-2">
                                                <label  class='font-f'> Enter program name </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" name="program" class="form-control rounded-1"  value="<?php echo $_GET['pr']; ?>"  />
                                            </div>

                                            <div class="input-group mb-2">
                                                <label class='font-f'> Select education level</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <select name="level" class="form-control rounded-1">
                                                    <option value="<?php echo $_GET['ed']; ?>" ><?php echo $_GET['ed']; ?> </option>
                                                    <?php
                                                        foreach ($educations as $edu) 
                                                        {

                                                          echo '<option value="' . $edu . '">' . $edu . '</option>';
                                                        }
                                                    ?>
                                                    
                                                </select>
                                            </div>

                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter year </label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <select name="start" class="form-control rounded-1 me-2">
                                                    <option value="<?php echo $_GET['st']; ?>" ><?php echo $_GET['st']; ?> </option>
                                                    <?php
                                                        foreach ($years as $year) 
                                                        {

                                                          echo '<option value="' . $year . '">' . $year . '</option>';
                                                        }
                                                    ?>
                                                </select>

                                                <select name="end" class="form-control rounded-1">
                                                    <option value="<?php echo $_GET['en']; ?>" ><?php echo $_GET['en']; ?> </option>
                                                    <?php
                                                        foreach ($years as $year) 
                                                        {

                                                          echo '<option value="' . $year . '">' . $year . '</option>';
                                                        }
                                                    ?>
                                                </select>

                                            </div>
               
                                            <div class="input-group mb-2">
                                                <label class='font-f'> Enter GPA</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="tel" name="gpa" class="form-control rounded-1"  value="<?php echo $_GET['gpa']; ?>"  />
                                            </div>

                                            <div class="input-group mb-2">
                                                <label class='font-f'> Upload certificate</label> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="file" name="certificate" class="form-control rounded-1" accept="application/pdf" />

                                            </div>

                                            <div class="input-group mb-4">
                                                <input type="submit" name="updAcademic" class="form-control btn bg-info-2 rounded-1" value='Save' style="background-color:rgba(255, 93, 69, 0.6);"/>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>