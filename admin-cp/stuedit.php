<?php
include "../pages/conn.php";
$id=$_GET['id'];
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
          <div class="card-header text-center"><h4>تعديل على بيانات الطلاب</h4></div>
          <div class="card-body">
              <form action=""method="POST" class="form-horizontal" id="login" style="min-height: 250px;">
                <div class="form-group row">
                    <label for="user" class="col-sm-4 col-form-label">اسم الطالب</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="user" name="name" placeholder="اسم الطالب"></div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">الايميل </label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" name="email" id="email"placeholder="الايميل "></div>
                                </div>

                                <div class="form-group row">
                            <label for="age" class="col-sm-4 col-form-label">العمر </label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="age" id="age"placeholder="العمر "></div>
                                </div>

                                <div class="form-group row">
                            <label for="address" class="col-sm-4 col-form-label">العنوان </label>
                            <div class="col-sm-4">
                                <input type="العنوان" class="form-control" name="address" id="address"placeholder="العنوان "></div>
                                </div>

                                <div class="form-group row">
                            <label for="phone" class="col-sm-4 col-form-label">الهاتف </label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="phone" id="phone"placeholder="الهاتف "></div>
                                </div>

                                <div class="form-group row">
                            <label for="dep" class="col-sm-4 col-form-label">القسم </label>
                            <div class="col-sm-4">
                            <select type="text" name="depnum" class="form-control" id="department">
                            <?php
                            $sql="select * from department";
                            $result=mysqli_query($conn,$sql);
                            echo"<option value=''>اختر القسم</option>";
                            while ($row=mysqli_fetch_assoc($result)) {
                                echo"<option value='".$row['title']."'>'.$row['title']'</option>";
                            }
                            ?>
                            </select>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4 col-sm-offset-2">
                                        <button type="submit" name="submit" class="btn btn-primary">اضافة طالب</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
 if (isset($_POST['submit'])) {
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $age=htmlspecialchars($_POST['age']);
    $address=htmlspecialchars($_POST['address']);
    $phone=htmlspecialchars($_POST['phone']);
    $depnum=$_POST['depnum'];
    $sql="update students set name='$name', email='$email', age='$age', address='$address',phone='$phone' depnum='depnum' where id='$id'";
    $result=mysqli_query($conn,$sql);
    if (isset($result)) {
        header('location:stushow.php');
    }
    else{
        echo mysqli_error($conn);
    }
}
 ?>