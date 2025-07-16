<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Job Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    /* Additional CSS for job card styling */
    .container {
        padding-top: 20px;
    }
    .card {
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    .card:hover {
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }
    .card-title {
        color: #212529;
        font-size: 1.25rem;
        font-weight: bold;
    }
    .card-location, .card-date {
        color: #6c757d;
        font-size: 0.875rem;
        margin-bottom: 10px;
    }
    .card-button {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        transition: background-color 0.3s ease;
    }
    .card-button:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>

</head>
<body>
<?php include 'connect.php'?>
<?php include 'header.php'?>
<h1 class="text-center text-primary my-3">JOB PORTAL</h1>
<div class="container">
    <div class="row">
        <?php

        
        $sql="Select * from `jobs`";
        
        $result=mysqli_query($con, $sql);
        
        if($result){
        
        while($row=mysqli_fetch_assoc($result)){
        
        $jobid=$row['jobid'];
        
        $job_title=$row['job_title'];
        
        $loc=$row['loc'];
        
        $date_posted=$row['date_posted'];
        echo '<div class="col-4 mb-5">
        <div class="card" >
         
        <div class="card-body">
         <h5 class="card-title">'.$job_title.'</h5>
         <p class="card-text"><b>location:</b>'.$loc.'</p>
         <p><b>Date posted:</b>'.$date_posted.'</p>
         <a href="details.php?details_id='.$jobid.'" class="btn btn-primary">view</a>
         
    </div>

   </div>

       </div>';

       

     

        
       
         }

    }
         ?>
          
    </div>
</div>

</body>
</html>
