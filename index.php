<?php
session_start();
?>

<html>
<head>
<title> USER LOGIN </title>
</head>
<body>
<?php 
if ($_SESSION["Username"]) ?> 
   <?php echo  "WELCOME".$_SESSION["Username"];?>  TO OUR WEBISTE .<a href ="logout.php">     CLICK HERE TO LOGOUT.
<?php
 echo   "<h4>IF ITS NOT YOU</h4>".$_SESSION["Username"];?>   <a href ="login.php" > <h3> PLEASE LOGIN FIRST </h3>



</body>
</html>

