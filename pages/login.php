<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      include "../include/header.php";
    ?>

    <!--------------------------->
  <div class="container"style="margin-bottom:100px;">
      <div class="card">
        <div class="card-header text-center">
            <h4>تسجيل الدخول للوحة التحكم</h4>
        </div>
        <div class="card-body">
        <form action=""method="POST" class="form-horizontal" id="login" style="min-height: 250px;">
            <div class="form-group row">
                <label for="user" class="col-sm-4 col-form-label">اسم المستخدم</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="user" name="username" placeholder="اسم المستخدم">
                </div>
            </div>
            <div class="form-group row">
                <label for="pass" class="col-sm-4 col-form-label">كلمة مرور</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="password" id="pass"placeholder="كلمة المرور">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4 col-sm-offset-2">
                    <button type="submit" name="submit" class="btn btn-primary">تسجيل الدخول</button>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
        <!--------------------------->
    <?php
      include "../include/footer.php";
    ?>
<!-------------------------------------------->
<?php
include "conn.php";
if (isset($_POST['submit'])) {
    $username=htmlspecialchars($_POST['username']);
    $password=$_POST['password'];
    if (empty($username)) {
        echo"<div class='alert alert-danger' role='alert'>الرجاء ادخال اسم المستخدم</div>";
    }
    elseif (empty($username)) {
        echo"<div class='alert alert-danger' role='alert'>الرجاء ادخال كلمة المرور</div>";
    }
    else{
        $sql="select * from users where username='$username' and password='$password'";
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)==0) {
            echo"<div class='alert alert-danger text-center' role='alert'>خطا في اسم المستخدم او كلمة المرور</div>";
        }
        else{
            $user=mysqli_fetch_assoc($result);
            $_SESSION['id']=$user['id'];
            $_SESSION['user']=$user['username'];
            header('location:../admin/home.php');
        }
    }
}

?>



</body>
</html>