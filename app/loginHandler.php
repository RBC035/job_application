<?php
	require_once '../inc/connection.php';

    if (isset($_POST["btnLogin"]) && $_POST["btnLogin"] === "Login") {

        if (trim($_POST['username']) == '' || trim($_POST['password']) == '') {
			
			echo "<script> alert('Please fill username or password '); </script> .<script>window.location='../pages/login.php'</script>";

		} else {

            $user = mysqli_query($con, "select * from userlogin where username = '".trim($_POST['username'])."'  ");

            if (mysqli_num_rows($user) > 0) {
                $fetch = mysqli_fetch_assoc($user);

                if (password_verify(trim($_POST['password']),  $fetch['password'] )) {
                    
                    $_SESSION['user'] = $fetch['username'];
				    $_SESSION['privillage'] = $fetch['role'];

                    if ($_SESSION['privillage'] == "ADMIN") {

                        header("location:../admin/");

                    } else if($_SESSION['privillage'] == "APPLICANT")  {
                        header("location:../applicant");

                    } else if($_SESSION['privillage'] == "ORGANIZATION"){
                        header("location:../organization");

                    }else {
                        echo "<script> alert('Unknown user please try again. '); </script> .<script>window.location='../pages/login.php'</script>";
                    }

                }else {
                    echo "<script> alert('Password was not recognized. '); </script> .<script>window.location='../pages/login.php'</script>";
                }

            }else {
                echo "<script> alert('Username was not recognized. '); </script> .<script>window.location='../pages/login.php'</script>";
            }

        }


    } else {
        header("location:../");
    }
?>