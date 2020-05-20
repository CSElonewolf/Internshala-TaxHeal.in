<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hiring Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <?php
// define variables and set to empty values
$fnameErr = $mailErr = $genderErr = $sociallinkErr = $lnameErr = $phnErr = "";
$addressErr = $ageErr =$collegeErr = "";
$qualificationErr =$cgpaErr =$typeErr =$answerErr = "";
$yearofexpErr =$jobidErr =$splachErr = $sociallinkErr = $resumelinkErr = "";

$fname = $mail = $gender = $sociallink = $midname = $lname = $phn = "";
$altphn = $altmail = $misc = "";
$address = $age =$college= "";
$qualification =$cgpa =$type =$answer = "";
$yearofexp =$jobid =$splach = $sociallink = $resumelink = "";
?>

  <div class="jumbotron text-center">
    <h1>Application Form</h1>
  </div>
  <!-- Job Applicant's Application form -->
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group w-50">
        <label for="userid">First Name</label> <span class="error">* <?php echo $fnameErr;?></span>
        <input type="text" class="form-control" placeholder="First Name" name="fname">

      </div>
      <div class="form-group w-50">
        <label for="userid">Middle Name</label>
        <input type="text" class="form-control" placeholder="Middle Name" name="midname">
      </div>
      <div class="form-group w-50">
        <label for="userid">Last Name</label> <span class="error">* <?php echo $lnameErr;?></span>
        <input type="text" class="form-control" placeholder="Last Name" name="lname">
      </div>
      <div class="form-group w-50">
        <label for="userid">Phone Number</label> <span class="error">* <?php echo $phnErr;?></span>
        <input type="text" class="form-control" placeholder=" Phone Number" name="phn">
      </div>
      <div class="form-group w-50">
        <label for="userid">Alternate Number</label>
        <input type="text" class="form-control" placeholder="Alternate Number" name="altphn">
      </div>
      <div class="form-group w-50">
        <label for="userid">Email Id</label> <span class="error">* <?php echo $mailErr;?></span>
        <input type="email" class="form-control" placeholder="Email Id" name="mail">
      </div>
      <div class="form-group w-50">
        <label for="userid">Alternate Email Id</label>
        <input type="text" class="form-control" placeholder="Alternate Email Id" name="altmail">
      </div>
      <div class="form-group w-50">
        <label for="userid">Address</label> <span class="error">* <?php echo $addressErr;?></span>
        <textarea class="form-control" rows="5" placeholder="Address" name="address"></textarea>
      </div>
      <div class="form-group w-50">
        <label for="userid">Age</label> <span class="error">* <?php echo $ageErr;?></span>
        <input type="text" class="form-control" placeholder="Age" name="age">
      </div>
      <div class="form-group w-50">
        <label for="userid">Gender</label> <span class="error">* <?php echo $genderErr;?></span>

        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio5" name="gender" value="Male"
            <?php if (isset($gender) && $gender=="Male") echo "checked";?>>
          <label class="custom-control-label" for="customRadio5">Male</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio6" name="gender" value="Female"
            <?php if (isset($gender) && $gender=="Female") echo "checked";?>>
          <label class="custom-control-label" for="customRadio6">Female</label>
        </div>
      </div>
      <div class="form-group w-50">
        <label for="userid">Last College/University Attended</label> <span class="error">*
          <?php echo $collegeErr;?></span>
        <input type="text" class="form-control" placeholder="Last College/University Attended" name="college">
      </div>
      <div class="form-group w-50">
        <label for="userid">Highest Qualification</label> <span class="error">* <?php echo $qualificationErr;?></span>
        <input type="text" class="form-control" placeholder="Highest Qualification" name="qualification">
      </div>
      <div class="form-group w-50">
        <label for="userid">CGPA/Grade/Percentage in the last attended Institution</label>
        <span class="error">* <?php echo $fnameErr;?></span>
        <input type="text" class="form-control" name="cgpa"
          placeholder="CGPA/Grade/Percentage in the last attended Institution">
      </div>
      <div class="form-group w-50">
        <label for="userid">You are?</label> <span class="error">* <?php echo $typeErr;?></span>

        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio" name="type" value="Fresher"
            <?php if (isset($type) && $type=="Fresher") echo "checked";?>>
          <label class="custom-control-label" for="customRadio">Fresher</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio2" name="type" value="Experienced"
            <?php if (isset($type) && $type=="Experienced") echo "checked";?>>
          <label class="custom-control-label" for="customRadio2">Experienced</label>
        </div>
      </div>
      <div class="form-group w-50">
        <label for="userid">Years of Experience</label> <span class="error">* <?php echo $yearofexpErr;?></span>
        <input type="text" class="form-control" placeholder="Years of Experience" name="yearofexp">
      </div>
      <div class="form-group w-50">
        <label for="userid">Post Applied for(ID only)</label> <span class="error">* <?php echo $jobidErr;?></span>
        <input type="text" class="form-control" placeholder="Post Applied for(ID only)" name="jobid">
      </div>
      <div class="form-group w-50">
        <label for="userid">Willing to Re-locate</label> <span class="error">* <?php echo $answerErr;?></span>

        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio3" name="answer" value="Yes"
            <?php if (isset($answer) && $answer=="Yes") echo "checked";?>>
          <label class="custom-control-label" for="customRadio3">Yes</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="customRadio4" name="answer" value="No"
            <?php if (isset($answer) && $answer=="No") echo "checked";?>>
          <label class="custom-control-label" for="customRadio4">No</label>
        </div>
      </div>
      <div class="form-group w-50">
        <label for="userid">Special Achievement</label> <span class="error">* <?php echo $splachErr;?></span>
        <input type="text" class="form-control" placeholder="Special Achievement" name="splach">
      </div>
      <div class="form-group w-50">
        <label for="userid">LinkedIn/Github Profile Link</label> <span class="error">*
          <?php echo $sociallinkErr;?></span>
        <input type="text" class="form-control" placeholder="LinkedIn/Github Profile Link" name="sociallink">
      </div>
      <div class="form-group w-50">
        <label for="userid">Link of Your Resume</label> <span class="error">* <?php echo $resumelinkErr;?></span>
        <input type="text" class="form-control" placeholder="Link of Your Resume" name="resumelink">
      </div>
      <div class="form-group w-50">
        <label for="userid">Anything Else You Would Like to Mention</label>
        <input type="text" class="form-control" placeholder="Anything Else You Would Like to Mention" name="misc">
      </div>
      <input type="submit" class="btn btn-primary mt-4" value="Submit Application" name="submit">
    </form>
  </div>

  <!-- footer -->
  <div class="text-center" style="margin-top:30vh">
    <a href="contact.php">Contact Us</a>
    <span>|</span>
    <a href="index.php">Home</a>
  </div>
  <!-- Adding all the details of the job applicant to the database -->
  <?php
