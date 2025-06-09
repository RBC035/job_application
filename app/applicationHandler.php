<?php
	require_once '../inc/connection.php';
    if (isset($_GET["addApplication"])) {
        $postID = $_GET["addApplication"];

       if (mysqli_num_rows(mysqli_query($con, "select * from    application where  postId = '$postID ' &&	applicantEmail = '".$_SESSION['user']."' ")) > 0) {

        echo "<script> alert('You  have ready send request to this post please look for another post or wait for response'); </script> .<script>window.location='../applicant/post.php'</script>";

       } else {

            if (mysqli_query($con, "insert into application (postId, applicantEmail) values ('$postID', '".$_SESSION['user']."' ) ")) {
                echo "<script> alert('Your application has been submited please wait for response'); </script> .<script>window.location='../applicant/application.php'</script>";
            } else {
                echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/post.php'</script>";
            }
         
       }
        
    }  else if ($_GET['appId'] ) {

        if (mysqli_query($con, "update application set 	appStatus = 'Confirm' where id = '".$_GET['appId']."'  ")) {

             echo "<script> alert('Successfully application confirmed '); </script> .<script>window.location='../organization/manageApplicant.php'</script>";
        } else {
            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../organization/manageApplicant.php'</script>";

        }
    }   else if ($_GET['appCancel'] ) {

        if (mysqli_query($con, "update application set 	appStatus = 'Cancel' where id = '".$_GET['appCancel']."'  ")) {

             echo "<script> alert('Successfully application Cancelled '); </script> .<script>window.location='../organization/manageApplicant.php'</script>";
        } else {
            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../organization/manageApplicant.php'</script>";

        }
    }
    
    else {
        echo "something wrong try again";
    }