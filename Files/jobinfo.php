<?php
include_once('config.php');
$query ="SELECT * FROM alljobs";
$result = mysqli_query($link,$query);
?>
 <?php
            while($rows = mysqli_fetch_assoc($result))
            {
            echo "<div class='job-listing mb-4' style='border:2px solid black;padding:20px;'>";
            echo  " <h3>"  . $rows['jobtitle']." </h3>" ;
            echo  " <p>" . "Job Id:-" . $rows['jobid']." </p>" ;
            echo  " <p>" . "Job Location:-" . $rows['joblocation']." </p>" ;
            echo  " <p>" . "Job Qualification:" . $rows['jobqualification']." </p>" ;
            echo " <p>" . "Job Details:-" . $rows['jobdetails']." </p>" ;
            echo  " <br>" ;
            echo  " <a class='btn btn-primary mb-1' href='form.php'>" . "Apply" . "</a>" ;
            echo  "</div>";
            }
            ?>