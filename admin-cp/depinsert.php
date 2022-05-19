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
                <h4 class="text-center mb-5 mt-3">اضافة قسم</h4>
                <form method="POST" enctype="multipart/form-data"> 
                <div class="form-group row">
                    <label for="na" class="col-sm-2 col-form-label">عنوان القسم</label>
                    <div class="col-sm-5"> 
                    <input type="text" name="title" class="form-control" id="na" placeholder="عنوان القسم">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="de" class="col-sm-2 col-form-label">التفاصيل</label>
                    <div class="col-sm-5"> 
                    <input type="text" name="detail" class="form-control" id="de" rows="6" placeholder="تفاصيل القسم">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">صورة القسم</label>
                    <div class="col-sm-5"> 
                    <input type="file" name="image" class="form-control" id="image">
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-5">
                <input type="submit" name="submit" class="btn btn-primary" value="اضافة قسم">
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
    include "../pages/conn.php";
    if(isset($_POST['submit'])){
        $title=strip_tags($_POST['title']);
        $detail=$_POST['detail'];
        if (empty($title) or empty($detail)) {
            echo $msg="<div class='alert alert-danger'>لم تتم الاضافة</div>";}
        else{  
                if (isset($_FILES['image'])) {
                $image_name=$_FILES['image']['name'];
                $image_size=$_FILES['image']['size'];
                $image_tmp=$_FILES['image']['tmp_name'];
                $image_error=$_FILES['image']['error'];
                $image='../image/';
                $image=$image.basename($image_name);
                //move_uploaded_file($image_tmp,$image);
                move_uploaded_file($image_tmp ,$image, time() . "_{$newfilename}");
                $sql="INSERT INTO department (title,detail,image) VALUES ('$title','$detail','$image')";
                $result=mysqli_query($conn,$sql);}
        }   
    
    }

?>