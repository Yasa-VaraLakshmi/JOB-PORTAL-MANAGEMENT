<?php
include 'connect.php';
if(isset($_GET['delete8_id'])){
 $id=$_GET['delete8_id'];
 $sql="delete from `table8` where app_no=$id";
 $result=mysqli_query($con,$sql);
if($result){
    echo "Deleted successfull";
}else{
    die(mysqli_error($con));
}
}


?>