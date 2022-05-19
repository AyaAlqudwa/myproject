<?php
include ('../pages/conn.php');
$id=$_GET['id'];
$sql="DELETE FROM `users` WHERE id='$id';";
if(mysqli_query($conn,$sql)){
    header('location:adminshow.php');
}
else{
    echo "not success!";
}
?>