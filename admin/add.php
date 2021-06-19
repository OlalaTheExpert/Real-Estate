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

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<!-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> -->
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
			
			</div>
		</div>
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
				<!-- <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo"> -->
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
							<a href="train.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-add"></span><span class="mtext">Train (s)</span>
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
								<h4>Admin Booking</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Admin Booking</li>
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
							<h4 class="text-blue h4">Booking Sheet</h4>
							<p class="mb-30">Only admins are allowed to book here, the rest to book through our main site</p>
						</div>
						
					</div>
					<form name="form" method="post" action="connect.php">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">First Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="fname" type="text" placeholder="Olala">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Last Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="lname" type="text" placeholder="Victor">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Gender</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="gender">
									<option selected="">Choose gender</option>
									<option>Male</option>
									<option>Female</option>
									
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Age</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="20" name="age" type="number">
							</div>
						</div>
					
						

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Route</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="route">
									<option selected="">Choose your Route</option>
									<option>Nairobi-Kisumu</option>
									<option>Kisumu-Nairobi</option>
									<option>Nakuru-Kisumu</option>
									<option>Kisumu-Nairobi</option>
									<option>Nakuru-Nairobi</option>
									<option>Nairobi-Kisumu</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Number of Tickets</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="1" name="tickets" type="number">
							</div>
						</div>					
					
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Travelling Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" name="tdate" placeholder="Select Date" type="text">
							</div>
						</div>
					
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Time</label>
							<div class="col-sm-12 col-md-10">
								<input type="text" class="form-control" placeholder="All Trains to leave their respective stations at 8.00 AM" disabled="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Email</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="youremail@domain.com" name="email" type="email">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="phone" placeholder="2547..." type="tel">
							</div>
						</div>
						<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
									<input type="submit" class="btn btn-primary btn-lg btn-block" name="submit"  value="Submit">
										
									</div>
								
								</div>
							</div>
				
						
				</form>


				
					
						</div>
					</div>
				</div>
			

			</div>
			</div>
</div>

			<div class="footer-wrap pd-20 mb-20 card-box">
				<p>© Copyright WesternTrains. All Rights Reserved</p>
			</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>

                          <?php
                                // if (isset($_POST['submit'])) {
                                    // $code1 = $_POST['code1'];
                                    // $code = $_POST['code'];
                                    // if ($code1 != "$code") {
                                    //     $msg = "Invalide code";
                                    // } else {

                                        // $con=mysqli_connect("localhost","root","","western-train");
                                        // $check = "SELECT * FROM booking WHERE email = '$_POST[email]'";
                                        // $rs = mysqli_query($con, $check);
                                        // $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                        // if ('email'[0] > 1) {
                                        //     echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
                                        // } else {
                                        //     $new = "Not Conform";
                                        //     $newUser = "INSERT INTO `booking`(`fname`, `lname`,`gender`, `age`, `bdate`, `tdate`, `phone`, `email`) 
										// 	VALUES ('$_POST[fname]','$_POST[lname]', '$_POST[gender]', '$_POST[age]', '$_POST[bdate]', '$_POST[tdate]', '$_POST[phone]', '$_POST[email]'))";
                                        //     if (mysqli_query($con, $newUser)) {
                                        //         echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                        //     } else {
                                        //         echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                        //     }
                                        // }

                                        // $msg = "Your code is correct";
                                    //}
                                
                                ?>