<?php
$title="A cimple CRUD app";
include"../header.php";
?>
 <form method="POST" action="">
<div class="row">
    <div class="col-md-6">
 <input type="text" name="fname" placeholder="First name" class="form-control" required>
 <input type="text" name="lname" placeholder="last name" class="form-control" required>
 <input type="text" name="city" placeholder="city " class="form-control" required>
 <select name="groupid">
    <option value="BBCAP22">BBCAP22</option>
    <option value="BBCAP21">BBCAP21</option>
    <option value="others">others</option>
</select><br>

 <input type="submit" value="submit" name="submit">
 </div>
</form>
</div>
<?php
 if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $city=$_POST['city'];
    $groupid=$_POST['groupid'];
    include"db.php";
    $sql="INSERT into studentinfo(fname,lname,city,groupid)
    values ('$fname','$lname','$city','$groupid')";
    if($conn->query($sql)== TRUE){
        echo"information is added successfully!";
    }
    else{
        echo "Error".$conn->error;
    }
 }
?>
<?php
include"../footer.php";
?>