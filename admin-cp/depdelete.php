 
<?php
include ('../pages/conn.php');
$id=$_GET['id'];
$sql="DELETE FROM `department` WHERE id='$id';";
if(mysqli_query($conn,$sql)){
    header('location:depshow.php');
}
else{
    echo "not success!";
}
?>