include_once 'config.php';

if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$midname = $_POST['midname'];
$lname = $_POST['lname'];
$phn = $_POST['phn'];
$altphn = $_POST['altphn'];
$mail = $_POST['mail'];
$altmail = $_POST['altmail'];
$address = $_POST['address'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$college = $_POST['college'];
$qualification = $_POST['qualification'];
$cgpa = $_POST['cgpa'];
$type = $_POST['type'];
$yearofexp = $_POST['yearofexp'];
$jobid = $_POST['jobid'];
$answer = $_POST['answer'];
$splach = $_POST['splach'];
$sociallink = $_POST['sociallink'];
$resumelink = $_POST['resumelink'];
$misc = $_POST['misc'];

  $sql = "INSERT INTO jobapplicant (firstname, midname,lastname,phone,altphone,mail,altmail,address,age,gender,college,qualification,cgpa,type,yearofexp,jobid,answer,splach,sociallink,resumelink,misc)
  VALUES ('$fname','$midname','$lname','$phn','$altphn','$mail','$altmail','$address','$age','$gender','$college','$qualification','$cgpa','$type','$yearofexp','$jobid','$answer','$splach','$sociallink','$resumelink','$misc')";

  
if (mysqli_query($link, $sql)) {
  echo "Thank You,$fname Your Application was submitted Successfully!";
 } else {
  echo "Error: " . $sql . "
" . mysqli_error($link);
 }
 mysqli_close($link);
}
?>
</body>

</html>