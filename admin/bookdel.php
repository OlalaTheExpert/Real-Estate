<?php
							 include('db.php');
							 
							 if(isset($_POST['del']))
							 {
								$did = $_POST['id'];
								
								
								$sql ="DELETE FROM `bookings` WHERE id = '$did'" ;
								if(mysqli_query($con,$sql))
								{
								 echo '<script type="text/javascript">alert("Delete the Room") </script>' ;
										
										header("Location: roomdel.php");
								}else {
									echo '<script>alert("Sorry ! Check The System") </script>' ;
								}
							 }
							
							?>