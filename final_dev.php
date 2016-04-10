<?php
error_reporting('E_NOTICE');
$con=mysql_connect("localhost","root","");
$select=mysql_select_db("aadhaar",$con);
$query="SELECT * From information";
$result=mysql_query($query);
$rows=mysql_fetch_array($result);
?>
<html>
 <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-theme.css">
  <link rel="stylesheet" href="bootstrap-theme.min.css">
  <script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
  <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.6-dist/js/npm.js"></script>
<body>
<center>

<?php
include('header.php');
$code=rand(100000,500000)."AXISMER";
?>




<fieldset style="margin:10%;margin-left: 20%;margin-right: 20%">
  <legend>
    Your Details
  </legend>
<table style="align-content: center;">
<tr>  
<td>Name           : </td><td> <?php echo $rows['name']; ?></td></tr><br>
<tr><td>UID            :  </td><td><?php echo $rows['uid']; ?></td></tr><br>
<tr><td>Pan          :  </td><td><?php echo $rows['pan']; ?></td></tr> <br>
<tr><td>Phone Number       :</td><td>  <?php echo $rows['phone']; ?></td></tr><br>
<tr><td>Date of Birth      :</td> <td> <?php echo $rows['dob']; ?></td></tr><br>
<tr><td>Place of Residence : </td><td> <?php echo $rows['street'].",".$rows['district'].",".$rows['state'].",".$rows['pincode'];?></td></tr></table>  
  
</label>

</fieldset>
<a href="http://localhost/Axis/otp.php?code=<?php echo $code;?>">Click here for authentication</a> 

</center>





 <?php
//if "email" variable is filled out, send email
require_once('/opt/lampp/htdocs/Axis/PHPMailer-master/class.phpmailer.php');

include("/opt/lampp/htdocs/Axis/PHPMailer-master/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded


 

$mail             = new PHPMailer();
//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);
$body =   "OTP is ".$code;

$mail->IsSMTP(); // telling the class to use SMTP

$mail->Host       = "smtp.gmail.com"; // SMTP server

$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)

// 1 = errors and messages

// 2 = messages only

$mail->SMTPAuth   = true;                  // enable SMTP authentication

$mail->SMTPSecure = "tls";                 // sets the prefix to the servier

$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server

$mail->Port       = 587;                   // set the SMTP port for the GMAIL server

$mail->Username   = "djcomps.se.a@gmail.com";  // GMAIL username

$mail->Password   = "djcomps.te";            // GMAIL password

$mail->SetFrom('djcomps.se.a@gmail.com', 'Hello');

$mail->AddReplyTo("nagendra.s.kamath@gmail.com","Hello");

$mail->Subject    = "AXIS Verification code";

$mail->AltBody    = "Your Verifiaction Code is" +$code ; // optional, comment out and test

$mail->MsgHTML($body);

$address =" nagendra.s.kamath@gmail.com";

$mail->AddAddress($address, " nagendra.s.kamath@gmail.com");
 
$mail->SMTPDebug=0;

//$mail->AddAttachment("images/phpmailer.gif");      // attachment

//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {

echo "Mailer Error: " ;
    
}   
    ?>









</body>
</html>



