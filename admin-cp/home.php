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
    <div class="container">
    <div class="row bg-light" style="margin-top: 80px;">
    <aside class="col-lg-3 text-right bg-light">
        <div class="list-group" style="min-height: 425px;">
          <a href="home.php" class="list-group-item"><h5>لوحة التحكم</h5></a>
          <a href="depshow.php" class="list-group-item"><h5>الاقسام</h5></a>
          <a href="menushow.php" class="list-group-item"><h5>القائمة</h5></a>
          <a href="newshow.php" class="list-group-item"><h5>الاخبار</h5></a>
          <a href="stushow.php" class="list-group-item"><h5>الطلاب</h5></a>
          <a href="adminshow.php" class="list-group-item"><h5>مدراء الموقع</h5></a>
</aside>
<article class="col-lg-9" style="min-height: 320px;background: rgba(.8,.3,0,.05);margin-bottom:30px">
            <div class="card">
                <div class="card-header text-center">مرحبا بك يا:....في لوحة التحكم</div>
            </div>
        </div>
    </article>

</div>
</div>
    <!--------------------------->

    <?php
      include "../include/footer.php";
    ?>


<!-------------------------------------------->



</body>
</html>