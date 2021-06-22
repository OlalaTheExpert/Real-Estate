<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
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
                            $date = $_POST['date'];
                            $status = $_POST['status'];		
						
							$qry = "INSERT INTO userbook(name, email, gender, phone, property_type, location, capacity, price, landlord, contact, date, status) VALUES ('$name','$email','$gender','$phone','$property_type' '$location','$capacity','$price','$landlord','$contact', '$date', 'booked')";
							$result=mysqli_query($conn,$qry) or die(mysqli_error($conn));
							if($result>0){
                                 $_SESSION['email'] = $myusername;
                               	echo "<script type = \"text/javascript\">
											alert(\"Successfully Booked\");
											window.location = (\"user.php\")
											</script>";
                        }else{
								echo "<script type = \"text/javascript\">
											alert(\"Booking Failed. Try Again\");
											window.location = (\"login.php\")
											</script>";
							}
						}
						
					  ?>
   