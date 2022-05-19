<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>الرئيسية</title>
</head>
<body>
    <!------------------------------1 header-----a nav---b logo--------------------->
        <!------------------------------nav--------------------------------->
        <?php
        include "../include/header.php";
        ?>
    <!------------------------------2  article--------------------------------->
            <!----------------------start slider------------------------------>
            <div class="slider">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                              include 'conn.php';
                              $x=0;
                              $sql="select * from news order by id desc limit 4";
                              $result=mysqli_query($conn,$sql);
                              $count=mysqli_num_rows($result);
                              while($row=mysqli_fetch_assoc($result)){
                        ?>
                        <div class="carousel-item <?php echo($x==0 ? 'active' : '')?>">
                          <img src="../image/<?php echo $row['image'];?>" height="300px" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block" style="background:rgba(0,0,0,.54);">
                          <h5><?php echo $row['title']; ?></h5>
                          <h5><p class="lead"><?php echo $row['detail'];?></p></h5>
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <?php
            $x++;}
            ?>
                  </div>
            </div>
             
            
    <!-------------------------------------الاقسام----------------------------------------------->
    <div class="container-fluid">
        <div class="row bg-dark m-l-0 tit">
            <h2 class ="col-9" style="text-align:right;"><b>اقسام ICTL</b></h2>
            <a href="stuinsert.php" class="mt-1 col-3"><button class="btn btn-info">تسجيل طالب جديد</button></a>
         
<!----------------------------------------------------------------------------->
<!----------------------------------------start section services------------------------------------------>       
<section class='services' id='ICTL-dep'>
  <div class='container'>
     <div class='row'>
     <?php
      include ('conn.php');
      $sql="SELECT * FROM department";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_assoc($result)){
              ?>
         <div class='col-sm col-md mb-0'>
          <div class='card-deck'>
            <div class='card ml-2' style='width:22rem; height:auto;'> 
              <img class='card-img-top' src='../image/<?php echo $row['image'];?>' style='height:285px;'><!--على الشاشات الصغير والمتوسطة بطاقتين والثلاثة اسفلهم-->
              <div class='card-body'>
                <h5 class='card-title text-center'><?php echo $row['title'];?></h5>
                <p class='card-text text-center'><?php echo substr($row['detail'],0,150);?></p>
                <?php
                echo"<a class='btn btn-primary' href='dep.php?id=$row[id]'>اقرا المزيد</a>";
                ?>
              </div>
            </div>
            </div>
         </div>
         <?php
}
}
?>
     </div>
  </div>
</section>
</div>
          </div>
       
  

    <!------------------------------3 footer--------------------------------->

        <!--------------------------->
        <?php
        include "../include/footer.php";
      ?>
  
  
  <!-------------------------------------------->
</body>
</html>