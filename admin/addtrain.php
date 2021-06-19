<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Western Trains | Booking Form</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/img/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

	<div class="header">
		
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a href="profile.html" class="dropdown-toggle no-arrow">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
				
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="message.php">
									<?php
							 		include('db.php');	
							  $sql = "SELECT * FROM `message`";
							  $re = mysqli_query($con,$sql);
							  
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<ul class='gradeC'>
												<li><h6>".$row['name']."</h6> 
												<p>".$row['message']."</li>
												
												</ul>";
											}
											else
											{
												echo"<ul class='gradeU'>
												<li><h6>".$row['name']."</h6> 
												<p>".$row['message']." </p></li>
												
												</ul>";
											
											}
										
										}
										
									?></p>
									</a>
								</li>
								
							
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<!-- <span class="user-icon">
							<img src="vendors/img/user.png" alt="">
						</span> -->
						<span class="user-name" style="font-weight: bold; font-size: 20px; color: blue;">Olala Victor</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>						
						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>


	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<p>
					WESTERN TRAIN
				</p>
		
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
            <ul id="accordion-menu">
					
						
					<li>
						<a href="dashboard.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>
						
						<li>
							<a href="booknow.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-edit2"></span><span class="mtext">Book Now</span>
							</a>
						</li>
						<li>
							<a href="bookings.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-train"></span><span class="mtext">Bookings</span>
							</a>
						</li>	
						<li>
							<a href="addtrain.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-add"></span><span class="mtext">Add Train</span>
							</a>
						</li>	
						<li>
							<a href="remove.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-remove"></span><span class="mtext">Remove Train</span>
							</a>
						</li>				
						<li>
							<a href="payment.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-money"></span><span class="mtext">Payment</span>
							</a>
						</li>	
						
						
							
						
						<li>
							<a href="messages.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-message"></span><span class="mtext">Messages</span>
							</a>
						</li>
				
					
					<li>
						<a href="invoice.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<a href="chat.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext" style="color:blue; font-weight: bold;">Chat</span>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Adding Trains</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Train Ticket</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary" href="#" role="button">
								<?php                            
							echo date(" d/m/Y");
							?>
								</a>
								
							</div>
						</div>
					
					</div>
				</div>
			
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Add Available Train</h4>
							<p class="mb-30">Add the available Train to the customers</p>
						</div>
						
					</div>
					<form name="form" method="post" action="#">
					
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Train</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="train" required="">
									<option selected="">Choose Train Available</option>
									
									<option>Modern Train</option>
									<option>Emirate Train</option>
									
									
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Departure</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="departure" required="">
									<option>Nairobi</option>
									<option>Kisumu</option>
									
									
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Destination</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="destination" required>
									<option>Kisumu</option>
									<option>Nairobi</option>
									
									
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Travelling Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="custom-select col-12" name="tdate" placeholder="Select Date" type="date" required min="<?php echo Date("Y-m-d") ?>">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Fare</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="20" name="fare" type="text" required="">
							</div>
						</div>
					
						

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Number of Seat</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="1" name="seat" type="number" required="">
							</div>
						</div>					
					
						<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
									<input type="submit" class="btn btn-primary btn-lg btn-block" name="submit"  value="Add Train">
										
									</div>
								
								</div>
							</div>
			
						
				</form>
			


				
					
						</div>
					</div>
				</div>
			

			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				<p>
					olalavictor01@gmail.com
				</p>

				</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>

                          

                                <?php
                                	
		include('db.php');



				
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "western-train";
 if (isset($_POST['submit'])){

// Create connection
$con = mysqli_connect("localhost","root","","western-train") or die(mysql_error());
//$x = "SELECT * FROM addtrain WHERE seat";

$y = "SELECT COUNT(*) FROM addtrain As booked";
				
     // $total = $x - $y;                 


// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO addtrain (train, departure, destination, tdate, fare, seat, booked)
VALUES ('".$_POST['train']."', '".$_POST['departure']."', '".$_POST['destination']."', '".$_POST['tdate']."', '".$_POST['fare']."', '".$_POST['seat']."', '".$_POST['booked']."')";

if (mysqli_query($con, $sql)) {
//echo "<script type='text/javascript'> alert('You've added Train successfully')</script>"; 

 echo '<script>alert("You have added another Train successfully") </script>' ;
  
} else {
   echo '<script>alert("Fill out the requirements correctly") </script>' ;
}

}
mysqli_close($con);
?>