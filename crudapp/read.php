<?php
$title="Reading data from the database";
include "../layout/header.php";
include "db.php";
$sql="select * from studentinfo";
$results=$conn->query($sql);
if($results->num_rows>0){
    
    echo"
    <table class='table'>
    <tr>
    <th>ID</th><th>First name</th><th>Last name</th><th>Groupid</th><th>City</th>
    </tr>";
    
    while($row=$results->fetch_assoc()){
     echo"   
    <tr>
    <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
    <td>$row[fname]</td>
    <td>$row[lname]</td>
    <td>$row[groupid]</td>
    <td>$row[city]</td>
    </tr>
     ";
    } 
  echo" </table>";
}
else{
    echo"no data found";
}
$conn->close();
include "../layout/footer.php"
?>