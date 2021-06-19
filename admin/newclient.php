<?php

include('includes/config.php');

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
	<title>Cytonn Investments | Bookings</title>

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
	<style>
	.content a{
		color:#17e06b;
		font-size:12px;
		letter-spacing: 2px;
		text-transform: uppercase;
		font-family: 'Lato', sans-serif;
		font-weight: bold;
		text-align:center;
		padding-top:0px;
		margin-bottom: 40px;
	}
	.content a:hover{
		color:#ff0202;
	}
	.card {
		border: 1px solid #17e06b;
	}
	</style>

<div class="header">
<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search" ></div>
			<div class="header-search" >
				<form>
					<div class="form-group mb-0" style="width:80vh; margin-left:3rem;">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">

							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>

								</div>

								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
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

			<div class="user-info-dropdown" style="margin-right:1rem;">
				<div class="dropdown" style="font-size: 20px; color: #14ff27; margin-top:.5rem;">
				<span class="user-name text-capitalize" ><span style="color:white;">Welcome</span>
						<?php echo $_SESSION["user"]; ?></span>&nbsp;&nbsp;<i class="dw dw-user" style="font-size:25px; color:#14ff27;"></i>

					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										 -->
						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="left-side-bar">
	<div class="brand-logo" style=" margin-top: 1rem;" >
			<a href="dashboard.php">
			<!-- <img src="vendors/images/trainlogo1.png" alt="" class="light-logo"> -->

			CYTONN
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
            <ul id="accordion-menu">
						
					
					<li>
						<a href="home.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>
					<li>
							<a href="property.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-tool"></span><span class="mtext">Properties</span>
							</a>
						</li>
					
						<li>
							<a href="bookings.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-trai"></span><span class="mtext">Requests</span>
							</a>
						</li>
							
						<li>
							<a href="clients.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-adde"></span><span class="mtext">Clients</span>
							</a>
						</li>	
						<!-- <li>
							<a href="addproperty.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-roade"></span><span class="mtext">New Property</span>
							</a>
						</li>											 -->
						<li>
							<a href="landlords.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-moneye"></span><span class="mtext">Landlords</span>
							</a>
						</li>
						<!-- <li>
							<a href="newclient.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-moneye"></span><span class="mtext">New Client</span>
							</a>
						</li>	 -->
						
						<li>
							<a href="messages.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-message"></span><span class="mtext">Messages</span>
							</a>
						</li>
				
					
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<a href="logout.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-logout"></span><span class="mtext" style="color:blue; font-weight: bold;">Logout</span>
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
			
<?php
						if(isset($_POST['send'])){
							
							$fname = $_POST['fname'];
							$email = $_POST['email'];
							$id_no = $_POST['id_no'];
							$phone = $_POST['phone'];
							$gender = $_POST['gender'];
							$location = $_POST['location'];
							$username = $_POST['username'];
							$password = md5($_POST['password']);
							
							
							
							
							$qry = "INSERT INTO user(fname, email, id_no, phone, username, password, location, gender) VALUES ('$fname','$email','$id_no','$phone','$username','$password','$location','$gender')";
							$result=mysqli_query($conn,$qry) or die(mysqli_error($conn));
							if($result>0){
								echo "<script type = \"text/javascript\">
											alert(\"Client Successfully Registered.\");
											window.location = (\"newclient.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Client Registration Failed. Try Again\");
											window.location = (\"newclient.php\")
											</script>";
							}
						}
						
					  ?>
				<div class="card-box mb-30">
					<!-- <div class="pd-30">
						<h4 class="text-blue h4">Bookings Done Successfully !</h4>
					</div> -->
					<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Add New Client</h4>
							<!-- <p class="mb-30">All bootstrap element classies</p> -->
						</div>
						
					</div>
					<form action="#" method="POST">
                    <div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" class="form-control" name="fname" required>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Phone Number</label>
									<input type="number" class="form-control"name="phone" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Email Address</label>
									<input type="email" class="form-control" name="email" required>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>ID Number</label>
									<input type="number" class="form-control" name="id_no" required>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
											<label>Gender</label>
											<select class="custom-select form-control" name="gender">												
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												
											</select>
										</div>
							</div>
                            
						</div>
                        <div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Location</label>
											<select class="custom-select form-control" name="location">												
												<option value="Nairobi">Nairobi</option>
												<option value="Thika">Thika</option>
                                                <option value="Nairobi">Nairobi</option>
												<option value="Thika">Thika</option>
												
											</select>
								</div>
							</div>
                            <div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Username </label>
									<input type="text" class="form-control" name="username" required>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Password </label>
									<input type="text" class="form-control" name="password" required>
								</div>
							</div>
							
                            
						</div>
							<div class="row">
                            <div class="pull-right">
<div class="col-md-6 col-sm-12">
								<div class="form-group">									
									<button type="submit" name="send" class="btn btn-primary btn-sm">Submit</button>
								</div>
                                </div>
                                <bottom class="btn btn-outline-primary"><i class="fa fa-download"></i> Generate Report</bottom>
							</div>
                            </div>			
					
						
					</form>
					<div class="collapse collapse-box" id="form-grid-form" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#form-grid"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#form-grid-form" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="form-grid">
			</div>
			</div>
</div>

			<div class="footer-wrap pd-20 mb-20 card-box">
				<p>© 2021 Cytonn Investments. All Rights Reserved</p>
			</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</html>