
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
                  <i class="bi bi-collection-fill  text-white" style="font-size:3rem"></i> 
               </div>
                 <div class="col-md-4 mt-4"  style="font-size:2rem">
                <?php 
                  $app = mysqli_query($con, "SELECT a.*, p.* FROM application a JOIN post p ON a.postId = p.postID WHERE p.officeName = '".$profile['officeName']."' ");
                 echo mysqli_num_rows($app);
                ?> 
               </div>
               </div>

               Applications
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
                  <i class="bi bi-ui-checks  text-white" style="font-size:3rem"></i> 
               </div>
                 <div class="col-md-4 mt-4"  style="font-size:2rem">
                <?php 
                  $sql = "SELECT COUNT(*) as count FROM post where officeName = '".$profile['officeName']."' ";
                  $result = mysqli_query($con, $sql);
                  $count = mysqli_fetch_assoc($result)['count'];
                  echo $count;
                ?> 
               </div>
               </div>
               Posts
                
                  
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
                  <i class="bi bi-person-circle  text-white" style="font-size:3rem"></i> 
               </div>
                 <div class="col-md-4 mt-4"  style="font-size:2rem">
                <?php 
                  $sql = "SELECT COUNT(*) as count FROM post where officeName = '".$profile['officeName']."' ";
                  $result = mysqli_query($con, $sql);
                  $count = mysqli_fetch_assoc($result)['count'];
                  echo $count;
                ?> 
               </div>
               </div>
                  Profile
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
                  <i class="bi bi-gear-fill text-white" style="font-size:3rem"></i> 
               </div>
                 <div class="col-md-4 mt-4"  style="font-size:2rem">
                <?php 
                  $sql = "SELECT COUNT(*) as count FROM post where officeName = '".$profile['officeName']."' ";
                  $result = mysqli_query($con, $sql);
                  $count = mysqli_fetch_assoc($result)['count'];
                  echo $count;
                ?> 
               </div>
               </div>
                   Settings
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