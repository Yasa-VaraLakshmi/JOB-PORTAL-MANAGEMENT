
<?php
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
    include 'connect.php';
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $phone_no=$_POST['phone_no'];
    $w_status=$_POST['w_status'];
    $exp=$_POST['exp'];
    $app_date=$_POST['app_date'];
    
    $sql="insert into table3(name,dob,gender,city,email,phone_no,w_status,exp,app_date) values('$name','$dob','$gender','$city','$email','$phone_no','$w_status','$exp','$app_date')";
    $result=mysqli_query($con,$sql);

    if(!$result){
        die(mysqli_error($con));

    } 
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:##e6f2ff ;
            margin: 0;
            padding: 20px;
        }
        
        .application-form {
            background-color:#fffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .form-group  deinput[type="text"],
        .form-group input[type="email"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            resize: vertical;
        }
        
        .form-group input[type="submit"] {
            background-color: blue;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="application-form">
        <h2>Job Application</h2>
<form action="tab3.php"  method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" auto_complete="off" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" name="dob" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select  name="gender" class="form-control" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="city">city:</label>
                <textarea  placeholder="Enter your city" name="city" class="form-control" rows="1" required></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" placeholder="@gmail.com" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" name="phone_no" required>
            </div>
            <div class="form-group">
            <label for="working-status">Working Status:</label>
                <select name="w_status" class="form-control" required>
                    <option value="">Select Working Status</option>
                    <option value="student">Student</option>
                    <option value="currently_working">Currently Working</option>
                    <option value="graduated">Graduated</option>
                </select>
            </div>
            <div class="form-group">
            <label for="experience">experience:</label>
                <select name="exp" class="form-control" required>
                    <option value="">Select no of years</option>
                    <option value="fresher">fresher</option>
                    <option value="1-3 years">1-3 years</option>
                    <option value="3-5 years">3-5 years</option>
                    <option value="5-10 years">5-10 years</option>
                    <option value="greater than 10 yrs">greater than 10 years</option>
                </select>
            </div>
            <div class="form-group">
                <label for="application-date">Application Date:</label>
                <input type="date" class="form-control" name="app_date" required>
            </div>
            <div class="button-container"> <!-- Added container for buttons -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="button-container">
        <button type="ok" class="btn btn-primary"><a href="home.php" class="text-light">OK</a></button>
    </div>
    </div>
</form>
</body>
</html>
