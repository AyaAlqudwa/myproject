<?php
include ('../pages/conn.php');
$id=$_GET['id'];
$sql="DELETE FROM `menu` WHERE id='$id';";
if(mysqli_query($conn,$sql)){
    header('location:menushow.php');
}
else{
    echo "not success!";
}
?>