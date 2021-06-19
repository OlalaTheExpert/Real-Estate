<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "western-train";

// Create connection
$con = mysqli_connect("localhost","root","","western-train") or die(mysql_error());
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO train (train)
VALUES ('".$_POST['train']."')";

if (mysqli_query($con, $sql)) { 
  header("location: book.php");
 //echo '<script>alert("You have successfully secure a ticket") </script>' ;
  
} else {
   echo '<script>alert("Fill out the requirements correctly") </script>' ;
}

mysqli_close($con);
?>