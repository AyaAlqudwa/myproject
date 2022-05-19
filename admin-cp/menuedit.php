<?php
 include "../pages/conn.php";
 $id=$_GET['id'];
 $head=strip_tags($_GET['head']);
 $detail=$_GET['detail'];
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
    <!-------------------------------------------------------------------->
    <?php
        include "../include/slidebar.php";
    ?>
    <article class="col-lg-9" style="min-height: 320px;background: rgba(.8,.3,0,.05);margin: top 20px;">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <h4 class="text-center mb-5 mt-3">تعديل على قائمة</h4>
                <form method="POST" enctype="multipart/form-data"> 
                <div class="form-group row">
                    <label for="na" class="col-sm-2 col-form-label">العنوان</label>
                    <div class="col-sm-5"> 
                    <input type="text" name="head" class="form-control" id="na" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="de" class="col-sm-2 col-form-label">التفاصيل</label>
                    <div class="col-sm-5"> 
                    <input type="text" name="detail" class="form-control" id="de" rows="6">
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-5">
                <input type="submit" name="submit" class="btn btn-primary" value="تعديل القائمة">
                </div>
                </div>
                </form>
            </div>
        </div>
    </article>
</div>
</div>
    <!------------------------------------------------------------------->
    <?php
        include "../include/footer.php";
    ?>
</body>
</html>
<!----------------------------------------------------------------------->
<?php
      if(isset($_POST['submit'])){
        $head=$_POST['head'];
        $detail=$_POST['detail'];
          $sql="UPDATE menu SET head='$head',detail='$detail' WHERE id='$id';";
          $result=mysqli_query($conn,$sql);
          if($result){
            header("location:menushow.php");
            }
          }
        
    
    

?>