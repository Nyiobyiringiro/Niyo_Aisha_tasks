<?php $title="Action page"; include "header.php";
$name=$_POST['fname'];
$age=$_POST['yage'];
if($age>=18){
   echo"$name is eligible for voting ";
}
?>
<?php include "footer.php" ?>