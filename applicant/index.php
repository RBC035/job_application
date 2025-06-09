
<?php include_once "topHeader.php"; ?>
 
 <div class='container-fluid mt-5'>
   <div class="row">
     <div class="col-md-3">
       <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-9"> 
             <div class="card border-0 shadow-sm rounded-2 bg-warning-2">
               <div class="card-body h-fixed-xs">
               <div class="row">
                  <div class="col-md-8">
                    <i class="bi bi-ui-checks  text-white" style="font-size:4rem"></i> 
                  </div>
                   <div class="col-md-4 mt-4"  style="font-size:2rem">
                     <?php 
                        $sql = "SELECT COUNT(*) as count FROM post";
                        $result = mysqli_query($con, $sql);
                        $count = mysqli_fetch_assoc($result)['count'];
                         echo $count;
                     ?> 
                    </div>
                    </div>
                     <p>job list</p>
               </div>
             </div>
         </div>
       </div>
     </div>

     <div class="col-md-3">
       <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-9"> 
             <div class="card border-0 shadow-sm rounded-2 bg-primary">
               <div class="card-body h-fixed-xs">
               <div class="row">
                                    <div class="col-md-8">
                                        <i class="bi bi-yelp  text-white" style="font-size:4rem"></i> 
                                     </div>
                                    <div class="col-md-4 mt-4"  style="font-size:2rem">
                                       <?php 
                                            $sql = "SELECT COUNT(*) as count FROM application WHERE appStatus ='On progress' and applicantEmail='".$_SESSION['user']."'";
                                            $result = mysqli_query($con, $sql);
                                            $count = mysqli_fetch_assoc($result)['count'];
                                            echo $count;
                                        ?> 
                                   </div>
                                  </div>
                                 <p> Pending Applications</p>
               </div>
             </div>
         </div>
       </div>
     </div>

      <div class="col-md-3">
       <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-9"> 
             <div class="card border-0 shadow-sm rounded-2 bg-danger">
               <div class="card-body h-fixed-xs">
               <div class="row">
                                    <div class="col-md-8">
                                        <i class="bi bi-check-circle-fill  text-white" style="font-size:4rem"></i> 
                                     </div>
                                    <div class="col-md-4 mt-4"  style="font-size:2rem">
                                       <?php 
                                            $sql = "SELECT COUNT(*) as count FROM application WHERE appStatus ='Confirm' and applicantEmail='".$_SESSION['user']."'";
                                            $result = mysqli_query($con, $sql);
                                            $count = mysqli_fetch_assoc($result)['count'];
                                            echo $count;
                                        ?> 
                                   </div>
                                  </div>
                                 <p> Accepted Applications</p>
                   <!-- {/* This is inside of card body  */} -->
               </div>
             </div>
         </div>
       </div>
     </div>

      <div class="col-md-3">
       <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-9"> 
             <div class="card border-0 shadow-sm rounded-2 bg-info">
               <div class="card-body h-fixed-xs">
               <div class="row">
                                    <div class="col-md-8">
                                        <i class="bi bi-x-circle-fill text-white" style="font-size:4rem"></i> 
                                     </div>
                                    <div class="col-md-4 mt-4"  style="font-size:2rem">
                                       <?php 
                                            $sql = "SELECT COUNT(*) as count FROM application WHERE appStatus ='Cancel' and applicantEmail='".$_SESSION['user']."'";
                                            $result = mysqli_query($con, $sql);
                                            $count = mysqli_fetch_assoc($result)['count'];
                                            echo $count;
                                        ?> 
                                   </div>
                                  </div>
                                 <p> Cancelled Applications</p>
               </div>
             </div>
         </div>
       </div>
     </div>
     
   </div>
 </div>
</div>
</div>
</body>
</html>