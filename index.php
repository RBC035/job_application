
<?php require_once "inc/connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Job application system</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-primary-2 shadow-sm">

        <div class="container-xxl">
            <a href="./"  class="navbar-brand">
                <span class="fw-bold text-black">JRAS </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        
                    <a href="./" class="nav-link text-black">HOME</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a href="pages/login.php" class="nav-link text-white">LOGIN</a>
                    </li>
                    <li class="nav-item ms-2 d-none d-md-inline" >
                        <a href="pages/login.php" class="btn btn-outline-info text-white">SIGN IN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class='bg-light '> 
            <div class="container-md py-3">

              <div class="card my-5 border-0 shadow-sm rounded-0 ">
                <div class="card-body">
                <table class='table table-bordered mb-3'>
                      <thead>
                        <tr>
                          <th class='text-center fw-normal'>Available jobs</th>
                        </tr>
                      </thead>
                    </table>
                    <table class='table table-bordered table-hover' id="pt-table">
                      <thead>
                        <tr>
                          <th class='fw-normal' width='90%'>Description</th>
                          <th class='fw-normal'>Post date</th>
                        </tr> 
                      </thead>

                      <tbody> 

                      <?php 
                        $today =date('Y-m-d H:i:s');
                        $post = mysqli_query($con,"select * from post where endDate >= '$today' order by postID desc");
                        while ($query = mysqli_fetch_array($post)) {

                      ?>
                
                        <tr>
                          <td>
                            <p>
                              <span class='fw-bold'>POSITION: </span>
                              <small><?php echo $query['position']; ?></small>
                            </p>
                            <p>
                              <span>Description: </span>
                              <small> <?php echo $query['description']; ?></small>
                            </p>
                            <p>
                              <span>Employer: </span>
                              <small><?php echo $query['officeName']; ?></small>
                            </p>
                          </td>
                          <td>
                            <p><?php echo $query['postDate']; ?></p>
                            <p>
                                <a href="pages/login.php" class="nav-link text-primary">Login to apply</a>
                            </p>
                          </td>
                        </tr>
                    
                    <?php } ?>

                      </tbody>
                    </table>
                </div>
              </div>
                
            </div>

            
        </section>

    <section class='bg-primary-2 h-79 w-100 shadow-sm'></section>
</body>
</html>