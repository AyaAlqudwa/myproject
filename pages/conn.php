<?php
    $serverName='localhost';
    $userName='root';
    $password='';
    $dbName='myproject';
    $conn=mysqli_connect($serverName,$userName,$password,$dbName);
    $conn->set_charset("UTF8");
    if (!$conn) {
        die('There is Connection Problem'.mysql_error_connection());
    }
    
?>