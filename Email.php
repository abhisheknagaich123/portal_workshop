
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require ('PHPMailer/Exception.php');
require ('PHPMailer/SMTP.php');
require ('PHPMailer/PHPMailer.php');

if(isset($_POST['submit']))
    {

$fname=$_POST['name'];
$email=$_POST['email'];
$cont=$_POST['contact'];
$event=$_POST['event'] ;
    $conn=mysqli_connect('localhost','root','','gla');
    if(!$conn)
    {
        echo "You are not connect to the server";
    }

    $res=mysqli_query($conn,"select * from student_reg  where email='$email'");
    $check=mysqli_num_rows($res);
    if ($check>0) {
       
       ?>

          <script> alert("Email already exist")
          document.location.href='index.php';
      </script>
         
       
       <?php

       
    }
    else{
        $sql = "INSERT INTO student_reg (username,email, contact,workshop_name)
VALUES ('$fname', '$email', '$cont','$event')";
$query=mysqli_query($conn, $sql);
$mail = new PHPMailer(true);

try {
   
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'abhishek3102002@gmail.com';                     //SMTP username
    $mail->Password   = 'hwjbogyfgxxwvnvr';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('abhishek3102002@gmail.com', 'abhishek310200');
    $mail->addAddress($_POST['email']);     //Add a recipient
                  //Name is optional
   ;
    

       //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Workshop Portal Registration';
    $mail->Body    = "Workshop Name: $event <br> username:$fname <br> contact=$cont<br>";
   

    $mail->send();
    echo "<script> alert( 'Email send successfully in your $email ');
          document.location.href='index.php';
         </script>
    ";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
     
    
}
?>