
<?php
 ob_start();
	include('db.php');

	//$id = $_GET['pid'];
    



	$sql = "select * from test";
	$re = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($re)) {
		$id = $row['id'];
		$fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        // $date = $row['tdate'];
		
	}


	?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Sending <?php echo  $fname . " " . $lname ?> Ticket </title>
    <link href="vendors/styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendors/styles/subsc.css">
</head>

<body>
    <div class="newsletter-subscribe">
        <div class="container"> 
            <div class="intro">
                <h2 class="text-center text-uppercase"><?php echo  $fname . " " . $lname ?> TICKET</h2>
                <p class="text-center">Ensure you've downloded the ticket before sending and contercheck the names</p>
            </div>
            <form class="form-inline" method="post" action="sendticket.php" enctype="multipart/form-data">
                <div class="form-group">
                <input class="form-control" type="text" name="fname" value=<?php echo  $fname ?> hidden/>
                <input class="form-control" type="text" name="lname" value=<?php echo  $lname ?> hidden/>
                <input class="form-control" type="email" name="email" value=<?php echo $email ?> hidden/>
               
            
             <input class="form-control" name="file" type="file" id="customFile" required/>
             </div>

                <input type="submit" class="btn btn-primary" value="Send">
            </form>
        </div>
    </div>
    <script src="vendor/scripts/jquery.min.js"></script>
    <script src="vendor/scripts/bootstrap.bundle.min.js"></script>
</body>

</html>

