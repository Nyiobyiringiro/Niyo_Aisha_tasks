<?php $title="Action page"; include "header.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$bdate=$_POST['bdate'];
$color=$_POST['color'];

echo"<h3>Your name is $fname $lname</h3><br>";
echo"<h3>Your birthdate is $bdate</h3><br>";
echo"<h3>Your favorate color is $color</h3><br>";
?>

<?php include "footer.php" ?>