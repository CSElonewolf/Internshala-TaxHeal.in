<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hiring Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- welcome note -->
    <div class="text-center">
        <h2>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]);?></b>. Welcome to our site.</h1>
    </div>
    <!-- logout and candidate list veiwing buttons -->
    <div class="container" style="margin-left:35%;margin-top:30px;">
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <a href="http://localhost/phpmyadmin/sql.php?db=jobposting&table=jobapplicant&pos=0"
            class="btn btn-success">List of Jobs Application</a>
    </div>
    <div class="container">
<!-- Form to add new jobs and list those on the landing page -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
            style="border:2px solid black;padding:20px;margin: 20px">
            <h3 class="text-center">Add a Job</h3>
            <div class="form-group">
                <label for="userid">Job Title</label> <span class="error">*</span>
                <input type="text" class="form-control" placeholder="Job title" name="jobtitle">
            </div>
            <div class="form-group ">
                <label for="userid">Job ID</label> <span class="error">*</span>
                <input type="text" class="form-control" placeholder="Job ID" name="jobid">
            </div>
            <div class="form-group ">
                <label for="userid">Job Location</label>
                <input type="text" class="form-control" placeholder="Job Location" name="joblocation">
            </div>
            <div class="form-group ">
                <label for="userid">Job Qualification</label> <span class="error">*</span>
                <input type="text" class="form-control" placeholder="Qualifications for the Job"
                    name="jobqualification">
            </div>
            <div class="form-group ">
                <label for="userid">Job Details</label> <span class="error">*</span>
                <textarea type="text" class="form-control" placeholder="Job Details" name="jobdetails"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Add Job" name="submit">
            </div>
        </form>
    </div>

    <!-- footer -->
    <div class="text-center" style="margin-top:70vh;margin-bottom:2vh">
        <a href="index.php">Home</a>
        <span>|</span>
        <a href="contact.php">Contact Us</a>
        <span>|</span>
        <a href="register.php">Create New Account</a>
    </div>
<!-- submitting all the details and adding that on the database -->
<?php
include_once 'config.php';

if(isset($_POST['submit']))
{
$jobtitle = $_POST['jobtitle'];
$jobid = $_POST['jobid'];
$joblocation = $_POST['joblocation'];
$jobqualification = $_POST['jobqualification'];
$jobdetails = $_POST['jobdetails'];

  $sql = "INSERT INTO alljobs (jobtitle,jobid,joblocation,jobqualification,jobdetails)
  VALUES ('$jobtitle','$jobid','$joblocation','$jobqualification','$jobdetails')";


if (mysqli_query($link, $sql)) {
echo "$jobtitle Job was Added!";
 } 
 else {
  echo "Error: " . $sql . "
" . mysqli_error($link);
 }
 mysqli_close($link);
}
?>
</body>
</html>