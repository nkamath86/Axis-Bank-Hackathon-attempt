<?php
// session_start();
// $_SESSION['aadhaar']=$_POST['aadhaar'];
// error_reporting('E_NOTICE');
// echo $_SESSION['aadhaar'];
// $_POST['pan'];
// $pan=$_POST['pan'];
// $con=mysql_connect("localhost","root","");
// $select=mysql_select_db("aadhaar",$con);
// // echo $pan;
// $query="Update information set pan=".$pan." where pincode='110002' ";
// $result=mysql_query($query);
error_reporting('E_NOTICE');
if(!$result)
{
  echo mysql_error();
}

?>
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
    <li class="progtrckr-done">Step 2</li>
    <li class="progtrckr-todo">Step 3</li>
</ol>

<div class="form-group">
<form action="details.php" method="POST">
<table cellpadding="50px" cellspacing="50px" style="margin-top:10%;margin-bottom: 2%">
<tr>
  <td><label class="control-label" for="inputSmall">Enter MCC : </label></td>
  <td><input name="mcc" class="form-control input-sm" type="number" size="4" min="0" max="9999" id="inputSmall" width="400px" required="true"></td>
</tr>
<tr>
<td>
	<label> </label>
</td>
</tr>

<!-- <input type="hidden" name='aadhaar' value=<?php #echo $aadhaar;?> ></input> -->

  <td><label class="control-label" for="inputSmall">Enter Merchant Website Address : </label></td>
  <td><input name="url" class="form-control input-sm" placeholder="Eg. : flipkart.com" type="text" id="inputSmall" width="400px"></td>
</tr>
<tr><td>
  <label> </label>
</td></tr>
<tr>
<tr>
  <td><label class="control-label" for="inputSmall">Enter Payment Website Address : </label></td>
  <td><input name="payment" class="form-control input-sm" type="text" id="inputSmall" width="400px"></td>
</tr>
<tr><td>
  <label> </label>
</td></tr>
<tr>
  <td><label class="control-label" for="inputSmall">Enter Return URL : </label></td>
  <td><input name="returnURL" class="form-control input-sm" type="text" id="inputSmall" width="400px"></td>
</tr>	
</table>

<input type="checkbox" name="pay" value="cc"><b>Credit Card</b>
<input type="checkbox" name="pay" value="dc"><b>Debit Card</b> 
<input type="checkbox" name="pay" value="net"><b>Net Banking</b>
<input type="checkbox" name="pay" value="mobile"><b>Mobile Banking</b>
<br>
<br/>
<fieldset>
<legend><b>Operating System : </b></legend>
<input type="radio" name="os" value="windows" checked> <b>Windows</b>
<input type="radio" name="os" value="unix"> <b>Unix</b>
<input type="radio" name="os" value="linux"><b>Linux</b>
</fieldset>
<br>
<br>
<fieldset>
<legend><b>Interface Language : </b></legend><input type="radio" name="il" value="php" checked> <b>PHP</b>
<input type="radio" name="il" value="asp"> <b>ASP</b>
<input type="radio" name="il" value="aspx"><b>ASPX</b>
<input type="radio" name="il" value="java"><b>Java</b>

<table cellspacing="5%" cellpadding="50px"><tr><td><input type="radio" name="il"> <b>Others &nbsp;&nbsp;&nbsp;</b> </td>
  <td><br></td>
  <td>
  <input name="others" class="form-control input-sm" type="text" placeholder="Please Specify" id="inputSmall" width="100px">
  </td>
  </tr>
  <table>
</fieldset>
<br>
<br>
<input class="btn btn-success" style="background-color: #8C001A;" type="submit" name="submit" value="Submit"> </input>
</form>
</div>

</center>
</body>
</html>
<?php 
// echo $_POST['url'];
// if(!isset($_POST['submit']))
//   $url=0.5;
$url=$_POST['url'];
// $url="www.google.com";

function alexa_rank($url){

    $xml = simplexml_load_file("http://data.alexa.com/data?cli=10&url=".$url);
    if(isset($xml->SD)):
      return $xml->SD->REACH->attributes();
    endif;
}
?>
<center>
<?php
if($url == null)
  echo "";
else if(!alexa_rank($url))
  {echo "There needs to be a further check required." ; ?> <br><?php echo "Please Visit the nearest branch for further processing.Thank You."; }
else
  
  header('location:agree.php');

?>
</center>