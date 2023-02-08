<?php
$title="Control flow";
include "header.php"?>
<?php
$a=5;
if($a==5){
    echo "condition is true";
}
els{
    echo"the condition is false";
    echo"the number is $a";
}
//if else statement
$d=date("D");
if($d=="sat" or $d=="sun"){
    echo"<br> today is $d and it is weekend";

}
elseif($d=="Mon"){
    echo"<br>today is $d and it is the first working day";

}
elseif($d=="Tues"){
    echo"<br>today is $d ";

}
elseif($d=="Wen"){
    echo"<br>today is $d ";

}
elseif($d=="Thru"){
    echo"<br>today is $d";

}
else{
    echo"<br>today is $d";

}

<?php 

?>
?>
<?php include "footer.php" ?>