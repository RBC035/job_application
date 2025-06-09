<?php
	require_once '../inc/connection.php';

    if (isset($_POST["addOrg"]) && $_POST["addOrg"] === "Register") {
        if (trim($_POST['first']) == '' || trim($_POST['last']) == '' || trim($_POST['email']) == '' || trim($_POST['phone']) == '' || trim($_POST['office']) == '') {
			
			echo "<script> alert('Please fill the empty space.. '); </script> .<script>window.location='../admin/addOrg.php'</script>";

		} else {
            
            if (mysqli_num_rows(mysqli_query($con,"select * from organization where email = '".trim($_POST['email'])."' "))> 0) {
               
                echo "<script> alert('User is already exit..  '); </script> .<script>window.location='../admin/addOrg.php'</script>";

            } else {
                if (mysqli_query($con, "insert into organization (email,firstName, lastName, phoneNumber, officeName)  values ('".trim($_POST['email'])."', '".trim($_POST['first'])."', '".trim($_POST['last'])."', '".trim($_POST['phone'])."', '".trim($_POST['office'])."')")) {


                     mysqli_query($con, "insert into userlogin values ('".trim($_POST['email'])."', '".password_hash(123456, PASSWORD_DEFAULT)."', 'ORGANIZATION' ) ");


                    echo "<script> alert('Successfully registered.. '); </script> .<script>window.location='../admin/manageOrganization.php'</script>";
                } else {
                    echo "<script> alert('Something wrong please try again  '); </script> .<script>window.location='../admin/addOrg.php'</script>";
                }

            }
        }
    }  else  if (isset($_POST["updateOrg"]) && $_POST["updateOrg"] === "Change") {

        if ($_SESSION['privillage'] == "ADMIN") {

           if (mysqli_query($con, "update organization set  firstName = '".trim($_POST['first'])."',lastName = '".trim($_POST['last'])."', phoneNumber= '".trim($_POST['phone'])."', officeName= '".trim($_POST['office'])."' where id = '".$_POST['id']."' ")) {
            
                echo "<script> alert('Successfully changed.. '); </script> .<script>window.location='../admin/manageOrganization.php'</script>";
            }else {
                echo "<script> alert('Something wrong please try again  '); </script> .<script>window.location='../admin/manageOrganization.php'</script>";
            }

        }else {

            if (mysqli_query($con, "update organization set  firstName = '".trim($_POST['first'])."',lastName = '".trim($_POST['last'])."', phoneNumber= '".trim($_POST['phone'])."', officeName= '".trim($_POST['office'])."' where id = '".$_POST['id']."' ")) {
            
                echo "<script> alert('Successfully changed.. '); </script> .<script>window.location='../organization/myPrfile.php'</script>";
            }else {
                echo "<script> alert('Something wrong please try again  '); </script> .<script>window.location='../organization/myPrfile.php'</script>";
            }
        }

        
        
        
    }
    else {
        header("location:../");
    }