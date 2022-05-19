<?php
include ('../pages/conn.php');
$id=$_GET['id'];
$sql="DELETE FROM `students` WHERE id='$id';";
if(mysqli_query($conn,$sql)){
    header('location:stushow.php');
}
else{
    echo "not success!";
}
?>