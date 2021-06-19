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
	<title>Western Trains | Train Routes</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/img/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
        <!-- Custom Styles-->
        <link rel="stylesheet" type="text/css" href="vendors/styles/custom-styles.css">
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
	<?php 
									$query = mysqli_query($con, "SELECT * FROM trains "); 
									while($row = mysqli_fetch_array($query))
									{
										$id = $row['id'];
										$name = $row['name'];
										$seats = $row['seats'];
										$booked_seats = $row['booked_seats'];
                                ?>


	
	



			

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			
				
				
	
				
				
					<h4 class="text-blue h4">Available Train Routes
				
						
							</h4>
							
									
			</div>
					<div class="pb-20">
						<table class="table table-striped">
							<thead>
								<tr>
                
               
                <th scope="col">From</th>
                <th scope="col">To</th>
				<th scope="col">Fare(Ksh)</th>
				
                <th scope="col">Date</th>
                <th scope="col">Time</th>
               
				
                <th scope="col">Remove Train</th>
              </tr>
							</thead>
							<tbody>
							<?php
							 		include('db.php');	
							  $sql = "SELECT * FROM `routes`";
							  $re = mysqli_query($con,$sql);
							  
						
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
												
																					
												<td>".$row['departure']."</td>
												<td>".$row['destination']."</td>
												<td>".$row['price']."</td>
													
												<td>".$row['date']."</td>												
												<td>".$row['time']."</td>
                                                
                                               
												
													<td><a href=delroute.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Remove</button></td>
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
												
																				
												<td>".$row['departure']."</td>
												<td>".$row['destination']."</td>
												<td>".$row['price']."</td>
														
												<td>".$row['date']."</td>												
												<td>".$row['time']."</td>
                                                
                                                
												
												<td><a href=delroute.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Remove</button></td>
																										
																							
												
												</tr>";
											
											}
										
										}
										
									?>
	
							</tbody>
						</table>

						
					</div>
					<button class='btn btn-primary btn text-center' data-toggle='modal' data-target='#myModal' style="float:center; margin-right:8rem;">
														Add Route
							</button>
				</div>
				<div class="panel-body">
                            
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:red; font-size:40px;">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"></h4>
                                        </div>
										<form name="form" method="post" action="">
					
						<div class="form-group row" style="margin-left:1rem;">
							<label class="col-sm-12 col-md-2 col-form-label">Train</label>
							<div class="col-sm-6 col-md-10">
								<select class="custom-select col-10" name="train" required="">
									<option selected="" disabled>Choose Train Available</option>

									<?php 
									$query = mysqli_query($con, "SELECT * FROM trains"); 
									while($row = mysqli_fetch_array($query))
									{
										$id = $row['id'];
										$name = $row['name'];
										$seats = $row['seats'];
										$booked_seats = $row['booked_seats'];
                                ?>

									<option value="<?php echo $id; ?>"><?php echo $name; ?></option>
									
									<?php } ?>
									
								</select>
							</div>
						</div>
						
						<div class="form-group row" style="margin-left:1rem;">
							<label class="col-sm-12 col-md-2 col-form-label">Departure</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-10" name="departure" required="">
									<option>Nairobi</option>
									<option>Kisumu</option>
									<option>Mombasa</option>
									
									
								</select>
							</div>
						</div>

						<div class="form-group row" style="margin-left:1rem;">
							<label class="col-sm-12 col-md-2 col-form-label">Destination</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-10" name="destination" required>
									<option>Kisumu</option>
									<option>Nairobi</option>
									<option>Mombasa</option>
									
									
								</select>
							</div>
						</div>
						<div class="form-group row" style="margin-left:1rem;">
							<label class="col-sm-12 col-md-2 col-form-label">Travelling Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="custom-select col-10" name="tdate" placeholder="Select Date" type="date" required min="<?php echo Date("Y-m-d") ?>">
							</div>
						</div>
						<div class="form-group row" style="margin-left:1rem;">
							<label class="col-sm-12 col-md-2 col-form-label">Travelling Time</label>
							<div class="col-sm-12 col-md-10">
								<input class="custom-select col-10" name="ttime" placeholder="Select Time" type="time">
							</div>
						</div>

						<div class="form-group row" style="margin-left:1rem;">
							<label class="col-sm-6 col-md-2 col-form-label">Fare(Ksh)</label>
							<div class="col-sm-6 col-md-6">
								<input class="form-control" value="20" name="fare" type="text" required="">
							</div>
						
						</div>
									
					
						<div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<input type="submit" name="submit" value="Add" class="btn btn-primary">
							 </form>
							 </div>
			
						
				</form>
										   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
			
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
							
							// $sql = "INSERT INTO addtrain (train, departure, destination, tdate, fare, seat)
							// VALUES ('".$_POST['train']."', '".$_POST['departure']."', '".$_POST['destination']."', '".$_POST['tdate']."', '".$_POST['fare']."', '".$_POST['seat']."')";

							$sql = "INSERT INTO routes (train_id, departure, destination, price, date, time)
							VALUES ('".$_POST['train']."', '".$_POST['departure']."', '".$_POST['destination']."', '".$_POST['fare']."', '".$_POST['tdate']."', '".$_POST['ttime']."')";
		
							
							if (mysqli_query($con, $sql)) {
							//echo "<script type='text/javascript'> alert('You've added Train successfully')</script>"; 
							
							echo "<script>
            alert('Route added Sent Successfully');
            window.location.href='routes.php';
            </script>";
							  
							} else {
                                echo mysqli_error($con);
							   echo '<script>alert("Fill out the requirements correctly") </script>' ;
							}
							
							}
							mysqli_close($con);
							?>

							<?php 
									}
							?>