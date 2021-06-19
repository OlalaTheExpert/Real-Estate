<?php
session_start();
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?>

		
<?php
		if(!isset($_GET["rid"]))
		{

			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$id = $_GET['rid'];


				$sql ="Select * from bookings where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					//$title = $row['Title'];
					$id = $row['id'];
					$fname = $row['fname'];
					$lname = $row['lname'];
					$email = $row['email'];
					$age = $row['age'];
					$phone = $row['phone'];
					$gender = $row['gender'];
					$dept = $row['departure'];
					$dest = $row['destination'];
					$tdate = $row['tdate'];

					$com = $row['com'];
					$selected_seat= $row['selected_seat'];
					$firm = $row['stat'];

				}

			?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Western Trains | Bookings</title>

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
	<!-- <link rel="stylesheet" type="text/css" href="vendors/styles/custom-styles.css">
	 -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	
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
						<span class="user-name" style="font-weight: bold; font-size: 20px; color: blue;"><?php echo $_SESSION["user"]; ?></span>
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
			
				<?php
						include ('db.php');
						$sql = "select * from payment";
						$re = mysqli_query($con,$sql);
						$c =0;
						while($row=mysqli_fetch_array($re) )
						{
							$c = $c + 1;


								//}

						}

?>
<?php
						include ('db.php');
						$sql = "select * from payment";
						$re = mysqli_query($con,$sql);
						$sn =1;
						while($row=mysqli_fetch_array($re) )
						{
							$sn = $sn + 1;


								//}

						}
						?>

						<?php
						include ('db.php');
						$sql = "select * from routes";
						$re = mysqli_query($con,$sql);
						$pr=0;
					    while($row=mysqli_fetch_array($re) )
						{
							$pr = $row['price'];
							$totl = $pr * $sn;

						}
                      ?>
				


        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <!-- <div class="col-md-12">
                        <h1 class="page-header">
                            Room Booking<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div> -->


					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Booking Conformation
                        </div>
                        <div class="panel-body">

							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>

                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $fname .$lname; ?> </th>

                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>

                                        </tr>
										<tr>
                                            <th>Age </th>
                                            <th><?php echo $age; ?></th>

                                        </tr>
										<tr>
                                            <th>Phone NO </th>
                                            <th><?php echo $phone;  ?></th>

                                        </tr>
										<tr>
                                            <th>Gender </th>
                                            <th><?php echo $gender; ?></th>

                                        </tr>
										<tr>
                                            <th>Departure </th>
                                            <th><?php echo $dept; ?></th>

                                        </tr>
										<tr>
                                            <th>Destination </th>
                                            <th><?php echo $dest; ?></th>

                                        </tr>
										<tr>
                                            <th>Travelling Date </th>
                                            <th><?php echo $tdate; ?></th>

                                        </tr>

										<tr>
                                            <th>Comm. Channel</th>
                                            <th><?php echo $com; ?></th>

                                        </tr>
										<tr>
                                            <th>Comm. Channel</th>
                                            <th><?php echo $selected_seat; ?></th>

                                        </tr>
										<tr>
                                            <th>Price</th>
                                            <th><?php echo $pr; ?></th>

                                        </tr>

                                </table>
                            </div>



                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Select the Confirmation</label>
														<select name="conf"class="form-control">
															
															<option value="Conform">Confirm</option>

														</select>
										 </div>
							<input type="submit" name="co" value="Approve" class="btn btn-success">

							</form>
                        </div>
                    </div>
					</div>




					<div class="col-md-4 col-sm-4">
                    
					</div>
                </div>
                <!-- /. ROW  -->

                </div>
                <!-- /. ROW  -->



				</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<?php 
			if(isset($_GET["rid"])){
	$id = $_GET['rid'];


	?>
		</div>
</div>

			<div class="footer-wrap pd-20 mb-20 card-box">
				<p>© Copyright WesternTrains. All Rights Reserved</p>
			</div>
	<!-- js -->

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

<?php


					if(isset($_POST['co']))
						{
							$st = $_POST['conf'];



										if( $st=="Conform")
											{
												
												$update = "UPDATE `bookings` SET `stat` = 0 WHERE id = $id";

												if(mysqli_query($con, $update)){
													echo 'Success';
												}
											}

												$sql = "INSERT INTO `payment`(`fname`, `lname`, `gender`, `departure`, `destination`, `phone`, `email`, `tdate`, `ttot`, `selected_seat` )
														VALUES ('$fname','$lname','$gender','$dept','$dest', '$phone','$email','$tdate', '$pr', '$selected_seat')";

														if(mysqli_query($con,$sql))
														{
															

															//echo "<script type='text/javascript'> alert('Booking Conform')</script>";
															echo "<script type='text/javascript'> window.location='payment.php'</script>";



														}

											


							

						}

					}

				}
	
						?>

