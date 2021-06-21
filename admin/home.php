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
						<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analyti"></span><span class="mtext">Requests</span>
						</a>
						<ul class="submenu">
							<li><a href="bookings.php">Requests</a></li>
							<li><a href="approved.php">Approved</a></li>
							
						</ul>
					</li>

						<li>
							<a href="clients.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-adde"></span><span class="mtext">Clients</span>
							</a>
						</li>
																
						<li>
							<a href="landlords.php" class="dropdown-toggle no-arrow">
								<span class="micon dw dw-moneye"></span><span class="mtext">Landlords</span>
							</a>
						</li>
						
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

			}
						?>




	<div class="main-container ">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">

					 <div class="col-xl-12 col-md-12 mb-4">
        <div class="card">
            <div class="box">
                <div class="content" style="color:#430f53;font-size:30px;letter-spacing: 5px;text-transform: uppercase;
                          font-family: 'Lato', sans-serif; font-weight: bold; text-align:center; padding-top:0px; margin-bottom: 40px;">

                    <h2>WELCOME !</h2>
                    <h3 style="text-transform: capitalize;"><?php echo $_SESSION["user"]; ?></h3>


                </div>
            </div>
</div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4 align-items-center">
        <div class="card" style="text-align:center">
            <div class="box">
                <div class="content">
                    <h2><i class="fa fa-user fa-3x text-gray-300"></i></h2>
                    <h3>Profile</h3>

                    <a href="#">View More</a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4 align-items-center">
        <div class="card" style="text-align:center">
            <div class="box">
                <div class="content">
                    <h2><i class="fa fa-users fa-3x text-gray-300"></i></h2>
                    <h3>Clients</h3>

                    <a href="#">View More</a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4 align-items-center">
        <div class="card" style="text-align:center">
            <div class="box">
                <div class="content">
                    <h2><i class="fa fa-shopping-cart fa-3x"></i></h2>
                    <h3>Requests</h3>

                    <a href="#">View More</a>
                </div>
            </div>
          </div>
        </div>

		<div class="col-xl-4 col-md-6 mb-4 align-items-center">
         <div class="card" style="text-align:center">
            <div class="box">
                <div class="content">
                    <h2><i class="fa fa-shopping-cart fa-3x"></i></h2>
                    <h3>Landlords</h3>

                    <a href="#">View More</a>
                </div>
            </div>
          </div>
        </div>
		<div class="col-xl-4 col-md-6 mb-4 align-items-center">
        <div class="card" style="text-align:center">
            <div class="box">
                <div class="content">
                    <h2><i class="fa fa-setting fa-3x"> 5</i></h2>
                    <h3>Settings</h3>

                    <a href="#">View More</a>
                </div>
            </div>
          </div>
        </div>


<div class="col-xl-4 col-md-6 mb-4 ">
        <div class="card" >
            <div class="box">
                <div class="content" style="text-align:center">
                    <h2><i class="fa fa-comments fa-3x text-gray-300"></i></h2>
                    <h3>Messages</h3>

                    <a href="#">View More</a>
                </div>
            </div>
        </div>
</div>
    </div>


				<div class="col-md-11 text-left">
					<div class="dropdown">
					<div class="weight-600 font-10 text-blue">
						<?php
							echo date(" d/m/Y");
							?>
						</div>

					</div>
				</div>
			</div>
			</div>

			</div>
</div>
<div class="footer-wrap pd-20 mb-20 card-box">
				<p>© Copyright Cytonn Investments. All Rights Reserved</p>
			</div>

	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
</body>
</html>