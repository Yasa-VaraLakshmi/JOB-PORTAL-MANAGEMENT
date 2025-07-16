<?php
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="insert into logininfo(username,password) values('$username','$password')";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: relative; /* Add position relative */
        }
        
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .login-container input[type="text"],
        .login-container input[type="password"],
        .login-container button[type="submit"],
        .login-container button[type="ok"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        .login-container input[type="submit"]
        {
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
        .login-container button[type="ok"] {
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        .login-container input[type="submit"]:hover,
        .login-container button[type="ok"]:hover {
            background-color: #45a049;
        }
        
        .login-container .button-container {
            display: flex;
            justify-content: space-between; /* Align items to the right */
        }
    </style>
</head>
<body>
    
<div class="login-container mt-5">
    <h2>LOGIN</h2>
    <form action="signup.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control"  placeholder="Enter your username" name="username">
        </div>
        <div class="form-goup">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" placeholder="enter your password" name="password">
        </div>
        
        <div class="button-container"> <!-- Added container for buttons -->
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="ok" class="btn btn-primary"><a href="home.php">OK</a></button>
        </div>
    </form>  
</div>
</body>
</html>