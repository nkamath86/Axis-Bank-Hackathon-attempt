<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-theme.css">
  <link rel="stylesheet" href="bootstrap-theme.min.css">
	<title></title>
</head>
<body>

<?php
error_reporting('E_NOTICE');
include('header.php');
?>


<center>
<form  action="otp2.php" method="POST">
<table><tr><td>OTP : </td><td>
<input class="form-control input-lg" placeholder="Enter the Otp sent on your email" type="text" id="inputSmall" name="legal"  required="true" style="height:40px; width:300px;"></td></tr></table>
<br>
<input type="hidden" name="otp" value=<?php echo $_GET['code'];?>> </input>

 <div class="row" style="margin-left:35%;margin-right:35%;padding-top: 5px">
 	<div class="col-xs-12 col-sm-12 col-md-12">
        <input type="submit" name="submit" value="submit" class="btn btn-lg btn-block" style="background-color: #8c001a;color: white"></input>
    </div>
</div>
</form>
</center>
</body>
</html>
