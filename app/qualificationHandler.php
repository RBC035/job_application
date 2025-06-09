<?php 
    require_once '../inc/connection.php';

    if (isset($_POST["addAcademic"]) && $_POST["addAcademic"] === "Save") {

        if (trim($_POST['institute']) == '' || trim($_POST['program']) == '' || trim($_POST['gpa']) == '' || trim($_POST['level']) == 'null' || trim($_POST['start']) == 'null'  || trim($_POST['end']) == 'null') {
			
			echo "<script> alert('Please fill empty filled '); </script> .<script>window.location='../applicant/addAcc.php'</script>";

		} else {
            
            $targetDir = "../applicant/cv/";
            $fileName = basename($_FILES["certificate"]["name"]);

            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            if(!empty($_FILES["certificate"]["name"])) { 
                
                $allowTypes = array('docx','pdf');

                if(in_array($fileType, $allowTypes)){
                    if(move_uploaded_file($_FILES["certificate"]["tmp_name"], $targetFilePath)){
                        
                        if (mysqli_query($con, "insert into academicQualification (educationLevel,instituteName, programName, applicantEmail, startYear, endYear, gpa, 	certificate) values ('".$_POST['level']."', '".$_POST['institute']."','".$_POST['program']."', '".$_POST['email']."' , '".$_POST['start']."' , '".$_POST['end']."' , '".$_POST['gpa']."' ,'$fileName' ) ")) {

                            echo "<script> alert('Successfully education qualification added.. '); </script> .<script>window.location='../applicant/academicQualification.php'</script>";
                        } else {
                            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/addAcc.php'</script>";
                        }

                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                } else {
                      echo "<script> alert('Sorry, only  PDF & DOCX files are allowed to upload.'); </script> .<script>window.location='../applicant/addAcc.php'</script>";

                }
            } else{

                 echo "<script> alert('Please upload your certificate'); </script> .<script>window.location='../applicant/addAcc.php'</script>";

             }
        }
    }

    if (isset($_GET["aqDelete"]) ) {
        
        if (mysqli_query($con, "delete from academicQualification where aqId = '".$_GET["aqDelete"]."' ")) {
            echo "<script> alert('Successfully removed '); </script> .<script>window.location='../applicant/academicQualification.php'</script>";
        } else {
            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/academicQualification.php'</script>";
        }
    }

    if (isset($_POST["updAcademic"]) && $_POST["updAcademic"] === "Save") {
        
        if(!empty($_FILES["certificate"]["name"])) { 

            updateAcademic($con);

        } else {

            if (mysqli_query($con, "update academicQualification set  educationLevel = '".$_POST['level']."', instituteName = '".$_POST['institute']."',  programName = '".$_POST['program']."',  startYear = '".$_POST['start']."' , endYear =  '".$_POST['end']."' , gpa =  '".$_POST['gpa']."' where aqId = '".$_POST['id']."'  ")) {
                echo "<script> alert('Successfully changed  '); </script> .<script>window.location='../applicant/academicQualification.php'</script>";
            } else {
                echo "<script> alert('Somethig wrong   '); </script> .<script>window.location='../applicant/academicQualification.php'</script>";
            }
            
        }
    }

    if (isset($_POST["addProfessional"]) && $_POST["addProfessional"] === "Save") {
        
        if (trim($_POST['institute']) == '' || trim($_POST['course']) == ''  ) {
			
			echo "<script> alert('Please fill empty filled '); </script> .<script>window.location='../applicant/addProf.php'</script>";

		} else {
            
            
            $targetDir = "../applicant/cv/";
            $fileName = basename($_FILES["certificate"]["name"]);

            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            if(!empty($_FILES["certificate"]["name"])) { 
                $allowTypes = array('docx','pdf');

                 if(in_array($fileType, $allowTypes)){
                    if(move_uploaded_file($_FILES["certificate"]["tmp_name"], $targetFilePath)){
                        
                        if (mysqli_query($con, "insert into professionalQualification (instituteName,courseName, applicantEmail, startDate, endDate, certificate) values ( '".$_POST['institute']."','".$_POST['course']."', '".$_POST['email']."' , '".$_POST['start']."' , '".$_POST['end']."'  ,'$fileName' ) ")) {

                            echo "<script> alert('Successfully proffessinal qualification added.. '); </script> .<script>window.location='../applicant/professionalQualification.php'</script>";
                        } else {
                            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/addProf.php'</script>";
                        }

                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                } else {
                      echo "<script> alert('Sorry, only  PDF & DOCX files are allowed to upload.'); </script> .<script>window.location='../applicant/addProf.php'</script>";

                }

            } else{

                echo "<script> alert('Please upload your certificate'); </script> .<script>window.location='../applicant/addProf.php'</script>";

            }
        }
    }

    if (isset($_GET["pqDelete"]) ) {
        
        if (mysqli_query($con, "delete from professionalQualification where pqId = '".$_GET["pqDelete"]."' ")) {
            echo "<script> alert('Successfully removed '); </script> .<script>window.location='../applicant/professionalQualification.php'</script>";
        } else {
            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/professionalQualification.php'</script>";
        }
    }

    if (isset($_POST["updateProfessional"]) && $_POST["updateProfessional"] === "Save") {
        if(!empty($_FILES["certificate"]["name"])) { 

            updatePro($con);

        } else {

            if (mysqli_query($con, "update professionalQualification set  instituteName = '".$_POST['institute']."',  courseName = '".$_POST['course']."',  startDate  = '".$_POST['start']."' , endDate =  '".$_POST['end']."'  where pqId = '".$_POST['id']."'  ")) {
                echo "<script> alert('Successfully changed  '); </script> .<script>window.location='../applicant/professionalQualification.php'</script>";
            } else {
                echo "<script> alert('Somethig wrong   '); </script> .<script>window.location='../applicant/professionalQualification.php'</script>";
            }
            
        }
    }

    if (isset($_POST["addLanguage"]) && $_POST["addLanguage"] === "Save") {
        
        if (trim($_POST['read']) == 'null' || trim($_POST['write']) == 'null' || trim($_POST['speak']) == 'null'  ) {
			
			echo "<script> alert('Please fill empty filled '); </script> .<script>window.location='../applicant/addLanguage.php'</script>";

		} else {
           
            if (mysqli_query($con, "insert into language (speak,lRead, applicantEmail, lWrite, language) values ( '".$_POST['speak']."','".$_POST['read']."', '".$_POST['email']."' , '".$_POST['write']."' , '".$_POST['lang']."' ) ")) {

                echo "<script> alert('Successfully  added.. '); </script> .<script>window.location='../applicant/language.php'</script>";
            } else {
                echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/addLanguage.php'</script>";
            }
          
        }
    }

    if (isset($_GET["langDelete"]) ) {
        
        if (mysqli_query($con, "delete from language where Lid  = '".$_GET["langDelete"]."' ")) {
            echo "<script> alert('Successfully removed '); </script> .<script>window.location='../applicant/language.php'</script>";
        } else {
            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/language.php'</script>";
        }
    }

    if (isset($_POST["addWorking"]) && $_POST["addWorking"] === "Save") {

        if (trim($_POST['institute']) == '' || trim($_POST['superName']) == '' || trim($_POST['superEmail']) == '' || trim($_POST['job']) == ''  ) {
			
			echo "<script> alert('Please fill empty filled '); </script> .<script>window.location='../applicant/addExperience.php'</script>";

		} else {
         
            
            if (mysqli_query($con, "insert into workingExperience (organizationName,supervisorName,  applicantEmail, supervisorEmail, 	supervisorPhone, startDate, endDate, jobTitle, duty) values ( '".$_POST['institute']."','".$_POST['superName']."', '".$_POST['email']."' , '".$_POST['superEmail']."' , '".$_POST['superPhone']."' , '".$_POST['start']."','".$_POST['end']."', '".$_POST['job']."' , '".$_POST['duty']."' ) ")) {

                echo "<script> alert('Successfully  added.. '); </script> .<script>window.location='../applicant/working.php'</script>";
            } else {
                echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/addExperience.php'</script>";
            }

        }
        
    }

    if (isset($_GET["workDelete"]) ) {
        
        if (mysqli_query($con, "delete from  workingExperience where workId  = '".$_GET["workDelete"]."' ")) {
            echo "<script> alert('Successfully removed '); </script> .<script>window.location='../applicant/working.php'</script>";
        } else {
            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/working.php'</script>";
        }
    }

    if (isset($_POST["updateWorking"]) && $_POST["updateWorking"] === "Save") {
       
        if (mysqli_query($con, "update workingExperience set  organizationName = '".$_POST['institute']."',  supervisorName = '".$_POST['superName']."', supervisorEmail  = '".$_POST['superEmail']."' ,  supervisorPhone  = '".$_POST['superPhone']."',  startDate  = '".$_POST['start']."' , endDate =  '".$_POST['end']."', jobTitle  =  '".$_POST['job']."' , duty   =  '".$_POST['duty']."' where workId = '".$_POST['id']."'  ")) {
            echo "<script> alert('Successfully changed  '); </script> .<script>window.location='../applicant/working.php'</script>";
        } else {
            echo "<script> alert('Somethig wrong   '); </script> .<script>window.location='../applicant/working.php'</script>";
        }
    }

    if (isset($_POST["addReferee"]) && $_POST["addReferee"] === "Save") {

        if (trim($_POST['institute']) == '' || trim($_POST['phone']) == '' || trim($_POST['full']) == '' || trim($_POST['rEmail']) == ''  ) {
			
			echo "<script> alert('Please fill empty filled '); </script> .<script>window.location='../applicant/addReferee.php'</script>";

		} else {
            
            if (mysqli_query($con, "insert into referee (organizationName,phoneNumber,  applicantEmail, email, 	fullName) values ( '".$_POST['institute']."','".$_POST['phone']."', '".$_POST['email']."' , '".$_POST['rEmail']."' , '".$_POST['full']."' ) ")) {

                echo "<script> alert('Successfully  added.. '); </script> .<script>window.location='../applicant/referee.php'</script>";
            } else {
                echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/addReferee.php'</script>";
            }

        }
        
    }

    if (isset($_GET["refeDelete"]) ) {
        
        if (mysqli_query($con, "delete from  referee where reId  = '".$_GET["refeDelete"]."' ")) {
            echo "<script> alert('Successfully removed '); </script> .<script>window.location='../applicant/referee.php'</script>";
        } else {
            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/referee.php'</script>";
        }
    }

    if (isset($_POST["addAttachement"]) && $_POST["addAttachement"] === "Save") {
        
        if (trim($_POST['attach']) == 'null') {
			
			echo "<script> alert('Please fill empty filled '); </script> .<script>window.location='../applicant/addOther.php'</script>";

		} else {
           
            $targetDir = "../applicant/cv/";
            $fileName = basename($_FILES["certificate"]["name"]);

            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


            if(!empty($_FILES["certificate"]["name"])) { 
                
                $allowTypes = array('docx','pdf');

                if(in_array($fileType, $allowTypes)){
                    if(move_uploaded_file($_FILES["certificate"]["tmp_name"], $targetFilePath)){
                        
                        if (mysqli_query($con, "insert into cv (category, applicantEmail, cv) values ('".$_POST['attach']."', '".$_POST['email']."' ,'$fileName' ) ")) {

                            echo "<script> alert('Successfully  added.. '); </script> .<script>window.location='../applicant/other.php'</script>";
                        } else {
                            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/addOther.php'</script>";
                        }

                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                } else {
                      echo "<script> alert('Sorry, only  PDF & DOCX files are allowed to upload.'); </script> .<script>window.location='../applicant/addOther.php'</script>";

                }
            } else{

                 echo "<script> alert('Please upload your certificate'); </script> .<script>window.location='../applicant/addOther.php'</script>";

             }


        }
    }

    if (isset($_GET["otherDelete"]) ) {
        
        if (mysqli_query($con, "delete from  cv where cvId  = '".$_GET["otherDelete"]."' ")) {
            echo "<script> alert('Successfully removed '); </script> .<script>window.location='../applicant/other.php'</script>";
        } else {
            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/other.php'</script>";
        }
    }


    if (isset($_POST["addDeclare"]) && $_POST["addDeclare"] === "Declare") {

        if (isset($_POST['declare'])) {

            $academic = mysqli_num_rows(mysqli_query($con, "select * from  academicQualification where applicantEmail = '".$_SESSION['user']."' "));

            $professional = mysqli_num_rows(mysqli_query($con, "select * from  professionalQualification where applicantEmail = '".$_SESSION['user']."' "));

            $language = mysqli_num_rows(mysqli_query($con, "select * from   language where 	applicantEmail = '".$_SESSION['user']."' "));

            $referee = mysqli_num_rows(mysqli_query($con, "select * from   referee where 	applicantEmail = '".$_SESSION['user']."' "));

            $other = mysqli_num_rows(mysqli_query($con, "select * from   cv where 	applicantEmail = '".$_SESSION['user']."' "));

            if ($academic > 0 &&  $professional > 0 &&   $language > 0 &&  $referee > 0 &&  $other > 0 ) {
               
                if (mysqli_num_rows(mysqli_query($con, "select * from  Declaration where 	applicantEmail = '".$_SESSION['user']."' ")) > 0)  {
                   
                    header("location:../applicant/post.php");

                } else {
                   
                      
                    if (mysqli_query($con, "insert into Declaration (applicantEmail) values ('".$_SESSION['user']."') ")) {

                        echo "<script> alert('Successfully  declared please apply job post '); </script> .<script>window.location='../applicant/post.php'</script>";
                    } else {
                        echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='../applicant/declaration.php'</script>";
                    }
                }
            } else {
                echo "<script> alert('Please fill all details before to declare '); </script> .<script>window.location='../applicant/declaration.php'</script>";

            }
        //    echo "ticked  continue here ";
        } else {
            echo "<script> alert('Please tick '); </script> .<script>window.location='../applicant/declaration.php'</script>";

        }
    }




    else {
        echo "something wrong try again";
    }



    //  update with file

    function updateAcademic($con){
        $targetDir = "../applicant/cv/";
        $fileName = basename($_FILES["certificate"]["name"]);

        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowTypes = array('docx','pdf');

        if(in_array($fileType, $allowTypes)){
            if(move_uploaded_file($_FILES["certificate"]["tmp_name"], $targetFilePath)){
                
                if (mysqli_query($con, "update academicQualification set  educationLevel = '".$_POST['level']."', instituteName = '".$_POST['institute']."',  programName = '".$_POST['program']."',  startYear = '".$_POST['start']."' , endYear =  '".$_POST['end']."' , gpa =  '".$_POST['gpa']."', certificate = '$fileName' where aqId = '".$_POST['id']."'  ")) {
                    echo "<script> alert('Successfully changed  '); </script> .<script>window.location='../applicant/academicQualification.php'</script>";
                } else {
                    echo "<script> alert('Somethig wrong   '); </script> .<script>window.location='../applicant/academicQualification.php'</script>";
                }

            }  else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        else {
         echo "<script> alert('Sorry, only  PDF & DOCX files are allowed to upload.'); </script> .<script>window.location='../applicant/academicQualification.php'</script>";

        }


    }


    function updatePro($con){
        $targetDir = "../applicant/cv/";
        $fileName = basename($_FILES["certificate"]["name"]);

        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowTypes = array('docx','pdf');

        if(in_array($fileType, $allowTypes)){
            if(move_uploaded_file($_FILES["certificate"]["tmp_name"], $targetFilePath)){
                
                if (mysqli_query($con, "update professionalQualification set  instituteName = '".$_POST['institute']."',  courseName = '".$_POST['course']."',  startDate  = '".$_POST['start']."' , endDate =  '".$_POST['end']."'  where pqId = '".$_POST['id']."'  ")) {
                    echo "<script> alert('Successfully changed  '); </script> .<script>window.location='../applicant/professionalQualification.php'</script>";
                } else {
                    echo "<script> alert('Somethig wrong   '); </script> .<script>window.location='../applicant/professionalQualification.php'</script>";
                }

            }  else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        else {
         echo "<script> alert('Sorry, only  PDF & DOCX files are allowed to upload.'); </script> .<script>window.location='../applicant/professionalQualification.php'</script>";

        }


    }
?>