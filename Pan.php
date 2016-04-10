
<html>
<head>
<meta charset="utf-8">
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
<form action="details.php" method="POST">
<table cellpadding="50px" cellspacing="50px" style="margin-top:10%;margin-bottom: 2%">
<tr>
  <td><label class="control-label" for="inputSmall">Enter Legal Name : </label></td>
  <td><input class="form-control input-sm" type="text" pattern="[A-Za-z]{3,18}" id="inputSmall" name="legal" width="400px" required="true"></td>
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
  <td><input name="pan" class="form-control input-sm" type="text" id="inputSmall" minlength="10" maxlength="10" width="400px" required="true"></td>

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
  <td><input class="form-control input-sm" type="text" id="inputSmall" pattern="[0-9]{12}" name="account" minlength="12" maxlength="12" width="400px" required="true"></td>
</tr>
<tr>
<td>
	<label> </label>
</td>
</tr>
<tr>
  <td><label class="control-label" for="inputSmall">Enter Owner's Aadhaar Card Number : </label></td>
  <td><input name="aadhaar" pattern="[0-9]{12}"  class="form-control input-sm" type="text" id="inputSmall" width="400px" required="true"></td>
</tr>

</table>
<fieldset>
<legend><b> Constitution : </b></legend>
<input type="radio" name="constitution" value="male" checked> <b>Individual</b>
  <input type="radio" name="constitution" value="female"> <b>Partnership</b>
  <input type="radio" name="constitution" value="other"><b>Trust</b>
  <input type="radio" name="constitution" value="male"><b> Private Company
  <input type="radio" name="constitution" value="female"><b>Public Company
  <input type="radio" name="constitution" value="other"> <b>Sole Proprieter
  <input type="radio" name="constitution" value="male" > <b>HUF
  <input type="radio" name="constitution" value="female"> <b>Government
  <input type="radio" name="constitution" value="other"><b>Society
  <input type="radio" name="constitution" value="male"><b> Associated Persons
  <br>
  <br>
  <table cellspacing="5%" cellpadding="50px"><tr><td><input type="radio" name="constitution" value="female"> <b>Others &nbsp;&nbsp;&nbsp;</b> </td>
  <td><br></td>
  <td>
  <input name="others" class="form-control input-sm" type="text" placeholder="Please Specify" id="inputSmall" width="100px">
  </td>
  </tr>
  <table>
  <br>
  </fieldset>
  
<input class="btn btn-success" style="background-color: #8C001A;" type="submit" name="submit" value="Submit"> </input>
</form>
</div>

</center>
</body>
</html>

