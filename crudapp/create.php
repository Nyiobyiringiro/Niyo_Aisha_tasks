<?php
$title="A cimple CRUD app";
include"../layout/header.php";
?>

 <form method="POST" action="" onsubmit="return crud()" name="form1">
<div class="row">
    <div class="col-md-6">
 <input type="text" name="fname" placeholder="First name" class="form-control" onblur="fname()"><br>
 <input type="text" name="lname" placeholder="last name" class="form-control" ><br>
 <input type="text" name="city" placeholder="city " class="form-control" required><br>
 <select name="groupid">
    <option value="BBCAP22">BBCAP22</option>
    <option value="BBCAP21">BBCAP21</option>
    <option value="others">others</option>
</select><br><br>

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
        echo "Error".$conn->connect_error;
    }
 }
 
?>
<?php
include"../layout/footer.php";
?>