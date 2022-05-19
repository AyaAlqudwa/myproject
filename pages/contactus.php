``<!DOCTYPE html>
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
      $sql="SELECT * FROM menu where id=2";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
       
              ?>
  <section class="about" style="margin-bottom:200px;">
  <div class="container">
    <div class="row" style="min-height: 320px;">
        <div class="card col-md-12 hello" style="margin-top: 100px;">
            <div class="card-header text-right"><b><?php echo $row['head'];?></div>
            <div class="card-body text-right" style="height:200px;"> 
            <?php echo $row['detail'];?>
    </div>
</div>
</section>
    <?php
      include "../include/footer.php";
    ?>


<!-------------------------------------------->



</body>
</html>