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
        include "../include/slidebar.php";
    ?>
    <!--------------------------->
    <article class="col-lg-9" style="min-height:320px;">
        <div class="card">
            <div class="card-header text-center"><h4>القائمة</h4></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">العنوان</th>
                                    <th scope="col">التفاصيل</th>
                                    <th scope="col">تعديل</th>
                                    <th scope="col">حذف</th>
                                </tr>
                            </thead>
                            <?php
                            include "../pages/conn.php";
                            $sql="select * from menu";
                            $result=mysqli_query($conn,$sql);
                            if (mysqli_num_rows($result)>0) {
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<tr><td>"
                                    .$row['id']
                                    ."</td><td>"
                                    .$row['head']
                                    ."</td><td>"
                                    . $row['detail']
                                    ."</td><td>"
                                    ."<a class='btn btn-danger' href='menuedit.php?id=$row[id]&head=$row[head]&detail=$row[detail]'><i class='fas fa-edit'></i></a>"
                                    ."</td>.<td>"
                                    ."<a class='btn btn-warning' href='menudelete.php?id=$row[id]'><i class='fas fa-trash-alt'></i></a>"
                                    ."</td></tr>";
                                }
                            }
                            else{
                                echo"لايوجد نتائج";
                            }
                            ?>
                        </table>
                    </div>
                    <div class="col-md-3">
                        <a href="depinsert.php"><button type="button" class="btn btn-info">اضافة عنوان</button></a>
                    </div>
                </div>
            </div>
        </div>
                        </div>
    </article>
 
    <?php
      include "../include/footer.php";
    ?>


<!-------------------------------------------->



</body>
</html>