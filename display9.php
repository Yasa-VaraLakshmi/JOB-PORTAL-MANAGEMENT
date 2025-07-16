<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="tab9.php" class="text-light">Add applicant</a>
        

</button>
<table class="table table-success table-striped">
<thead>
    <tr>
      <th scope="col">app_no</th>
      <th scope="col">name</th>
      <th scope="col">dob</th>
      <th scope="col">gender</th>
      <th scope="col">city</th>
      <th scope="col">email</th>
      <th scope="col">phone_no</th>
      <th scope="col">w_status</th>
      <th scope="col">exp</th>
      <th scope="col">app_date</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

<?php
$sql="Select * from `table9`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $app_no=$row['app_no'];
        $name=$row['name'];
        $dob=$row['dob'];
        $gender=$row['gender'];
        $city=$row['city'];
        $email=$row['email'];
        $phone_no=$row['phone_no'];
        $w_status=$row['w_status'];
        $exp=$row['exp'];
        $app_date=$row['app_date'];
        echo '<tr>
        <th scope="row">'.$app_no.'</th>
        <td>'.$name.'</td>
        <td>'.$dob.'</td>
        <td>'.$gender.'</td>
        <td>'.$city.'</td>
        <td>'.$email.'</td>
        <td>'.$phone_no.'</td>
        <td>'.$w_status.'</td>
        <td>'.$exp.'</td>
        <td>'.$app_date.'</td>
        <td>
        <button class="btn btn-danger"><a href="delete9.php?delete9_id='.$app_no.'" class="text-light">Delete</a></buttton>
      </td>
      </tr> ';

    }
}

?>
  </tbody>
  </table>
</body>
</html>