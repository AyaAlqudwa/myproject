<?php
include ('../pages/conn.php');
$id=$_GET['id'];
$sql="DELETE FROM `news` WHERE id='$id';";
if(mysqli_query($conn,$sql)){
    header('location:newshow.php');
}
else{
    echo "not success!";
}
?>