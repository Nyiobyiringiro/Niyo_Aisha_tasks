<?php
$title="update data from the database";
include "../header.php";
include "db.php";
$a=$_GET['id'];
$result=mysqli_query($conn,"select * from studentinfo where id='$a'");
$row= mysqli_fetch_array($result);
echo"<h1>Update OR Delete your information</h1>"
?>
<form method="POST" action="">
<div class="row">
    <div class="col-md-6">
 <input type="text" name="fname" placeholder="First name" class="form-control" required 
 value=<?php echo $row['fname'];?>><br><br>
 <input type="text" name="lname" placeholder="last name" class="form-control" required
 value=<?php echo $row['lname'];?>><br><br>
 <input type="text" name="city" placeholder="city " class="form-control" required
 value=<?php echo $row['city'];?>><br><br>
 <select name="groupid">
    <option value="BBCAP22">BBCAP22</option>
    <option value="BBCAP21">BBCAP21</option>
    <option value="others">others</option>
</select><br><br><br>

 <input type="submit" value="update your info" name="update"><br><br>
 <input type="submit" value="delete info" name="delete">
 </div>
</form>
</div>
<?php
   if(isset($_POST['update'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $groupid=$_POST['groupid'];
    $city=$_POST['city'];
    $query=mysqli_query($conn,"UPDATE studentinfo set
     fname='$fname',lname='$lname', groupid='$groupid', city='$city'where id='$a' ");
 
   if($query){
    echo"<h2>your information is successfully updated</h2>";
   }
   else{
    echo"<h2>your information is not updated</h2>";
   }
   
?>
<?php
}
if(isset($_POST['delete'])){
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $groupid=$_POST['groupid'];
 $city=$_POST['city'];
 $query=mysqli_query($conn,"DELETE from studentinfo where id='$a' ");

if($query){
 echo"<h2>your information is successfully deleted</h2>";
}
else{
 echo"<h2>your information is not delete</h2>";
}

}
?>
<?php
$conn->close();
include "../footer.php"
?>