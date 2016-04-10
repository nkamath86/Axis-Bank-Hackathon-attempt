<?php 
$otp=$_POST['otp']; 
$legal=$_POST['legal'];
//echo $otp;
//echo $legal;
if($otp===$legal)
{
	header('location:demo.php');
//	echo "Verification Successful";
}
else{
echo $otp;
echo $legal;
}
?>