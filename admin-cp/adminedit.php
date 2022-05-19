<?php
 include "../pages/conn.php";
 $id=$_GET['id'];
 $username=strip_tags($_GET['username']);
 $password=$_GET['password'];
?>
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
            <h4> تعديل على بيانات  مستخدم للموقع (مدير الموقع)</h4>
        </div>
        <div class="card-body">
        <form action=""method="POST" class="form-horizontal" id="login" style="min-height: 250px;">
            <div class="form-group row">
                <label for="user" class="col-sm-4 col-form-label">اسم المستخدم</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="user" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="pass" class="col-sm-4 col-form-label">كلمة مرور</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="password" id="pass">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4 col-sm-offset-2">
                    <button type="submit" name="submit" class="btn btn-primary">اضافة مستخدم</button>
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
 if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
      $sql="UPDATE users SET username='$username',password='$password' WHERE id='$id';";
      $result=mysqli_query($conn,$sql);
      if($result){
        header("location:adminshow.php");
        }
      }
    
</body>
</html>