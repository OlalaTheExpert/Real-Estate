<?php

include ('db.php');

$id=$_GET['eid'];
if($id=="")
{
echo '<script>alert("Sorry ! Wrong Entry") </script>' ;
		header("Location: train.php");


}

else{
$view="DELETE FROM `trains` WHERE id ='$id' ";

	if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Train Deleted Successfully") </script>' ;
		header("Location: train.php");
	}


}


?>