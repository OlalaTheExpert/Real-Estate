<?php  
 session_start();  
 if(isset($_SESSION["email"]))  
 {  
    //   header("location:home.php");  
 }  
 
 ?>
<?php

  $con = mysqli_connect("localhost","root","","real") or die(mysqli_error());
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['email']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT user_id FROM users WHERE email = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
           $_SESSION['email'] = $myusername;
      
     echo "<script type = \"text/javascript\">
            alert(\"Login Successfully.\");
            window.location = (\"user.php\")
            </script>";
            } else{
              
                echo "<script type = \"text/javascript\">
                    alert(\"Login Failed. Try Again\");
                    window.location = (\"login.php\")
                    </script>";
            }
   }
?>
<!DOCTYPE html>
<html>

<head>
    <title>CYTONN REAL ESTATE PROPERTIES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/login.css">
    <link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <h2>CYTONN INVESTMENTS</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social-f"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-g"><i class="fa fa-google-plus"></i></a>
                    <!-- <a href="#" class="social"><i class="fa fa-linkedin"></i></a> -->
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" name="fname" required />
                <input type="email" placeholder="Email" name="email" required/>               
                <input type="number" placeholder="ID Number" name="id_no" required/>
                 <!-- <input type="phone" placeholder="Phone Number" name="phone" required/> -->
               
                <input type="password" placeholder="Password" name="pass" required />
                 
                <button type="submit" name="save">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social-f"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-g"><i class="fa fa-google-plus"></i></a>
                    <!-- <a href="#" class="social"><i class="fa fa-linkedin"></i></a> -->
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" name="email" required />
                <input type="password" placeholder="Password" name="pass" required />
                <a href="forgot-password.php">Forgot your password?</a>
                <a href="index.php">Back to home</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with Cytonn Investments</p>
                    <button class="ghost" id="signUp" >Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2020 CYTONN INVESTMENTS . All Rights Reserved | Design by <a href="index.php ">CYTONN INVESTMENTS PROPERTIES</a>

        </p>
    </footer>

    <script src="js/login.js"></script>
</body>

</html>
<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$email = $_POST['email'];
							$id_no = $_POST['id_no'];
							$phone = $_POST['phone'];																				
							$password = $_POST['pass'];						
						
							$qry = "INSERT INTO users(name, email, idnumber, phone, pass) VALUES ('$fname','$email','$id_no','$phone','$pass')";
							$result=mysqli_query($conn,$qry) or die(mysqli_error($conn));
							if($result>0){
                                 $_SESSION['email'] = $myusername;
                               	echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered & Logged in.\");
											window.location = (\"user.php\")
											</script>";
                        }else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"login.php\")
											</script>";
							}
						}
						
					  ?>
   