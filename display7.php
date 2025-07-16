<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Description</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'connect.php'?>
<?php include 'header.php'?>
<?php
$id=$_GET['details_id'];
$sql="Select * from `jobs` where jobid=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$jobid=$row['jobid'];       
$job_title=$row['job_title'];
$loc=$row['loc'];
$date_posted=$row['date_posted'];
?>
<?php
$ids=$_GET['details_id'];
$sqlr="Select * from `Jobs_details` where jobid=$ids";
$results=mysqli_query($con,$sqlr);
$rows=mysqli_fetch_assoc($results);       
$Description=$rows['Description'];
$Salary=$rows['Salary'];
$Qualification=$rows['Qualification'];
$Exp_needed=$rows['Exp_needed'];
$skills=$rows['skills'];
$CompanyID=$rows['CompanyID'];
?>

<?php
$idsr=$_GET['details_id'];
$sqlrs="SELECT * FROM `companies` INNER JOIN `Jobs_details` ON companies.cmp_id=jobs_details.CompanyID where companies.cmp_id=$CompanyID and Jobs_details.jobid=$idsr";
$resultsr=mysqli_query($con,$sqlrs);
$rowsr=mysqli_fetch_assoc($resultsr);
$cmp_id=$rowsr['cmp_id'];
$email=$rowsr['email'];
$phone_no=$rowsr['phone_no'];
$cmp_name=$rowsr['cmp_name'];
$established_in=$rowsr['established_in'];
?>



<div class="jumbotron">
    <div class="container">
     <h1 class="display-4 text-center text-primary"><?php echo $job_title ?></h1>
     <p class="lead"><?php echo $Description?></p>
     <p><b>Company name: </b><?php echo $cmp_name ?></p>
     <p><b>Established in: </b><?php echo $established_in ?></p>
     <p><b>location : </b><?php echo $loc ?></p>
     <p><b>Date Posted : </b><?php echo $date_posted ?></p>
     <p><b>Salary per month : </b><?php echo $Salary ?></p>
     <p><b>Qualification needed : </b><?php echo $Qualification ?></p>
     <p><b>Experience needed : </b><?php echo $Exp_needed ?></p>
     <p><b>Skills required : </b><?php echo $skills ?></p>
     <p><b>contact email: </b><?php echo $email ?></p>
     <p><b>Contact number: </b><?php echo $phone_no ?></p>
     <button type="ok" class="btn"><a href="home.php">Go back</a></button>
    </div>
</div>

</body>
</html>
