 <p>Thank You for Booking a Train with us</p>

 <?php

    
    session_start();

    if(isset($_FILES['file'])){
        $errors= array();
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
        
        $expensions= array("jpeg","jpg","png","pdf");
        
        if(in_array($file_ext,$expensions)=== false){
           $errors[]="extension not allowed, please choose a PDF, JPEG or PNG file.";
        }
        
        if($file_size > 2097152) {
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true) {
           move_uploaded_file($file_tmp,"uploads/".$file_name); //The folder where you would like your file to be saved
           //echo "Success";
        }else{
           //print_r($errors);
        }  


    /* Exception class. */


    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];    
    $email = $_REQUEST['email'];
   //  $date = $_REQUEST['date'];

    $form_data = array("fname" => $fname, "email" => $email, "lname" => $lname);

    }
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';


    $message = "Dear " . $form_data['fname'] . "\r\n";
   // $message .= "We have already received your order\r\n";
    //$message .= "We will deliver the product for you as soon as possible.\r\n";
    $message .= " " . $form_data['lname'] . ".\r\n";
    $message .= "Below is your Western Train booking receipt.\r\n";
    //$message .= " " . $form_data['file'] . " \r\n";
    $message .= "\nThank You for trusting us.\r\n";
    //$message .= "Your travelling date is set on. " . $form_data['tdate'] . " \r\n";
  
    $message .= "Have a nice stay.\r\n";



    //PHPMailer Object
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->addAttachment("uploads/".$file_name);
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or  465/25/ 587 
    $mail->IsHTML(true);
    $mail->Username = "olalavictor01@gmail.com"; // Enter your Email
    $mail->Password = "olalavic"; // Enter your Email Password
    $mail->SetFrom("olalavictor01@gmail.com");
    $mail->Subject = "WESTERN TRAIN BOOKINGS";
    $mail->Body = $message;
   // $mail->addAttachment($file);
    $mail->AddAddress($email);



    if (!$mail->Send()) {
      
      header('location:feedback.php');
    } else {
        echo "<script>
            
            window.location.href='feedback.php';
           
            </script>";
    }

//      $con = mysqli_connect("localhost","root","","western-train") or die(mysql_error());
// // Check connection
// if (!$con) {
//   die("Connection failed: " . mysqli_connect_error());
// }



// if (mysqli_query($con, $sql)) { 
//   echo "<script>
//   alert('Ticket booked Successfully. Check your email');
//     </script>";
//   header('location:feedback.php');
  
// } else {
//    echo "<script>
//   alert('Ticket booked Successfully. Check your email');
//     </script>";
//   header('location:feedback.php');
//    }


    ?>