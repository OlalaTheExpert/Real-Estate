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

$sql = "INSERT INTO bookings (fname, lname, email, age, phone, gender, departure, destination, tdate, com, stat )
VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['age']."','".$_POST['phone']."','".$_POST['gender']."','".$_POST['departure']."','".$_POST['destination']."','".$_POST['tdate']."','".$_POST['com']."', 1)";

if (mysqli_query($con, $sql)) { 
  echo "<script>
  alert('Ticket booked Successfully');
  window.location.href='bookings.php';
  </script>";
  
} else {
   echo '<script>alert("Fill out the requirements correctly") </script>' ;
}

mysqli_close($con);
?>