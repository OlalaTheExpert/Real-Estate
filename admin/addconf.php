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

$sql = "INSERT INTO addtrain (route, train, departure, destination, tdate, fare, seat)
VALUES ('".$_POST['route']."', '".$_POST['train']."', '".$_POST['departure']."', '".$_POST['destination']."', '".$_POST['tdate']."', '".$_POST['fare']."', '".$_POST['seat']."')";

if (mysqli_query($con, $sql)) {
echo "<script type='text/javascript'> alert('You added Train successfully')</script>"; 

//   echo '<script>alert("You have successfully secure a ticket") </script>' ;
  
} else {
   echo '<script>alert("Fill out the requirements correctly") </script>' ;
}

mysqli_close($con);
?>