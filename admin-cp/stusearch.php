<?php
 include "../include/header.php";
 include "../include/slidebar.php";
?>
  <article class="col-lg-9" style="min-height:320px;">
        <div class="card">
            <div class="card-header text-center"><h4>البحث عن بيانات الطالب</h4></div>
            <div class="card-body">
                <div class="row">
                <div class="col-md-4">
                <form class="form-inline">
                <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label">اسم الطالب</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" placeholder="اسم الطالب">
      <button type="submit" class="btn btn-primary mb-2">بحث</button>
    </div>
</form>
        </div>
   
   <br>
    <div class="row">
        <div class="col-md-11">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">اسم </th>
            <th scope="col">الايميل  </th>
            <th scope="col">العمر   </th>
            <th scope="col">العنوان  </th>
            <th scope="col">تلفون  </th>
            <th scope="col">القسم  </th>
            <th scope="col">تعديل</th>
            <th scope="col">حذف</th>
            </tr>
        </thead>
    <?php
    include "../pages/conn.php";
    if(isset($_POST['submit'])){
        $name=htmlspecialchars($_POST['name']);
        $sq="select * from students where name like '%$name%'";
$result=mysqli_query($conn,$sq);
if(mysqli_num_rows($result)>0){
    $num='1';
while($row=mysqli_fetch_assoc($result)){
echo "<tr><td>".$num."</td>
<td>".$row['name']."</td>
<td>".$row['email']."</td>
<td>".$row['age']."</td>
<td>".$row['address']."</td>
<td>".$row['phone']."</td>
<td>".$row['depnum']."</td>
<td>"."<a href='stuedit.php?id=".$row['id']."' class='btn btn-danger'>edit</a>"."</td>
<td>"."<a href='studelete.php?id=".$row['id']."' class='btn btn-danger'>delete</a>"."</td>
</tr>";
$num++;
}
}else{
    echo "لا توجد نتائج";} } ?>
        </table>
        </div>
        </div>
</div>
 


<?php
include "../include/footer.php";
?>