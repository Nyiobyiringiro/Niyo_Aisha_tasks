<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AMARILLO</title>
  <!--Bootstrap CSS code-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
 
    <style>
   
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
form{
  text
}

.navbar {
background-color: #5C2018; /* navbar background color */
font: Arial;
font-size: 16px;
}

.navbar-brand {
color: #f7ff03; /* text color of the navbar brand (Name of the restaurant) */
font: Arial;
font-size: 18px;
}

.navbar-brand:hover {
color: #ffffff; /* text color of the navbar brand */
}

.navbar-brand.navbar-brand:clicked {
color: #ffffff; /* text color of the navbar brand */
}

.navbar-nav .nav-link {
color: #ffffff; /* text color of the navbar links */
}

.navbar-nav .nav-link:hover {
color: #f0ce21; /* text color of the navbar links on hover */
}

.navbar-nav .nav-link.active{
color: #f7ff03; /* text color of the active navbar link */
}

.navbar-toggler {color: #FFFFFF;
}
		
.navbar-toggler {
	border-color: white; /* the dropdown's border color */
}
		
.navbar-toggler-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
		} /* dropdown icon color */

#topBtn {
      display: none; /* Hidden by default */
      position: fixed; /* Fixed/sticky position */
      bottom: 20px; /* Place the button at the bottom of the page */
      right: 30px; /* Place the button 30px from the right */
      z-index: 99; /* Make sure it does not overlap other elements on the page */
      border-color: white; /* Remove borders */
      outline-color: rgb(215, 5, 5); /* Remove outline */
      background-color: #D4A59A; /* Set a background color */
      color: #5C2018; /* Text color */
      cursor: pointer; /* Add a hover effect */
      padding: 15px; /* Some padding */
      border-radius: 10px; /* Rounded corners */
}
 </style>
</head>
<script src="/Niyo_Aisha_tasks/javascript/site.js">
  </script>
<body>
  <div>

<!--This is the Header part, it has the top navigation links-->
<header>
  <nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
      <a class="navbar-brand"><img src="logo1.png" style="height:100px; width:200px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
  
          <li class="nav-item">
              <a  class="nav-link" href="index.php">Index</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ex1.php">Exercise1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="variable.php">Variable</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controlflow.php">Control flow</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="array.php">Arrays</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="crudapp/create.php">Create</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="read.php">Read</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
</header>