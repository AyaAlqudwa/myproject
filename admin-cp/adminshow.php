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
            <div class="card-header text-center"><h4>مدراء الموقع</h4></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">اسم المستخدم</th>
                                    <th scope="col">كلمة المرور</th>
                                    <th scope="col">تعديل</th>
                                    <th scope="col">حذف</th>
                                </tr>
                            </thead>
                            <?php
                            include "../pages/conn.php";
                            $sql="select * from users";
                            $result=mysqli_query($conn,$sql);
                            if (mysqli_num_rows($result)>0) {
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<tr><td>"
                                    .$row['id']
                                    ."</td><td>"
                                    .$row['username']
                                    ."</td><td>"
                                    .$row['password']
                                    ."</td><td>"
                                    ."<a class='btn btn-danger' href='adminedit.php?id=$row[id]&username=$row[username]&password=$row[password]'><i class='fas fa-edit'></i></a>"
                                    ."</td>.<td>"
                                    ."<a class='btn btn-warning' href='admindelete.php?id=$row[id]'><i class='fas fa-trash-alt'></i></a>"
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
                        <a href="admininsert.php"><button type="button" class="btn btn-info">اضافة مستخدم</button></a>
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