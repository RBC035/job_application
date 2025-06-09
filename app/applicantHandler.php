<?php
	require_once '../inc/connection.php';
    if (isset($_POST["btnCreate"]) && $_POST["btnCreate"] === "Register account") {
        if (trim($_POST['first']) == '' || trim($_POST['last']) == '' || trim($_POST['email']) == '' || trim($_POST['phone']) == '' ) {
			
			echo "<script> alert('Please fill the empty space.. '); </script> .<script>window.location='../pages/createAccount.php'</script>";

		} else {
            
            if ((mysqli_num_rows(mysqli_query($con,"select * from organization where email = '".trim($_POST['email'])."' "))> 0) || (mysqli_num_rows(mysqli_query($con,"select * from applicant where email = '".trim($_POST['email'])."' "))> 0)) {
               
                echo "<script> alert('User is already exit..  '); </script> .<script>window.location='../pages/createAccount.php'</script>";

            } else {

                if (mysqli_query($con, "insert into applicant (email,firstName, lastName, phoneNumber)  values ('".trim($_POST['email'])."', '".trim($_POST['first'])."', '".trim($_POST['last'])."', '".trim($_POST['phone'])."' ) ")) {


                     mysqli_query($con, "insert into userlogin values ('".trim($_POST['email'])."', '".password_hash(9090, PASSWORD_DEFAULT)."', 'APPLICANT' ) ");

                    $username = $_POST['email'];

                    echo "<script> alert('Successfully registered your username is   $username and password is 9090 '); </script> .<script>window.location='../pages/login.php'</script>";
                } else {
                    echo "<script> alert('Something wrong please try again  '); </script> .<script>window.location='../pages/createAccount.php'</script>";
                }

            }
        }
    } else {
        header("location:../");
    }