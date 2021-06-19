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
	<title>Western Trains | Payments</title>


	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
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
	
<style type="text/css">
	@media print {
		
			#btnprint{
				display: none;
			}
			#btnprint1{
				display: none;
			}
			#footer1{
				display: none;
			}
			#th{
				display: none;
			}
 
 			#h4{
				display: none;
			}
			#p1{
				display: none;
			}
			#te{
				float: left;
				margin-left: 46rem;
				margin-top: 0.2rem;
				font-size: 25px !important;
			}


			main {
				box-shadow: none;
				margin: 0;
			}

			span:empty {
				display: none;
			}

			.add,
			.cut {
				display: none;
			}
		}

		@page {
			margin: 0;
		}
	}


</style>
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
						<!-- <a class="dropdown-item" href="usersetting.php"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="usersetting.php"><i class="dw dw-settings2"></i> Setting</a>						 -->
						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>


	<div class="left-side-bar">
	<div class="brand-logo" style=" margin-top: 1rem;" >
			<a href="dashboard.php">
			<img src="vendors/images/trainlogo1.png" alt="" class="light-logo">
			
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
								<span class="micon dw dw-edit1"></span><span class="mtext">Book</span>
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
								<span class="micon dw dw-road"></span><span class="mtext">Routes</span>
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
		<?php
						include ('db.php');
						$sql = "select * from payment";
						$re = mysqli_query($con,$sql);
						$book =0;
						while($row=mysqli_fetch_array($re) )
						{
							$book = $book + 1;

						}
						?>
						<?php
						include ('db.php');
						$sql = "select * from addtrain";
						$re = mysqli_query($con,$sql);
						$pr=0;
					    while($row=mysqli_fetch_array($re) )
						{
							$pr = $row['fare'];
							$tot = $pr * $book;

						}
                      ?>
					  <?php
						include ('db.php');
						$sql = "select ttot from payment";
						$re = mysqli_query($con,$sql);
						$sum=0;
						while($row=mysqli_fetch_array($re) )
						{
							$sum+=$row['ttot'];

						}
						?>
			

				<!-- Contextual classes Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div>
							<h4 class="text-blue h4"><span id="h4">Payments </span><span class="pull-right" style="font-size:12px;" id="te"> Total Earnings</span></h4>
                            <p><span id="p1">Payments done and settled </span><span class="pull-right" style="font-weight:bold;font-size:20px;">Ksh. <?php	echo $sum; ?></span></p>
							
                         
                        </div>
                    </div>
					

						
																
								
								<div class="table table-striped">
							
					
						<table class="table table-striped">
						<thead>
                                        <tr>
                                            <th>Name</th>
											<th>Departure</th>
                                            <th>Destination</th>
											<th>Date</th>
											<th>Phone</th>
											
											<th>Seat NO</th>
											<th>Price</th>
											<th id="th">Print</th>

                                        </tr>
                                    </thead>
                                    <tbody>

									<?php
										include ('db.php');
										$sql="select * from payment";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{

											$id = $row['id'];

											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['departure']."</td>
                                                    <td>".$row['destination']."</td>
													<td>".$row['tdate']."</td>
													<td>".$row['phone']."</td>
													
													<td>".$row['selected_seat']."</td>
													<td>".$row['ttot']."</td>
													<td><a href=print.php?pid=".$id ." <button class='btn btn-primary' id='btnprint1'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['departure']."</td>
                                                    <td>".$row['destination']."</td>
													
													<td>".$row['tdate']."</td>
													<td>".$row['phone']."</td>
													
													<td>".$row['selected_seat']."</td>
													<td>".$row['ttot']."</td>
													<td><a href=print.php?pid=".$id ." <button class='btn btn-primary' id='btnprint1'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";

											}

										}


									?>

                                    </tbody>
						</table>
				 <button class="btn btn-outline-primary" onclick="print()" id="btnprint"><i class="fa fa-download"></i> Generate Report</button>

					</div>
				</div>

</div>
</div>

			<div class="footer-wrap pd-20 mb-20 card-box" id="footer1">
				<p>© Copyright WesternTrains. All Rights Reserved</p>
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