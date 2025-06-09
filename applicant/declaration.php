<?php include_once "topHeader.php"; ?>
 

            <div class='container-fluid mt-5'>
                    <div class="card border-0 shadow-sm rounded-0">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-9">
                            <p class="h4 font-f fw-bold">Declarations  </p>
                          </div>
                         
                          <form action="../app/qualificationHandler.php"  method="post">
                             <input  type="checkbox" name="declare" value="Declare"> 
                             <span class="font-f">I am <?php echo ucwords($profile['firstName']." ".$profile['lastName']);  ?> I declare that the information provided is complete and correct to the best of my knowledge. I understand that any false information supplied could lead to my application being disqualified or my discharge if I am appointed.</span>
                             <br>

                             <input class="btn btn-primary mt-2" type="submit" value="Declare" name="addDeclare">
                          </form>
                      </div>
                    </div>
                </div>
                
            </div>
        </div>
</body>
</html>  
   


