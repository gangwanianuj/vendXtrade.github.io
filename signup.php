<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require('conn.php');
$fullname=$_POST['name'];
$phnnumber=$_POST['phone_number'];
// $username=$_POST['username'];

$email=$_POST['email'];
$pan=$_POST['txtPANCard'];
$pwd=$_POST['password'];
$pwd1=$_POST['cpassword'];
// echo $pwd,$pwd1;
// exit;
$pass=SHA1($_POST['password']); 
$cpass=SHA1($_POST['cpassword']);
// $bal=$_POST['balance'];
if(isset($_POST['g-recaptcha-response']))
{
    $secretkey="6Le76gElAAAAAIb2akuQ2LgmtYHnGWgsbFX-z4Wa";
    $ip=$_SERVER['REMOTE_ADDR'];
    $response=$_POST['g-recaptcha-response'];
    $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
    $fire=file_get_contents($url);
    // echo $fire;
    $data=json_decode($fire);
    $query1="SELECT  * FROM `users` WHERE `email` = '$email';";
    $res1=mysqli_query($dbconn,$query1);
    $row=mysqli_fetch_assoc($res1);
   //  $x="kuchh bhi";
    
    if($data->success==true)
    {
   //   echo "success";
   if($pwd==$pwd1)
   {
     if(isset($row["email"]))
     {
      // echo " email already exist";
      header("location:signup2.php?a=1");
     }
     else
     {
      if(preg_match("/^[6-9]\d{9}$/",$phnnumber))
      {

         if (!preg_match("/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/", $pan)) 
         {
            // echo "Invalid pan number";
            header("location:signup2.php?b=1");
         }
          else
          {
           $query="INSERT INTO `users` (`name`, `phonenumber`, `email`, `pannumber`, `password`, `cpassword`, `balance`) VALUES ('$fullname', '$phnnumber', '$email', '$pan', '$pass', '$cpass', '500');";
           $res=mysqli_query($dbconn,$query) or die('error in query');
           $mail = new PHPMailer(true);



      try 
   {
      // Server settings
     $mail->SMTPDebug = 2;                      // Enable verbose debug output
     $mail->isSMTP();                                            // Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
     $mail->Username   = 'gangwanianuj1213@gmail.com';                     // SMTP username
     $mail->Password   = 'pgncqcvucwgdtjhs';                               // SMTP password
     $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
     $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
     // Recipients
     $mail->setFrom('gangwanianuj1213@gmail.com', 'VendXTrade');
     $mail->addAddress($email, 'Joe User');     // Add a recipient
     // $mail->addAddress('ellen@example.com');               // Name is optional
     // $mail->addReplyTo('info@example.com', 'Information');
     // $mail->addCC('cc@example.com');
     // $mail->addBCC('bcc@example.com');
     // Attachments
     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
     // Content
     $mail->isHTML(true);                                  // Set email format to HTML
     $mail->Subject = 'vendxtrade verification';
     $mail->Body    = 'your registration is successfully completetd please click on below link to verify <b>in bold!</b>';
    //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
     $mail->send();
     echo 'Message has been sent';


     exit(header("location:signin.php?i=1"));
       
   }
    
     catch( Exception $e)
     {
     echo "mail not sent";
     }
   


          }

      }

       else
       {
        //  echo "invalid phone number";
        header("location:signup2.php?c=1");
       }
     }
        
    }
    else{
      // echo"password doesnot match";
      header("location:signup2.php?e=1");
    }


   }
   

  else
  {
        // echo "please refill captcha";
        header("location:signup2.php?d=1");
  }
} 
  
else
{
        // echo "captcha error";
        header("location:signup2.php?d=1");
}
    
