<?php
session_start();
error_reporting('E_NOTICE');
function validate()
{
if(isset($_POST['Submit'])){
  // code for check server side validation
  if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
    $msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.
    $pan=$_POST['pan'];
    $con=mysql_connect("localhost","root","");
    $select=mysql_select_db("aadhaar",$con);
    $query="Update information set pan=".$pan." where pincode='110002' ";
    $result=mysql_query($query);
    header('location:Pan.php');
  }
  else{// Captcha verification is Correct. Final Code Execute here!    
    $msg="<span style='color:green'>The Validation code has been matched.</span>";  
    header('location:details.php');
  }
} 
}
?>
<html>
<head>
<meta charset="utf-8">
<link href="./css/style.css" rel="stylesheet">
<script type='text/javascript'>
function refreshCaptcha(){
  var img = document.images['captchaimg'];
  img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
?>
</script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="progress.css">
</head>
<body>
<?php
include('header.php');
?>
<center>
<ol style="margin: 5%"class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Step 1</li>
    <li class="progtrckr-todo">Step 2</li>
    <li class="progtrckr-todo">Step 3</li>
</ol>

<div class="form-group">
<form action="<?php validate(); ?>" method="POST">
<table cellpadding="50px" cellspacing="50px" style="margin-top:10%;margin-bottom: 2%">
<tr>
  <td><label class="control-label" for="inputSmall">Enter Legal Name : </label></td>
  <td><input class="form-control input-sm" type="text" id="inputSmall" name="legal" width="400px" required="true"></td>
</tr>
<tr>
<td>
	<label> </label>
</td>
</tr>
<tr>
  <td><label class="control-label" for="inputSmall">Enter Marketing Name : </label></td>
  <td><input class="form-control input-sm" type="text" id="inputSmall" name="marketing" width="400px" required="true"></td>
</tr>
<tr>
<td>
	<label> </label>
</td>
</tr>
<tr>
  <td><label class="control-label" for="inputSmall">Enter PAN Card Number of the Merchant: </label></td>
  <td><input name="pan" class="form-control input-sm" type="text" id="inputSmall" width="400px" required="true"></td>

</tr>
<tr>
<td>
	<label> </label>
</td>
</tr>
<tr>
  <td><label class="control-label" for="inputSmall">Enter PAN Card Number of the Merchant Promoter : </label></td>
  <td><input name="pan1" class="form-control input-sm" type="text" id="inputSmall" width="400px" required="true"></td>

</tr>
<tr>
<td>
	<label> </label>
</td>
</tr>
<tr>
  <td><label class="control-label" for="inputSmall">Enter Current Account Number : </label></td>
  <td><input class="form-control input-sm" type="number" id="inputSmall" name="account" width="400px" required="true"></td>
</tr>
<tr>
<td>
	<label> </label>
</td>
</tr>
<tr>
  <td><label class="control-label" for="inputSmall">Enter Owner's Aadhaar Card Number : </label></td>
  <td><input name="aadhaar" class="form-control input-sm" type="text" id="inputSmall" width="400px" required="true"></td>
</tr>

</table>
<fieldset>
<legend><b> Constitution : </b></legend>
<input type="radio" name="constitution" value="male" checked> <b>Individual</b>
  <input type="radio" name="constitution" value="female"> <b>Partnership</b>
  <input type="radio" name="constitution" value="other"><b>Trust</b>
  <input type="radio" name="constitution" value="male"><b> Private Company
  <input type="radio" name="constitution" value="female"><b>Public Company
  <input type="radio" name="constitution" value="other"> <b>Sole Proprieter<br>
  <input type="radio" name="constitution" value="male" > <b>HUF
  <input type="radio" name="constitution" value="female"> <b>Government
  <input type="radio" name="constitution" value="other"><b>Society
  <input type="radio" name="constitution" value="male"><b> Associated Persons
  <input type="radio" name="constitution" value="female"> <b>Others
  </fieldset>
  <br><br>
  <center>
<form action="<? $_PHP_SELF ?>" method="post" name="form1" id="form1" >
  <table width="600px" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="right" valign="top"> Validation code:</td>
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="captcha_code" name="captcha_code" type="text">
        <br>
        <!-- Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td> -->
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" onclick="validate();" value="Submit" class="btn btn-success" style="background-color: #8C001A;align:center;" ></td>
    </tr>
  </table>
</form>
</center>
<!-- <input class="btn btn-success" style="background-color: #8C001A;" type="submit" name="submit" value="Submit"> </input> -->
</form>
</div>

</center>
</body>
</html>