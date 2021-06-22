<?php
if (isset($_POST['save'])) {
	include 'includes/config.php';
	$house_id = $_POST['house_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$property_type = $_POST['property_type'];
	$location = $_POST['location'];
	$capacity = $_POST['capacity'];
	$price = $_POST['price'];
	$landlord = $_POST['landlord'];
	$contact = $_POST['contact'];
	$date = date("Y/m/d");

	$qry = "INSERT INTO userbook (house_id, name, email, gender, phone, property_type, location, capacity, price, landlord, contact, date, status) VALUES ('$house_id', '$name','$email','$gender','$phone','$property_type', '$location','$capacity','$price','$landlord','$contact', '$date', 'booked')";
	$result = mysqli_query($conn, $qry) or die(mysqli_error($conn));

	$query = mysqli_query($conn, "UPDATE houses SET status = 'Booked' WHERE house_id = '$house_id' ");
	if ($result>0 & $query >0) {
		$_SESSION['email'] = $myusername;
		echo "<script type = \"text/javascript\">
											alert(\"Successfully Booked\");
											window.location = (\"user.php\")
											</script>";
	} else {
		echo "<script type = \"text/javascript\">
											alert(\"Booking Failed. Try Again\");
											window.location = (\"login.php\")
											</script>";
	}
}
