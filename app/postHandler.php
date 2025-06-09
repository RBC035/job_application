<?php
	require_once '../inc/connection.php';

    if (isset($_POST["addPost"]) && $_POST["addPost"] === "Register") {
        
        if (trim($_POST['position']) == '' || trim($_POST['amount']) == ''  || trim($_POST['end']) == 'end' || trim($_POST['desc']) == '') {
			
			echo "<script> alert('Please fill the empty space.. '); </script> .<script>window.location='../organization/addPost.php'</script>";

		} else {
            
            if (mysqli_query($con, "insert into post (position, amount, officeName, description, postDate, endDate) values ('".trim($_POST['position'])."', '".trim($_POST['amount'])."', '".trim($_POST['office'])."', '".trim($_POST['desc'])."', '".date('Y-m-d H:i:s')."', '".trim($_POST['end'])."' ) ")) {

                echo "<script> alert('Successfully post added.. '); </script> .<script>window.location='../organization/managePost.php'</script>";
            } else {
                echo "<script> alert('Something wrong please try again  '); </script> .<script>window.location='../organization/addPost.php'</script>";
            }
        }

    }  else  if (isset($_POST["updatePost"]) && $_POST["updatePost"] === "Change") {
        
        if (mysqli_query($con, "update post set  position = '".trim($_POST['position'])."',amount = '".trim($_POST['amount'])."', description= '".trim($_POST['desc'])."' where postID = '".$_POST['id']."' ")) {
            
            echo "<script> alert('Successfully changed.. '); </script> .<script>window.location='../organization/managePost.php'</script>";
        }else {
            echo "<script> alert('Something wrong please try again  '); </script> .<script>window.location='../organization/managePost.php'</script>";
        }
    }
    else {
        header("location:../organization/");
    }