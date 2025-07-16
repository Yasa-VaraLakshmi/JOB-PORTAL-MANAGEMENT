<?php
include 'connect.php';
if(isset($_GET['delete9_id'])){
 $id=$_GET['delete9_id'];
 $sql="delete from `table9` where app_no=$id";
 $result=mysqli_query($con,$sql);
if($result){
    echo "Deleted successfull";
}else{
    die(mysqli_error($con));
}
}


?>