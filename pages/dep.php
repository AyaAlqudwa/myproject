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
    <?php
      include ('conn.php');
      $sql="SELECT * FROM department where id='$_GET[id]'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
       
              ?>
  <section class="dep" style="margin-bottom:200px;">
  <div class="container">
    <div class="row" style="min-height: 320px;">
        <div class="card col-md-8 hello" style="margin-top: 100px;">
            <div class="card-header text-right">اهلا بكم في قسم <b><?php echo $row['title'];?></b></div>
            <div class="card-body text-right" style="height:200px;"><?php echo $row['detail'];?></div>
        </div>
    
    <div class="card col-md-4" style="margin-top: 100px;">
        <div class="card-header text-center">
            التسجيل في قسم</div>
            <div class="card-body text-center">
            <a href="addstudent.php"><button class="btn btn-info ff">تسجيل طالب جديد</button></a>
            </div>
        </div>
        
    </div>
</div>
</section>
 
    <?php
      include "../include/footer.php";
    ?>


<!-------------------------------------------->



</body>
</html>