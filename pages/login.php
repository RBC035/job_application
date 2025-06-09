<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Job application system</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-primary-2 shadow-sm">

        <div class="container-xxl">
            <a href="../"  class="navbar-brand">
                <span class="fw-bold text-black">JRAS </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        
                    <a href="../" class="nav-link text-black">HOME</a>
                    </li>
                    <!-- <li class="nav-item d-md-none">
                        <a href="./" class="nav-link text-white">LOGIN</a>
                    </li>
                    <li class="nav-item ms-2 d-none d-md-inline" >
                        <a href="./" class="btn btn-outline-info text-white">SIGN IN</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluidh h-fixed bg-light pt-5">
          <div class="row pt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="card border-0 shadow-sm rounded-0">
                <div class="card-body">
                  <p class="lead text-center card-title">JRAS Login form</p>
                  <form class='p-3' action="../app/loginHandler.php" method="post">
                    <div class="input-group mb-3">
                    
                      <input  type="text" name="username" class="form-control rounded-1" required placeholder='Enter username' autofocus >
                    </div>
                    <div class="input-group mb-3">
       
                      <input type="password" name="password" class="form-control rounded-1" required placeholder='Enter password'  >
                         
                    </div>
                    <div class="input-group mb-3">
                      <input type="submit" name="btnLogin" value="Login"  class="form-control btn btn-info rounded-1">
                    </div>

                    <div class="input-group mb-3">
                      <p><a  href="createAccount.php" class='text-none'>Create account</a> </p>
                    
                    </div>
                  </form>
                </div> 
              </div>
            </div>
          </div>
        </div>
    <section class='bg-primary-2 h-79 w-100 shadow-sm'></section>
</body>
</html>