<?php
session_start();
include('header.php');
echo $_SESSION['aadhaar'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="progress.css">
	<title></title>
</head>
<body>

<center>
<ol style="margin:5%;margin-top: 0px" class="progtrckr" data-progtrckr-steps="5">
    <li class="progtrckr-done">Step 1</li>
    <li class="progtrckr-done">Step 2</li>
    <li class="progtrckr-done">Step 3</li>
</ol>

<textarea readonly="true" rows="30" cols="100" style="margin-left: 5%;">
	I hereby represent that I do not possess any Registration Document for business activity which is carried in name of ________________________________________ over and above the 

KYC documentation submitted by me to Axis Bank for opening a Bank Account. I agree and undertake the card acceptance facilities and discharge all obligations therewith and to 

submit any additional, specific documents on demand by Axis Bank for opening and operating a Bank Account/POS facility with Axis Bank. Notwithstanding any change in the 

constitution of my Firm or disposal of my interest in the said business or change in the name and nature of my firm, I undertake to intimate to Axis Bank about such change and agree 

to submit the relevant documents to Axis Bank in terms of applicable RBI guidelines / circular (as amended from time to time) and shall continue to be liable to discharge all my 

obligations to you at all times and also reconstitute and close accounts as may be required.

Signature

Name of Individual Merchant:

Place:

I,_______________________________________, residing at _________________________________________, contact number ____________________, state and confirm that I am a 

sole proprietor trading under the name of M/S ________________________ and the nature of my business is as follows_________________________________________

I am the sole proprietor of the said concern and agree to undertake card acceptance facilities and discharge all obligations therewith. Notwithstanding any change in the constitution 

of my concern or disposal of my proprietary interest in the said business or change in the name and nature of my proprietorship, I shall continue to be liable to discharge all my 

obligations to you at all times and undertake to intimate you about the said changes and also reconstitute and close accounts/POS facility as may be warranted.

Signature

Name of Proprietor:
</textarea>
<?php 
echo $_SESSION['aadhaar'];
?>
<br>
<br>	
<img style="margin-left: 4%"src="schedule.png">
<table cellspacing="5px" cellpadding="5px" align="center">
<tr>
<td><form action="final_dev.php" method="POST">
<td> <input type="submit" value="I Agree"></input></td>
</form>
<form action="Pan.php" method="POST">
<td> <input type="submit" value="Cancel"></input></td>
</form>
</tr>
</table>
</center>
</body>
</html>