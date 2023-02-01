<?php
$title="Index page";
include "header.php"?>
<div class="Wrapper" style=" max-width:90%; margin:auto; padding:20px;">
 <h3>Write a simple PHP script to print your information</h3>
  <?php 
   echo" Niyobyiringiro Aisha<br>";
   echo" BBACP22<br>";
  ?> 
  <h3>Write PHP code to display the following message</h3>
  <?php 
   echo"Hello World! My name is \"David\"";
   ?>
   <h3>Write the PHP code in to display the current date</h3>
   <?php
   echo"Date: ";
   echo date("d.m.Y")
   ?>
   <h3>variable title</h3>
   <?php
   $title="PHP is interesting"
   ?>
   <h1><?php echo $title?></h1>
   <?php
   $g1=5; 
   $g2=4; 
   $g3=5;
   ?>
   <h3>Your table should look like the one below</h3>
   <?php
   echo "
   <table>
   <tr>
   <th>S.N</th><th>Name</th><th>Grade</th>
   </tr>
   <tr>
   <td>1</td><td>pekka</td><td>$g1</td><br>
   </tr>
   <tr>
   <td>2</td><td>Johanna</td><td>$g2</td><br>
   </tr>
   <tr>
   <td>3</td><td>John</td><td>$g3</td><br>
   </tr>
   </table>
   ";
   ?>
 <img  src="docker.png" alt="image of docker" class="img-fluid">
</div>
<?php include "footer.php" ?>