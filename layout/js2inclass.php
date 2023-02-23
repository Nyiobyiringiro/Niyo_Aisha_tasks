<?php
$title="javascript events and form validation";
include "header.php"
?>
<h2>A simple button to display date</h2>
<button onclick="this.innerHTML= Date()"> click to know the date</button>
<h2>Make a button and a place holder as a paragraph for the date</h2>
<button onclick="getElementById('p1').innerHTML=Date()">Click here</button>
<p id="p1"></p>

<h2>change background color</h2>
<form>
    <input type="color" id="background" onchange="changeColor()">
</form>
<h2>change font color</h2>
<form>
    <input type="color" id="font" onchange="fColor()">
</form>
<h2>change font color</h2>
<span onmouseover="this.style.color='blue';
 this.style.backgroundColor='yellow';
 this.style.fontSize='2em';"
 onmouseout="this.style.color='blue';
 this.style.backgroundColor='white';
 this.style.fontSize='1.1em';">Some text</span>
 <h2>Javascript validation</h2>
 

<?php 
include "footer.php"
?>