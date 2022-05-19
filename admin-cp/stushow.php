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
            <div class="card-header text-center"><h4>بيانات الطلاب</h4></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">اسم</th>
                                    <th scope="col">الايميل</th>
                                    <th scope="col">العمر</th>
                                    <th scope="col">تلفون</th>
                                    <th scope="col">القسم</th>
                                    <th scope="col">تعديل</th>
                                    <th scope="col">حذف</th>
                                </tr>
                            </thead>
                            <?php
                            include "../pages/conn.php";
                            $sql="select * from students";
                            $result=mysqli_query($conn,$sql);
                            if (mysqli_num_rows($result)>0) {
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<tr><td>"
                                    .$row['id']
                                    ."</td><td>"
                                    .$row['name']
                                    ."</td><td>"
                                    .$row['email']
                                    ."</td><td>"
                                    .$row['age']
                                    ."</td><td>"
                                    .$row['address']
                                    ."</td><td>"
                                    .$row['phone']
                                    ."</td><td>"
                                    .$row['depnum']
                                    ."</td><td>"
                                    ."<a class='btn btn-danger' href='stuedit.php?id=$row[id]&name=$row[name]&email=$row[email]&address=$row[address]&phone=$row[phone]&depnum=$row[depnum]'><i class='fas fa-edit'></i></a>"
                                    ."</td>.<td>"
                                    ."<a class='btn btn-warning' href='studelete.php?id=$row[id]'><i class='fas fa-trash-alt'></i></a>"
                                    ."</td></tr>";
                                }
                             
                        }
                            ?>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <a href=".../pages/stuinsert.php"><button type="button" class="btn btn-info">اضافة طالب</button></a>
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