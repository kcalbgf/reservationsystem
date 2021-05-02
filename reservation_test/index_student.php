<?php
session_start();
if($_SESSION["USE_Student_id"]=="" || $_SESSION["USE_fname"]=="" || $_SESSION["USE_lname"]==""){
  header("location: index.php");  
}else{

?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ระบบของห้องเรียนและสถานที่สำหรับนักศึกษา</title>
<style>
* {
    box-sizing: border-box;
  	font-family: Arial, Helvetica, sans-serif;
       
}
body {
	margin: 0;
  	font-family: Arial, Helvetica, sans-serif;
	
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: white;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: grey;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: red;
  color: orange;
}

/* Style the content */
.content {
  background: linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url("https://static.bangkokpost.com/media/content/20200620/c1_1938008_200620092012.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  text-align: center;
  padding: 10px;
  height: 700px; /* Should be removed. Only for demonstration */
}

/* Style the footer */
.footer {
  background-color: grey;
  padding: 8px;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="‪‪index.php">Home</a>
  <a href="reserve.php">Reserve</a>
  <a href="check.php">Check</a>
  <a style="float:right", href="student.php"><?php echo $_SESSION["USE_fname"];?></a>
</div>

<div class="content">
  <h2>Welcome<?php echo " " .$_SESSION["USE_fname"]. " "; 
  echo $_SESSION["USE_lname"]; ?> 
  </h2>
  <br>
  <h4>KMUTT Reservation System</h4>
</div>

<div class="footer">
  <p>Contact</p>
</div>


</body>
</html>


<?php } ?>