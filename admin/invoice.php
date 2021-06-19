<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Western Trains | Invoice</title>

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
					<a href="usersetting.php" class="dropdown-toggle no-arrow">
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
						<div class="notification-list mx-h-350 customscroll text-capitalize">
							<ul>
								<li>
									<a href="#">
									<!-- <i class="dw dw-user1"></i> -->
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
												<li><h6><i class='dw dw-user1'></i>".$row['name']."</h6> 
												<p>".$row['message']."</li>
												<hr style='color:blue'></hr>
												</ul>";
											}
											else
											{
												echo"<ul class='gradeU'>
												<li><h6><i class='dw dw-user1'></i>".$row['name']."</h6> 
												<p>".$row['message']." </p></li>
												<hr></hr>
												
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
												
						
					
						<span class="user-name text-capitalize" style="font-weight: bold; font-size: 20px; color: black;">
						<i class="dw dw-user1" style="font-size:25px; color:blue;"></i>
						<?php echo $_SESSION["user"]; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="usersetting.php"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="usersetting.php"><i class="dw dw-settings2"></i> Setting</a>						
						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>


	<div class="left-side-bar">
		<div class="brand-logo" >
			<a href="index.html">
			<img src="vendors/images/train.png" alt="" class="light-logo" style="width:80px; height:fixed;">
			<p style="font-size:10px;">WESTERN TRAIN</p>	
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
							<a href="routes.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-add"></span><span class="mtext">Routes</span>
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
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form</li>
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
				<div class="invoice-wrap">
					<div class="invoice-box">
						<div class="invoice-header">
							<div class="logo text-center">
								<img src="vendors/images/deskapp-logo.png" alt="">
							</div>
						</div>
						<h4 class="text-center mb-30 weight-600">INVOICE</h4>
						<div class="row pb-30">
							<div class="col-md-6">
								<h5 class="mb-15">Client Name</h5>
								<p class="font-14 mb-5">Date Issued: <strong class="weight-600">10 Jan 2018</strong></p>
								<p class="font-14 mb-5">Invoice No: <strong class="weight-600">4556</strong></p>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<p class="font-14 mb-5">Your Name </strong></p>
									<p class="font-14 mb-5">Your Address</p>
									<p class="font-14 mb-5">City</p>
									<p class="font-14 mb-5">Postcode</p>
								</div>
							</div>
						</div>
						<div class="invoice-desc pb-30">
							<div class="invoice-desc-head clearfix">
								<div class="invoice-sub">Description</div>
								<div class="invoice-rate">Rate</div>
								<div class="invoice-hours">Hours</div>
								<div class="invoice-subtotal">Subtotal</div>
							</div>
							<div class="invoice-desc-body">
								<ul>
									<li class="clearfix">
										<div class="invoice-sub">Website Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal"><span class="weight-600">$2000</span></div>
									</li>
									<li class="clearfix">
										<div class="invoice-sub">Logo Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal"><span class="weight-600">$2000</span></div>
									</li>
									<li class="clearfix">
										<div class="invoice-sub">Website Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal"><span class="weight-600">$2000</span></div>
									</li>
									<li class="clearfix">
										<div class="invoice-sub">Logo Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal"><span class="weight-600">$2000</span></div>
									</li>
								</ul>
							</div>
							<div class="invoice-desc-footer">
								<div class="invoice-desc-head clearfix">
									<div class="invoice-sub">Bank Info</div>
									<div class="invoice-rate">Due By</div>
									<div class="invoice-subtotal">Total Due</div>
								</div>
								<div class="invoice-desc-body">
									<ul>
										<li class="clearfix">
											<div class="invoice-sub">
												<p class="font-14 mb-5">Account No: <strong class="weight-600">123 456 789</strong></p>
												<p class="font-14 mb-5">Code: <strong class="weight-600">4556</strong></p>
											</div>
											<div class="invoice-rate font-20 weight-600">10 Jan 2018</div>
											<div class="invoice-subtotal"><span class="weight-600 font-24 text-danger">$8000</span></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h4 class="text-center pb-20">Thank You!!</h4>
					</div>
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